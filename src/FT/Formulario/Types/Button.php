<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:18
 */

namespace FT\Formulario\Types;

use FT\Formulario\FieldBasic;
use FT\Formulario\iField;

class Button extends FieldBasic implements iField
{
    private $type; //submit ou reset
    private $class;

    function __construct($type, $id, $name, $value, $class)
    {
        parent::setId($id);
        parent::setName($name);
        parent::setValue($value);
        $this->type = $type;
        $this->class = $class;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<div class='controls'>\n";
        echo "<button type='".$this->type."' id='".parent::getId()."' name='".parent::getName()."' class='".$this->class."'>".parent::getValue()."</button>\n";
        echo "</div>\n";
        echo "</div>\n";
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

} 