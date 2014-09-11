<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 26/08/14
 * Time: 19:37
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;

class InputText implements iField
{
    private $name;
    private $id;
    private $value;
    private $type; //text, password, email
    private $legend;
    private $placeholder;
    private $required = "";

    function __construct($type, $id, $name, $legend, $placeholder="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->legend = $legend;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".$this->id."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<input type='".$this->type."' id='".$this->id."' name='".$this->name."' value='".$this->value."' placeholder='".$this->placeholder."' ".$this->required."'>\n";
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

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setRequired($required)
    {
        $this->required = $required;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

} 