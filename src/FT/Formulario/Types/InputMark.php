<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:00
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;

class InputMark implements iField
{
    private $name;
    private $id;
    private $value;
    private $type; //radio ou checkbox
    private $legend;
    private $checked;

    function __construct($type, $id, $name, $value, $legend, $checked = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->legend = $legend;
        $this->checked = $checked;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<div class='controls'>\n";
        echo "<label class='".$this->type."'>\n";
        echo "<input type='".$this->type."' id='".$this->id."' name='".$this->name."' value='".$this->value."' ".$this->checked.">\n";
        echo $this->legend."\n";
        echo "</label>\n";
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

    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    public function getLegend()
    {
        return $this->legend;
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

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setChecked($checked)
    {
        $this->checked = $checked;
    }

    public function getChecked()
    {
        return $this->checked;
    }

    public function setStr($legend)
    {
        $this->legend = $legend;
    }

    public function getStr()
    {
        return $this->legend;
    }

} 