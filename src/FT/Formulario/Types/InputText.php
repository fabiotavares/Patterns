<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 26/08/14
 * Time: 19:37
 */

namespace FT\Formulario\Types;

use FT\Formulario\FieldBasic;
use FT\Formulario\iField;

class InputText extends FieldBasic implements iField
{
    private $type; //text ou password
    private $legend;
    private $placeholder;
    private $required = "";

    function __construct($type, $id, $name, $legend, $placeholder="")
    {
        parent::setId($id);
        parent::setName($name);
        $this->type = $type;
        $this->legend = $legend;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".parent::getId()."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<input type='".$this->type."' id='".parent::getId()."' name='".parent::getName()."' value='".parent::getValue()."' placeholder='".$this->placeholder."' ".$this->required."'>\n";
        echo "</div>\n";
        echo "</div>\n";
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
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
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

} 