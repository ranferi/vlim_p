<?php $cakeDescription = 'CRM Piedica'; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- CSS Reset -->
    <?= $this->Html->css('reset.css') ?>
    <!--  Fluid Grid System -->
    <?= $this->Html->css('fluid.css') ?>
    <!-- Theme Stylesheet -->
    <?= $this->Html->css('dandelion.theme.css') ?>
    <!--  Main Stylesheet -->
    <?= $this->Html->css('dandelion.css') ?>

    <!-- jQuery JavaScript File -->
    <?= $this->Html->script('jquery-1.7.2.min.js') ?>

    <!-- jQuery-UI JavaScript Files -->
    <?= $this->Html->script('/jui/js/jquery-ui-1.8.20.min.js') ?>
    <?= $this->Html->script('/jui/js/jquery.ui.timepicker.min.js') ?>
    <?= $this->Html->script('/jui/js/jquery.ui.touch-punch.min.js') ?>
    <?= $this->Html->css('/jui/css/jquery.ui.all.css') ?>

    <!-- Plugin Files -->

    <!-- FileInput Plugin -->
    <?= $this->Html->script('jquery.fileinput.js') ?>
    <!-- Placeholder Plugin -->
    <?= $this->Html->script('jquery.placeholder.js') ?>
    <!-- Mousewheel Plugin -->
    <?= $this->Html->script('jquery.mousewheel.min.js') ?>
    <!-- Scrollbar Plugin -->
    <?= $this->Html->script('jquery.tinyscrollbar.min.js') ?>
    <!-- Tooltips Plugin -->
    <?= $this->Html->script('/plugins/tipsy/jquery.tipsy-min.js') ?>
    <?= $this->Html->css('/plugins/tipsy/tipsy.css') ?>
    <!-- Spinner Plugin -->
    <?= $this->Html->script('/jui/js/jquery.ui.spinner.min.js') ?>

    <!-- WYSIWYG -->
    <?= $this->Html->script('/plugins/elrte/js/elrte.min.js') ?>
    <?= $this->Html->script('scripts.js') ?>
    <?= $this->Html->css('/plugins/elrte/css/elrte.css') ?>

    <!-- Validation Plugin -->
    <?= $this->Html->script('/plugins/validate/jquery.validate.js') ?>

    <!-- Statistic Plugin JavaScript Files (requires metadata and excanvas for IE) -->
    <?= $this->Html->script('jquery.metadata.js') ?>

    <!--[if lt IE 9]>
    <?= $this->Html->script('excanvas.js') ?>
    <![endif]-->
    <?= $this->Html->script('core/plugins/dandelion.circularstat.min.js') ?>

    <!-- Wizard Plugin -->
    <?= $this->Html->script('core/plugins/dandelion.wizard.min.js') ?>

    <!-- Fullcalendar Plugin -->
    <?= $this->Html->script('/plugins/fullcalendar/fullcalendar.min.js') ?>
    <?= $this->Html->script('/plugins/fullcalendar/gcal.js') ?>
    <?= $this->Html->css('/plugins/fullcalendar/fullcalendar.css') ?>
    <?= $this->Html->css('/plugins/fullcalendar/fullcalendar.print.css') ?>

    <!-- Load Google Chart Plugin -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        // Load the Visualization API and the piechart package.
        google.load('visualization', '1.0', {'packages':['corechart']});
    </script>
    <!-- Debounced resize script for preventing to many window.resize events
          Recommended for Google Charts to perform optimally when resizing -->
    <?= $this->Html->script('jquery.debouncedresize.js') ?>



    <!-- Core JavaScript Files -->
    <?= $this->Html->script('core/dandelion.core.js') ?>

    <?= $this->Html->script('scripts.js') ?>
    <?= $this->Html->css('estilos.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="da-wrapper" class="fluid">

        <!-- Header -->
        <div id="da-header">

            <div id="da-header-top">


                <!-- Contenedor -->
                <div class="da-container clearfix">

                    <!-- Contenedor de Logo. All images put here will be vertically centere -->
                    <div id="da-logo-wrap">
                        <div id="da-logo">
                            <div id="da-logo-img">
                                <a href="dashboard.html">
                                    <?= $this->Html->image('background_logo.png', ['alt' => 'Admin']) ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Header Toolbar Menu -->
                    <div id="da-header-toolbar" class="clearfix">
                        <?= $this->element('Header/user_profile'); ?>
                        <?= $this->element('Header/button_container'); ?>

                    </div>

                </div>
            </div>

            <!-- Mensaje Flash -->
            <?= $this->Flash->render() ?>

            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">

                    <!--<div id="da-search">
                        <form>
                            <input type="text" placeholder="Search..." />
                        </form>
                    </div>-->

                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <ul>
                            <li class="active"><span><?= $this->Html->image('icons/black/16/home.png', ['alt' => 'Inicio']) ?>Inicio</span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- Content -->
        <div id="da-content">

            <!-- Container -->
            <div class="da-container clearfix">

                <!-- Sidebar Separator do not remove -->
                <div id="da-sidebar-separator"></div>

                <!-- Sidebar -->
                <div id="da-sidebar">
                    <!-- Main Navigation -->
                    <?= $this->element('Sidebar/main_navigation'); ?>
                </div>

                <!-- Main Content Wrapper -->
                <div id="da-content-wrap" class="clearfix">

                    <!-- Content Area -->
                    <div id="da-content-area">

                        <?= $this->fetch('content') ?>


                        <div class="clear"></div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Footer -->
        <div id="da-footer">
            <div class="da-container clearfix">
                <p>Copyright 2016. Piedica.
            </div>
        </div>

    </div>

    <footer>
    </footer>
</body>
</html>