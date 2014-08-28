<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 15:05
 */

namespace FT\Formulario\Types;

use FT\Formulario\FieldBasic;
use FT\Formulario\iField;

class Select  extends FieldBasic implements iField
{
    private $legend;
    private $placeholder;
    private $multiple = "";
    private $size = 1;
    private $options = []; //array de Option

    function __construct($id, $name, $legend, $placeholder = '')
    {
        parent::setId($id);
        parent::setName($name);
        $this->legend = $legend;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".parent::getId()."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<select id='".parent::getId()."' name='".parent::getName()."' value='".parent::getValue()."' placeholder='".$this->placeholder."' size='".$this->size."' ".$this->multiple.">\n";
        //echo "<option value=''></option>";
        echo "<option value='' disabled selected style='display:none; color: #c43c35'></option>";
        array_walk($this->options, function(Option $option)
        {
            $option->render();
            echo "\n";
        });

        echo "</select>\n";
        echo "</div>\n";
        echo "</div>\n";
    }

    public function addOption(Option $option)
    {
        array_push($this->options, $option);
    }

    public function resetOption()
    {
        $this->options = null;
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
     * @param mixed $multiple
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    /**
     * @return mixed
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

} 