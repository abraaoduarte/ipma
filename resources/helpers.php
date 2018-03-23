<?php

if (! function_exists('versioned_asset')) {
    function versioned_asset($path, $secure = null)
    {
        return app('url')->asset($path, $secure) .  '?v=' . filemtime(public_path($path));
    }
}