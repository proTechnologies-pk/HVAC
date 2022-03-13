<?php

use App\Models\BannerModel;
use App\Models\Setting;

if (!function_exists('global_setting')) {
    function global_setting()
    {
        return Setting::first();
    }
}
if (!function_exists('getWebBanners')) {
    function getWebBanners()
    {
        return BannerModel::where('active',1)->get();
    }
}

if (!function_exists('UploadImage')) {
    function UploadImage($image, $dir = null)
    {
        if ($dir == null) {
            $destination_path = 'general';
        } else {
            $destination_path = $dir;
        }
        $path = $image->store($destination_path, ['disk' => 'uploads']);
        return  $path;
    }
}
if (!function_exists('image_asset')) {
    function image_asset($url)
    {
        return asset('uploads/'.$url);
    }
}

