<?php

namespace App\Http\Controllers;

use App\Models\ProductSku;
use App\Models\TikTokProductLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TikTokWebhookController extends Controller{

    public function handleFBTInventoryUpdate(Request $request){
        // Nhận dữ liệu từ webhook
        $data = $request->all();
        //        dd($data);
        Log::info('FBT Inventory Update Webhook Received:', $data);

        if (isset($data['type']) && $data['type'] == 24){
            // Lấy thông tin cần thiết từ data
            $goodsId               = $data['data']['goods_id'] ?? NULL;
            $skuId                 = $data['data']['sku_id'] ?? NULL;
            $fbtWarehouseInventory = $data['data']['fbt_warehouse_inventory'][0] ?? NULL;

            if ($goodsId && $skuId && $fbtWarehouseInventory){
                // Lấy số lượng tồn kho hiện có từ thông báo
                $availableQuantity = $fbtWarehouseInventory['on_hand_detail']['available_quantity'] ?? 0;
                //                dd($availableQuantity);
                // Tìm SKU trong database bằng TikTok SKU ID
                $tiktokProductLink = TikTokProductLink::where('tiktok_sku_id', $skuId)->first();
                if ($tiktokProductLink){
                    $productSku = ProductSku::find($tiktokProductLink->sku_id);
                    if ($productSku){
                        // Cập nhật tồn kho cho SKU
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
