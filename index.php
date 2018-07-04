<?php

use BSScripts\Collapse;
use BSScripts\Tabs;

include (__DIR__ . '/vendor/BSScripts/Collapse.php');
include (__DIR__ . '/vendor/BSScripts/Tabs.php');

$collapses = array(
    /**
     * @param id      required handle
     * @param type    tag name
     * @param control button text
     * @param pane    body text
     * @param ctrlClass control button сlass
     * @param paneClass additional body layer сlass
     */
    array(
        'id' => 'example1',
        'type' => 'a',
        'control' => 'Toggle first element',
        'ctrlClass' => 'btn btn-primary',
        'paneClass' => 'multi-collapse',
        'pane' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.',
    ),

    array(
        'id' => 'example2',
        'type' => 'button',
        'control' => 'Toggle second element',
        'ctrlClass' => 'btn btn-secondary',
        'paneClass' => 'multi-collapse',
        'pane' => array('BSScripts\Collapse', 'example'),
    ),
);

$add = array(
  'id' => 'example3',
  'control' => 'Toggle both elements',
  'data-target' => '.multi-collapse',
  'aria-controls' => 'example1 example2',
);

?><!doctype html>
<html class="no-js" lang="ru-RU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <!-- <link rel="apple-touch-icon" href="icon.png"> -->
  <!-- Place favicon.ico in the root directory -->
  
  <!-- include function or replace to footer -->
  <!-- <script src="js/vendor/modernizr-3.6.0.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/jquery.min.js"><\/script>')</script>
  
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <script src="assets/bootstrap.min.js"></script>
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="https://browsehappy.com/">обновите ваш браузер</a> для лучшего отображения и безопасности.</p>
  <![endif]-->

  <div class="container">
    <h2 style="margin-top: 30px;">Collapse</h2>
    <?
    $Collapse = new Collapse( $collapses, $active = 'none', $defaults = array() );
    $Collapse->add( $add );

    $Collapse->render();
    ?>

    <h2 style="margin-top: 30px;">Tabs</h2>
    <?
    $collapses[0]['id'] = 'example4';
    $collapses[1]['id'] = 'example5';

    $Tabs = new Tabs( $collapses );
    $Tabs->render();
    ?>
  </div>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -*remove me*->
  <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>