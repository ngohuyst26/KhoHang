<?php

namespace App\Services;

class OpenIdService{

    protected $openId;
    protected $shopId;

    public function setOpenId($openId){
        $this->openId = $openId;
    }

    public function setShopId($shopId){
        $this->shopId = $shopId;
    }

    public function getOpenId(){
        return $this->openId;
    }

    public function getShopId(){
        return $this->shopId;
    }
}
