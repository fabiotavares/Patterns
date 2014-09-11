<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:18
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;

class Button implements iField
{
    private $name;
    private $id;
    private $value;
    private $type; //submit ou reset
    private $class;

    function __construct($type, $id, $name, $value, $class)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->class = $class;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<div class='controls'>\n";
        echo "<button type='".$this->type."' id='".$this->id."' name='".$this->name."' class='".$this->class."'>".$this->value."</button>\n";
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

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

} 