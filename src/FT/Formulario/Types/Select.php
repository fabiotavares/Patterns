<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 15:05
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;
use FT\Formulario\FieldContainer;

class Select extends FieldContainer
{
    private $name;
    private $id;
    private $value;
    private $legend;
    private $placeholder;
    private $multiple = "";
    private $size = 1;

    function __construct($id, $name, $legend, $placeholder = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->legend = $legend;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".$this->id."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<select id='".$this->id."' name='".$this->name."' value='".$this->value."' placeholder='".$this->placeholder."' size='".$this->size."' ".$this->multiple.">\n";
        //echo "<option value=''></option>";
        echo "<option value='' disabled selected style='display:none; color: #8fff9c'></option>";
        array_walk($this->fields, function(iField $field)
        {
            $field->render();
            echo "\n";
        });

        echo "</select>\n";
        echo "</div>\n";
        echo "</div>\n";
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    public function getLegend()
    {
        return $this->legend;
    }

    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    public function getMultiple()
    {
        return $this->multiple;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

} 