<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:00
 */

namespace FT\Formulario\Types;

use FT\Formulario\FieldBasic;
use FT\Formulario\iField;

class InputMark extends FieldBasic implements iField
{
    private $type; //radio ou checkbox
    private $legend;
    private $checked;

    function __construct($type, $id, $name, $value, $legend, $checked = "")
    {
        parent::setId($id);
        parent::setName($name);
        parent::setValue($value);
        $this->type = $type;
        $this->legend = $legend;
        $this->checked = $checked;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<div class='controls'>\n";
        echo "<label class='".$this->type."'>\n";
        echo "<input type='".$this->type."' id='".parent::getId()."' name='".parent::getName()."' value='".parent::getValue()."' ".$this->checked.">\n";
        echo $this->legend."\n";
        echo "</label>\n";
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
     * @param boolean $checked
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    }

    /**
     * @return boolean
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * @param mixed $legend
     */
    public function setStr($legend)
    {
        $this->legend = $legend;
    }

    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->legend;
    }

} 