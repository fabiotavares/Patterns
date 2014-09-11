<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 23:07
 */

namespace FT\Formulario;


class Form implements iField
{
    protected $validator;
    private $id;
    private $name;
    private $action;
    private $method;
    private $class;
    private $legend;
    private $fields  = []; //array de iField

    function __construct(Validator $validator, $id, $name, $action, $method, $class, $legend)
    {
        $this->validator = $validator;
        $this->id = $id;
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        $this->class = $class;
        $this->legend = $legend;
    }


    public function createField(iField $field)
    {
        $this->fields[] = $field;
    }

    public function resetField()
    {
        $this->fields = null;
    }

    public function render()
    {
        echo "<form id='".$this->id."' name='".$this->name."' action='".$this->action."' method='".$this->method."' class='".$this->class."'>\n";
        echo "<fieldset>\n";
        echo "<legend>".$this->legend."</legend>\n";

        array_walk($this->fields,
            function(iField $field)
            {
                $field->render();
            }
        );

        echo " </fieldset>\n";
        echo "</form>\n";
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
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

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

} 