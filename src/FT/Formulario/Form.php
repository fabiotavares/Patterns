<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 23:07
 */

namespace FT\Formulario;


class Form {
    private $id;
    private $name;
    private $action;
    private $method;
    private $class;
    private $legend;
    private $fields  = []; //array de iField

    function __construct($id, $name, $action, $method, $class, $legend)
    {
        $this->id = $id;
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        $this->class = $class;
        $this->legend = $legend;
    }

    public function addField(iField $field)
    {
        array_push($this->fields, $field);
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

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
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

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

} 