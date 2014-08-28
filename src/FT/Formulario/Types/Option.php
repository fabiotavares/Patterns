<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 15:20
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;

class Option implements iField
{
    private $value;
    private $legend;
    private $selected;

    function __construct($value, $legend, $selected = "")
    {
        $this->value = $value;
        $this->legend = $legend;
        $this->selected = $selected;
    }

    public function render()
    {
        echo "<option value='".$this->value."' ".$this->selected.">".$this->legend."</option>";
    }

    /**
     * @param mixed $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    /**
     * @return mixed
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param mixed $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    /**
     * @return mixed
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

} 