<?php

namespace Bernhardh\NovaIconSelect;

use Laravel\Nova\Fields\Select;

class NovaIconSelect extends Select
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-icon-select';

    /**
     * @var bool
     */
    public $searchable = true;

    /**
     * @var IconProvider
     */
    protected $iconProvider;

    /**
     * @param $iconProvider
     *
     * @return $this
     */
    public function setIconProvider($iconProvider): self
    {
        if (is_string($iconProvider)) {
            $iconProvider = new $iconProvider();
        }

        $this->iconProvider = $iconProvider;

        $this->options($iconProvider->getOptions());

        return $this;
    }
}
