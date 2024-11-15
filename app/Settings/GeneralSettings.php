<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;
    public array $socials;

    public static function group(): string
    {
        return 'general';
    }
}
