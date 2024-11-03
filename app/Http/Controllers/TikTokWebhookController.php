<?php

namespace App\Http\Controllers;

use App\Models\ProductSku;
use App\Models\TikTokProductLink;
use App\Models\UserTikTokAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TikTokWebhookController extends Controller{

    public function handleFBTInventoryUpdate(Request $request){
        $data    = $request->all();
        $tenants = UserTikTokAccount::where('open_id', $request->seller_open_id)->first();
        Log::info('FBT Inventory Update Webhook Received:', $data);

        if (isset($data['type']) && $data['type'] == 24){
            $goodsId               = $data['data']['goods_id'] ?? NULL;
            $skuId                 = $data['data']['sku_id'] ?? NULL;
            $fbtWarehouseInventory = $data['data']['fbt_warehouse_inventory'][0] ?? NULL;

            if ($goodsId && $skuId && $fbtWarehouseInventory){
                $availableQuantity = $fbtWarehouseInventory['on_hand_detail']['available_quantity'] ?? 0;
                tenancy()->initialize($tenants->tenant_id);
                $tiktokProductLink = TikTokProductLink::where('tiktok_sku_id', $skuId)->first();
                if ($tiktokProductLink){
                    $productSku = ProductSku::find($tiktokProductLink->sku_id);
                    if ($productSku){
                        $productSku->inventory = $availableQuantity;
                        $productSku->save();

                        Log::info('Updated inventory for SKU: ' . $productSku->id . ' to ' . $availableQuantity);
                    }else{
                        Log::warning('Product SKU not found for TikTok SKU ID: ' . $skuId);
                    }
                }else{
                    Log::warning('TikTok Product Link not found for TikTok SKU ID: ' . $skuId);
                }
            }else{
                Log::error('Invalid FBT inventory data received.');
            }
        }

        return response()->json(['status' => 'success']);
    }
}
