<?php

use App\Models\Setting;

if (!function_exists('global_setting')) {
    function global_setting()
    {
      return Setting::first();
    }
}
