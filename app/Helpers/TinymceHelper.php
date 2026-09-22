<?php

use App\Services\TinyMceKeyService;

if (!function_exists('tinymce_api_key')) {
    function tinymce_api_key(): ?string
    {
        return app(TinyMceKeyService::class)->getRandomAvailableKeyAndIncreaseUsage();
    }
}
