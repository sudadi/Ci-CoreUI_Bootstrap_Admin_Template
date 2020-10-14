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
    <link href="<?=base_url('assets/vendors/@coreui/chartjs/css/coreui-chartjs.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendors/@coreui/icons/css/free.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendors/@coreui/icons/css/flag.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/vendors/@coreui/icons/css/brand.min.css');?>" rel="stylesheet">
    
    <!-- CoreUI and necessary plugins-->
    <script src="<?=base_url('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>
    <!--[if IE]><!-->
    <script src="<?=base_url('assets/vendors/@coreui/icons/js/svgxuse.min.js');?>"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="<?=base_url('assets/vendors/@coreui/utils/js/coreui-utils.js');?>"></script>
    <script src="<?=base_url('assets/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js');?>"></script>
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?=base_url('assets/brand/coreui.svg#full');?>"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="<?=base_url('assets/brand/coreui.svg#signet');?>"></use>
        </svg>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url();?>">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer');?>"></use>
            </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/colors');?>">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-drop1');?>"></use>
            </svg> Colors</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/typography');?>">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-pencil');?>"></use>
            </svg> Typography</a></li>
        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-puzzle');?>"></use>
            </svg> Base</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/breadcrumb');?>"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/cards');?>"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/carousel');?>"><span class="c-sidebar-nav-icon"></span> Carousel</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/collapse');?>"><span class="c-sidebar-nav-icon"></span> Collapse</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/forms');?>"><span class="c-sidebar-nav-icon"></span> Forms</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/jumbotron');?>"><span class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/list-group');?>"><span class="c-sidebar-nav-icon"></span> List group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/navs');?>"><span class="c-sidebar-nav-icon"></span> Navs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/pagination');?>"><span class="c-sidebar-nav-icon"></span> Pagination</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/popovers');?>"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/progress');?>"><span class="c-sidebar-nav-icon"></span> Progress</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/scrollspy');?>"><span class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/switches');?>"><span class="c-sidebar-nav-icon"></span> Switches</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/tables');?>"><span class="c-sidebar-nav-icon"></span> Tables</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/tabs');?>"><span class="c-sidebar-nav-icon"></span> Tabs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/base/tooltips');?>"><span class="c-sidebar-nav-icon"></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-cursor');?>"></use>
            </svg> Buttons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/buttons/buttons');?>"><span class="c-sidebar-nav-icon"></span> Buttons</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/buttons/button-group');?>"><span class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/buttons/dropdowns');?>"><span class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/buttons/brand-buttons');?>"><span class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/charts');?>">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-chart-pie');?>"></use>
            </svg> Charts</a></li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-star');?>"></use>
            </svg> Icons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/icons/coreui-icons-free');?>"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/icons/coreui-icons-brand');?>"> CoreUI Icons - Brand</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/icons/coreui-icons-flag');?>"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-bell');?>"></use>
            </svg> Notifications</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/notifications/alerts');?>"><span class="c-sidebar-nav-icon"></span> Alerts</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/notifications/badge');?>"><span class="c-sidebar-nav-icon"></span> Badge</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/notifications/modals');?>"><span class="c-sidebar-nav-icon"></span> Modals</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/widgets');?>">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-calculator');?>"></use>
            </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Extras</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-star');?>"></use>
            </svg> Pages</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/extras/login');?>" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout');?>"></use>
                </svg> Login</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/extras/register');?>" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout');?>"></use>
                </svg> Register</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/extras/404');?>" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-bug');?>"></use>
                </svg> Error 404</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?=base_url('main/extras/500');?>" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-bug');?>"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-cloud-download');?>"></use>
            </svg> Download CoreUI</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-layers');?>"></use>
            </svg> Try CoreUI<strong>PRO</strong></a></li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-menu');?>"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?=base_url('assets/brand/coreui.svg#full');?>"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-menu');?>"></use>
          </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-bell');?>"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-list-rich');?>"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open');?>"></use>
              </svg></a></li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="<?=base_url('assets/img/avatars/6.jpg');?>" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-bell');?>"></use>
                </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open');?>"></use>
                </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-task');?>"></use>
                </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-comment-square');?>"></use>
                </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
              <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
                </svg> Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-settings');?>"></use>
                </svg> Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-credit-card');?>"></use>
                </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-file');?>"></use>
                </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked');?>"></use>
                </svg> Lock Account</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout');?>"></use>
                </svg> Logout</a>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <?php $this->load->view($page);?>
            </div>
          </div>
        </main>
        <footer class="c-footer">
          <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
          <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
      </div>
    </div>
    
  </body>
</html>