<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:20
 */

namespace FT\Formulario\Types;

use FT\Formulario\iField;

class TextArea implements iField
{
    private $name;
    private $id;
    private $value;
    private $legend;
    private $cols;
    private $rows;
    private $placeholder;
    private $required = "";

    function __construct($id, $name, $legend, $rows, $cols, $placeholder = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->legend = $legend;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".$this->id."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<textarea name='".$this->name."' id='".$this->id."' cols='".$this->cols."' rows='".$this->rows."' placeholder='".$this->placeholder."' ".$this->required.">".$this->value."</textarea>\n";
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

    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    public function getCols()
    {
        return $this->cols;
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

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

} 