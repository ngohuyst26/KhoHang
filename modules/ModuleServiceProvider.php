<?php

namespace Module;

use File;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider{

    public function register(){ }

    public function boot(){
        // Đăng ký modules theo cấu trúc thư mục
        $directories = array_map('basename', File::directories(__DIR__));
        foreach ($directories as $moduleName){
            $this->registerModule($moduleName);
        }
    }

    private function registerModule($moduleName){
        $modulePath = __DIR__ . "/$moduleName/";
        $modulePath = str_replace('/', '\\', $modulePath);
        // Khai báo route
        if (File::exists($modulePath . "Routes\admin.php")){
            $this->loadRoutesFrom($modulePath . "Routes\admin.php");
        }

        if (File::exists($modulePath . "Routes\web.php")){
            $this->loadRoutesFrom($modulePath . "Routes\web.php");
        }

        if (File::exists($modulePath . "Routes\api.php")){
            $this->loadRoutesFrom($modulePath . "Routes\api.php");
        }
        // Khai báo migration
        // Toàn bộ file migration của modules sẽ tự động được load
        if (File::exists($modulePath . "Migrations")){
            $this->loadMigrationsFrom($modulePath . "Migrations");
        }

        // Khai báo views
        // Gọi view thì ta sử dụng: view('Demo::index'), @extends('Demo::index'), @include('Demo::index')
        if (File::exists($modulePath . "Views")){
            $this->loadViewsFrom($modulePath . "Views", $moduleName);
        }

        // Khai báo languages
        if (File::exists($modulePath . "resources/lang")){
            // Đa ngôn ngữ theo file php
            // Dùng đa ngôn ngữ tại file php resources/lang/en/general.php : @lang('Demo::general.hello')
            $this->loadTranslationsFrom($modulePath . "resources/lang", $moduleName);
            // Đa ngôn ngữ theo file json
            $this->loadJSONTranslationsFrom($modulePath . 'resources/lang');
        }
        // Khai báo helpers
        if (File::exists($modulePath . "helpers")){
            // Tất cả files có tại thư mục helpers
            $helper_dir = File::allFiles($modulePath . "helpers");
            // khai báo helpers
            foreach ($helper_dir as $key => $value){
                $file = $value->getPathName();
                require $file;
            }
        }
    }

}