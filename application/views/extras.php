<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/favicon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/favicon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/favicon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/favicon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/favicon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/favicon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/favicon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/favicon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/favicon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('assets/favicon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('assets/favicon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/favicon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?=base_url('assets/favicon/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=base_url('assets/favicon/ms-icon-144x144.png');?>">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
    
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <?php $this->load->view($page);?>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?=base_url('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>
    <!--[if IE]><!-->
    <script src="<?=base_url('assets/vendors/@coreui/icons/js/svgxuse.min.js');?>"></script>
    <!--<![endif]-->

  </body>
</html>