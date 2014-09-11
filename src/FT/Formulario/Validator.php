<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 11/09/14
 * Time: 14:58
 */

namespace FT\Formulario;


class Validator
{
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }

} 