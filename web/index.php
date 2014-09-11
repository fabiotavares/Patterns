<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 27/08/14
 * Time: 19:12
 */

use \FT\Formulario\Form;
use \FT\Formulario\Types\Button;
use \FT\Formulario\Types\InputMark;
use \FT\Formulario\Types\InputText;
use \FT\Formulario\Types\Select;
use \FT\Formulario\Types\Option;
use \FT\Formulario\Types\TextArea;
use \FT\Formulario\Request;
use \FT\Formulario\Validator;

define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$request = new Request();
$validator = new Validator($request);
$form = new Form($validator, 'iForm', 'form', '#', 'post', 'form-horizontal', 'Cadastro');

$form->createField(new InputText("text", "iNome", "nome", "Nome:"));
$form->createField(new InputText("text", "iEndereco", "endereco", "Endereço:"));
$form->createField(new InputMark("radio", "iSexo1", "sexo", "", "Masculino"));
$form->createField(new InputMark("radio", "iSexo2", "sexo", "", "Feminino"));

$select = new Select("iEstado", "estado", "Estado:", "Seu estado");
$select->addOption(new Option("mg", "Minas Gerais"));
$select->addOption(new Option("es", "Espírito Santo"));
$select->addOption(new Option("rj", "Rio de Janeiro"));
$select->addOption(new Option("sp", "São Paulo"));
$select->addOption(new Option("pr", "Paraná"));
$form->createField($select);

$form->createField(new InputText("email", "iEmail", "email", "Email:", "Digite seu email"));
$form->createField(new InputText("password", "iSenha", "senha", "Senha:", "Digite sua senha"));
$form->createField(new TextArea("iObs", "obs", "Observações:", 6, 50));
$form->createField(new InputMark("checkbox", "iNews", "news", "", "Receber novidades por email"));
$form->createField(new Button("submit", "iSub", "sub", "Enviar", "btn btn-primary"));

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Code.Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<div class="container">
    <body>
        <div class="hero-unit">
            <h2>PHP: Design Patterns</h2>
            <h2><small>Projeto Fase 2 - Fábio Tavares</small></h2>
        </div>

<?php $form->render(); ?>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</div>

</html>