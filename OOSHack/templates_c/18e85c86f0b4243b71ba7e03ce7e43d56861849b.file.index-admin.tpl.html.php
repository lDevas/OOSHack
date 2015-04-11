<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 21:40:11
         compiled from "./templates/index-admin.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1959229642552974cd509564-35095588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18e85c86f0b4243b71ba7e03ce7e43d56861849b' => 
    array (
      0 => './templates/index-admin.tpl.html',
      1 => 1428780246,
      2 => 'file',
    ),
    '71f01513e6a1777fa1626c7c6882e9dc7b66b094' => 
    array (
      0 => './templates/base-admin.tpl.html',
      1 => 1428781206,
      2 => 'file',
    ),
    '952195c67b4d59167dd97fb725caaa2183f6c6cd' => 
    array (
      0 => './templates/navbar-admin.tpl.html',
      1 => 1428780577,
      2 => 'file',
    ),
    '922785490857a04f5fd6a03e0d8da139e54127c9' => 
    array (
      0 => './templates/sidebar-admin.tpl.html',
      1 => 1428781206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1959229642552974cd509564-35095588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552974cd5867c4_95486909',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552974cd5867c4_95486909')) {function content_552974cd5867c4_95486909($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>

    <title>MercadoLibre</title>


    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8888/public/css/main-admin.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8888/public/css/iconos.css"/>


    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

    

</head>
<body>



    <?php /*  Call merged included template "navbar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1959229642552974cd509564-35095588');
content_5529789b783185_06894987($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "navbar-admin.tpl.html" */?>


<?php /*  Call merged included template "sidebar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sidebar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1959229642552974cd509564-35095588');
content_5529789b792805_83838247($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sidebar-admin.tpl.html" */?>


<section id="main-content" class="sb-init">
    
    
</section>


<?php echo '<script'; ?>
>

    $('#boton-ampliar').click(function() {
        if(!$('#boton-ampliar').hasClass('sb-collapsed')) {
            $('#boton-ampliar').addClass('sb-collapsed');
            $('#sidebar-admin').addClass('sb-collapsed');
            $('#main-content').addClass('sb-collapsed');
            $('#main-content').width( $(window).width() - 60);

        } else {
            $('#sidebar-admin').addClass('sb-restaurando');

            setTimeout(function() {
                $('#boton-ampliar').removeClass('sb-collapsed');
                $('#sidebar-admin').removeClass('sb-restaurando');
                $('#sidebar-admin').removeClass('sb-collapsed');
                $('#main-content').removeClass('sb-collapsed');
                $('#main-content').width( $(window).width() - $('#sidebar-admin').width());
                sizeSecciones();
            }, 700);
        }
    });


    $('#boton-perfil').click(function() {
        if(!$('#perfil-ampliado').hasClass('show')) {
            $('#perfil-ampliado').addClass('show');
            setTimeout(function() {
                $('#perfil-ampliado').addClass('visible');
                $('#boton-perfil').addClass('activo');
            }, 20);
        } else {
            $('#perfil-ampliado').removeClass('visible');
            $('#boton-perfil').removeClass('activo');
            setTimeout(function() {
                $('#perfil-ampliado').removeClass('show');
            }, 200);


        }
    });


    $('.input').each(function() {
        addFocusInput(this, true);
        removeFocusInput(this, false);

        $(this).focusin(function() {
            addFocusInput(this, true);
        });
        $(this).focusout(function() {
            removeFocusInput(this, false);
        });
    });

    function addFocusInput(input, addFocus) {
        if(addFocus || $(input).val().length !=0) {
            $(input).parent().find('label').addClass('label-focus');
            $(input).addClass('input-focus');
        }
    }

    function removeFocusInput(input, clearFocus) {
        if(clearFocus || $(input).val().length == 0) {
            $(input).parent().find('label').removeClass('label-focus');
            $(input).removeClass('input-focus');
        }
    }

    function showBloqueAlerta(destino ,contenido, estado)
    {
        var bloqueAlerta = '<div class="bloque-alerta ' + estado + '"><p>' + contenido + '</p></div>';
        $(destino).append(bloqueAlerta);

        $(destino).find(".bloque-alerta").fadeIn();
    }

<?php echo '</script'; ?>
>



</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 21:40:11
         compiled from "./templates/navbar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_5529789b783185_06894987')) {function content_5529789b783185_06894987($_smarty_tpl) {?><section id="navbar-admin" class="clearfix">
    <nav class="nav nav-izq">
        <ul class="clearfix">
            <li>
                <a href="#" id="boton-ampliar" class="icon-navicon"></a>
            </li>

        </ul>
    </nav>

    <nav class="nav nav-der">
        <ul class="clearfix">
            <li>
                <a id="boton-perfil" class=clearfix" href="#">
                    <p>Nombre</p>
                    <i class="icon-abajo"></i>
                </a>
            </li>
        </ul>

    </nav>

    <div id="perfil-ampliado">
        <ul>
            <li>
                <a href="#">Ajustes</a>
            </li>
            <li>
                <a href="/auth/logout">Salir</a>
            </li>
        </ul>
    </div>

</section><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 21:40:11
         compiled from "./templates/sidebar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_5529789b792805_83838247')) {function content_5529789b792805_83838247($_smarty_tpl) {?>
<section id="sidebar-admin" class="sb-init">

    <div class="sb-seccion-logo">
        <a href="#">
            <img class="logo" src="http://localhost:8888/public/img/logo-blanco.svg">
            <img class="logo-collapsed" src="http://localhost:8888/public/img/logo-blanco-collapsed.svg">


        </a>
    </div>

    <nav class="sb-menu">
        <ul>

            <li><a href="#">
                <i class="icon-home"></i><span class="nombre-seccion">Escritorio</span>
                </a></li>

            <li><a href="#">
                <i class="icon-paginas"></i><span class="nombre-seccion">Páginas</span>
                </a></li>

            <li><a href="#">
                <i class="icon-mail"></i><span class="nombre-seccion">Mensajes</span>
                </a></li>

            <li><a href="#">
                <i class="icon-grafica"></i><span class="nombre-seccion">Analíticas</span>
                </a></li>

            <li><a href="#">
                <i class="icon-paginas"></i><span class="nombre-seccion">Productos</span>
                </a></li>


        </ul>
    </nav>

</section><?php }} ?>
