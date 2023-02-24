<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;

class BrowserOverride extends Browser
{
    protected $modifiedConfig = [];

    public function withConfig($config = [])
    {
        $this->modifiedConfig = $config;

        return $this;
    }

    public function visit($url)
    {
        if (!empty($this->modifiedConfig))
            $url .= (parse_url($url, PHP_URL_QUERY) ? '&' : '?') . 'duskconfig=' . json_encode($this->modifiedConfig);

        return parent::visit($url);
    }
}