<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Option extends Component
{
    /**
     * options
     *
     * @var array
     */
    public $options;

    /**
     * selected value
     *
     * @var string
     */
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options, $selected)
    {
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.option');
    }

    /**
     * Input option selected value
     *
     * @param string $option
     * @return bool
     */
    public function isSelected($option)
    {
        return $option === $this->selected;
    }
}
