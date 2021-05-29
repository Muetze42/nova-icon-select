<?php

namespace Bernhardh\NovaIconSelect\IconProviders;

use Bernhardh\NovaIconSelect\IconProvider;

class FontAwesomeIconProvider extends IconProvider
{
    public function __construct($styles = ['solid', 'brands', 'regular'], $type = 'free')
    {
        $icons = [];

        foreach ($styles as $style) {
            $merge = config('nova-icon-select-fa-'.$type.'.'.$style, []);
            $icons = array_merge($icons, $merge);
        }
        ksort($icons);

        $this->setOptions($icons);
    }
}
