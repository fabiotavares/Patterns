<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 14:20
 */

namespace FT\Formulario\Types;

use FT\Formulario\FieldBasic;
use FT\Formulario\iField;

class TextArea extends FieldBasic implements iField
{
    private $legend;
    private $cols;
    private $rows;
    private $placeholder;
    private $required = "";

    function __construct($id, $name, $legend, $rows, $cols, $placeholder = "")
    {
        parent::setId($id);
        parent::setName($name);
        $this->legend = $legend;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        echo "<div class='control-group''>\n";
        echo "<label class='control-label' for='".parent::getId()."'>".$this->legend."</label>\n";
        echo "<div class='controls'>\n";
        echo "<textarea name='".parent::getName()."' id='".parent::getId()."' cols='".$this->cols."' rows='".$this->rows."' placeholder='".$this->placeholder."' ".$this->required.">".parent::getValue()."</textarea>\n";
        echo "</div>\n";
        echo "</div>\n";
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
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
     * @param boolean $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

} 