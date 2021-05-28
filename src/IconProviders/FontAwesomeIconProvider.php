<?php

namespace Bernhardh\NovaIconSelect\IconProviders;

use Bernhardh\NovaIconSelect\IconProvider;

class FontAwesomeIconProvider extends IconProvider
{
    public function __construct($styles = ['solid', 'brands'])
    {
        $icons = [];

        foreach ($styles as $style) {
            $merge = config('nova-icon-select-fa-free.'.$style, []);
            $icons = array_merge($icons, $merge);
        }
        ksort($icons);

        $this->setOptions($icons);
    }
}
