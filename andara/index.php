<?php

// ----------------------------------------------------------------------------------------------------
// - Display Errors
// ----------------------------------------------------------------------------------------------------
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

// ----------------------------------------------------------------------------------------------------
// - Error Reporting
// ----------------------------------------------------------------------------------------------------
error_reporting(-1);

// ----------------------------------------------------------------------------------------------------
// - Shutdown Handler
// ----------------------------------------------------------------------------------------------------
function ShutdownHandler()
{
    if(@is_array($error = @error_get_last()))
    {
        return(@call_user_func_array('ErrorHandler', $error));
    };

    return(TRUE);
};

register_shutdown_function('ShutdownHandler');

// ----------------------------------------------------------------------------------------------------
// - Error Handler
// ----------------------------------------------------------------------------------------------------
function ErrorHandler($type, $message, $file, $line)
{
    $_ERRORS = Array(
        0x0001 => 'E_ERROR',
        0x0002 => 'E_WARNING',
        0x0004 => 'E_PARSE',
        0x0008 => 'E_NOTICE',
        0x0010 => 'E_CORE_ERROR',
        0x0020 => 'E_CORE_WARNING',
        0x0040 => 'E_COMPILE_ERROR',
        0x0080 => 'E_COMPILE_WARNING',
        0x0100 => 'E_USER_ERROR',
        0x0200 => 'E_USER_WARNING',
        0x0400 => 'E_USER_NOTICE',
        0x0800 => 'E_STRICT',
        0x1000 => 'E_RECOVERABLE_ERROR',
        0x2000 => 'E_DEPRECATED',
        0x4000 => 'E_USER_DEPRECATED'
    );

    if(!@is_string($name = @array_search($type, @array_flip($_ERRORS))))
    {
        $name = 'E_UNKNOWN';
    };

    return(print(@sprintf("%s Error in file \xBB%s\xAB at line %d: %s\n", $name, @basename($file), $line, $message)));
};

$old_error_handler = set_error_handler("ErrorHandler");

// other php code



?>
    <!doctype html>
    <html class="no-js" lang="" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Grupo ANDARA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function () {
                $(document).tooltip();
            });
        </script>
        <script>
            $("#form_139587_5").click(function () {
                alert('clicked!');
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#save').click(function () {
                    var Name = encodeURIComponent($('#text_element0').val());
                    var Celular = encodeURIComponent($('#text_element1').val());
                    var Cantidad = encodeURIComponent($('#text_element2').val());
                    var Lugar = encodeURIComponent($('#text_element3').val());
                    // Respuestas:
                    //console.log('hola');
                    //alert('Hola');
                    var R1 = 'entry.1861194638';
                    var R2 = 'entry.770466488';
                    var R3 = 'entry.759023796';
                    var baseURL = 'https://docs.google.com/forms/d/1nTqpJvcxOD_3v1vC8kBeWT6FduW8CmFjPgWu9NtzwzU/formResponse?';
                    var submitRef = '&submit=submit';
                    var submitURL = (baseURL + R1 + '=' + Name + '&' + R2 + '=' + Celular + '&' + R3 + '=' + Cantidad + submitRef);
                    // $(this)[0].action=submitURL;
                    console.log(submitURL);
                    window.open(submitURL);
                })
            })
        </script>

    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div id="centered" style="text-align: center">
        <div class="row">
            <div class="col-md-12">
                <div id="form_container">
                    <div class="form-content-wrap">
                        <div id="formHeader" class="form-header" style="padding: 0px;">

                            <img id="logoImage" src="img/Banner.jpg">
                        </div>

                        <div class="form-content">
                            < class="form_column_two" id="form_wraper_div">
                                <form class="view_form" target="no-target" action="" method="POST"
                                      id="formularioCulpable" enctype="multipart/form-data">
                                    <ul id="unorder_list_container">
                                        <div class="view_header"><h2 id="form_setting_para_1">Grupo ANDARA</h2>

                                            <p id="form_setting_para_2">Reservaciones para Dalí, Ritter, Santo
                                                Diablo</p></div>
                                        <!-- Pregunta uno-->

                                        <li style="display:block;" class="inkdesk_form" id="0" data-title="1">
                                            <div id="continer_div1" class="view_wrapper view_click">
                                                <div class="fg-outlined">
                                                    <input type="text" name="text_element0" id="text_element0"
                                                           data-title="true" maxlength="300"
                                                           data-label="Nombre para la Mesa"
                                                           placeholder="Nombre para la Mesa"></div>
                                            </div>
                                            <p id="des_para1" class="field_desc para_visibility"
                                               title="Escribe tu nombre o de la persona a quien vayas a poner la mesa.">
                                                <span></span></p></li>

                                        <!-- Pregunta 2-->

                                        <li style="display:block;" class="inkdesk_form" id="1" data-title="3">
                                            <div id="continer_div2" class="view_wrapper">
                                                <div class="fg-outlined">
                                                    <input type="text" name="text_element1" id="text_element1"
                                                           maxlength="" data-label="Celular (Para confirmación)"
                                                           placeholder="Celular (Para confirmación)">
                                                </div>
                                            </div>
                                            <p id="des_para2" class="field_desc"
                                               title="Te solicitamos un celular para confirmar la mesa."><span></span>
                                            </p></li>

                                        <!-- Pregunta 3-->
                                        <li style="display:block;" class="inkdesk_form" id="2" data-title="1">
                                            <div id="continer_div3" class="view_wrapper">
                                                <div class="fg-outlined">
                                                    <input type="text" name="text_element2" id="text_element2"
                                                           maxlength="5" data-label="Cantidad de Personas (Número)"
                                                           placeholder="Cantidad de Personas (Número)"></div>
                                            </div>
                                            <p id="des_para3" class="field_desc"
                                               title="Para saber qué tipo de mesa te podemos dar"><span></span></p></li>
                                        <!-- Pregunta 4 Aquí-->
                                        <li style="display:block;" class="inkdesk_form" id="4" data-title="1">
                                            <div id="condainer_div4" class="view_wrapper">
                                                <div class="fg-outlined">
                                                    <select name="select_element1" id="select_element1"
                                                        data-label="En qué lugar va a reservar" title="Lugar de la reservación">
                                                        <option value></option>
                                                        <option value="Santo Diablo">Santo Diablo</option>
                                                        <option value="Ritter">Ritter</option>
                                                        <option value="Dalí">Dalí</option>
                                                        <option value="La Mayor"</select>
                                                    </select>
                                                </div>
                                                </div>
                                            <p id="des_para4" class="field_desc"
                                                   title="Para saber dónde se reserva"><span></span></p></li>

                                        <!-- Pregunta 5 aquí -->


                                        <li style="display:block;" id="3" data-title="8">

                                        </li>
                                        <!-- Boton reservar -->
                                        <li class="form_button" id="form_139587_5" data-title="Button">
                                            <input type="button" name="save" id="save" value="Reservar!"></span></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Form content-->
                <div class="clear"></div>

                <!--Form footer-->
            </div>
            <!--/Form Container-->

        </div>
        <!-- /col-md-12--->
    </div>
    </div>
    <iframe src="#" id="no-target" name="no-target" style="visibility:hidden"></iframe>
    <div class="vacioHeight" style="height: 200px;"></div>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
    </body>
    </html>
<?php ?>