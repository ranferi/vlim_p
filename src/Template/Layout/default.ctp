<?php $cakeDescription = 'CRM Piedica'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<html>
<head>
    <?= $this->Html->charset() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Bootstrap Stylesheet -->
    <?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>

    <!-- Theme Stylesheet -->
    <?= $this->Html->css('dandelion.theme') ?>
    <!-- Icon Stylesheet -->
    <?= $this->Html->css('fonts/glyphicons/style.css') ?>
    <!--  Main Stylesheet -->
    <?= $this->Html->css('dandelion.css') ?>

    <!-- JS Libs -->
    <?= $this->Html->script('libs/jquery-1.12.4.min', ['block' => true]) ?>
    <?= $this->Html->script('libs/jquery.mousewheel.min', ['block' => true]) ?>

    <!-- JS Bootstrap -->
    <?= $this->Html->script('/bootstrap/js/bootstrap.min', ['block' => true]) ?>

    <!-- jQuery-UI JavaScript Files -->
    <?= $this->Html->script('/jui/js/jquery-ui.min', ['block' => true]) ?>
    <?= $this->Html->script('/jui/jquery.ui.touch-punch.min', ['block' => true]) ?>
    <?= $this->Html->css('/jui/css/jquery.ui.all') ?>

    <?php if (($this->request->controller === 'Avisos' && $this->request->action === 'administrar')
        || ($this->request->controller !== 'Avisos' && $this->request->action === 'index')
        || ($this->request->controller === 'Usuarios' &&
            ($this->request->action === 'produccion' || $this->request->action === 'control'
                || $this->request->action === 'vendedores' || $this->request->action === 'diseniadores'))) {
        /* DataTables Plugin */
        $this->Html->script('/plugins/datatables/jquery.dataTables.min', ['block' => true]);
        $this->Html->script('index.administrar.js', ['block' => true]);
    } else if($this->request->action === 'editar' || $this->request->action === 'crear') {
        /* Timepicker Plugin */
        $this->Html->script('/jui/jquery.ui.timepicker.min', ['block' => true]);
        /* Placeholder Plugin */
        $this->Html->script('libs/jquery.placeholder.min', ['block' => true]);
        /* Validation Plugin */
        $this->Html->script('/plugins/validate/jquery.validate', ['block' => true]);
        /* Redactor */
        $this->Html->script('/plugins/redactor/redactor', ['block' => true]);
        $this->Html->script('/plugins/redactor/langs/es.js', ['block' => true]);
        $this->Html->css('/plugins/redactor/redactor', ['block' => true]);

        $this->Html->script('crear.editar', ['block' => true]);
    } ?>

    <?= $this->Html->script('core/dandelion.core.js', ['block' => true]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script'); ?>
</head>
<body>
    <div id="da-wrapper">

        <!-- Header -->
        <div id="da-header">

            <div id="da-header-top">

                <!-- Container -->
                <div class="da-container clearfix">

                    <!-- Logo Container. -->
                    <div id="da-logo-wrap">
                        <div id="da-logo">
                            <div id="da-logo-img">
                                <a href="#">
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
            <?= $this->Flash->render() ?>
            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">

                    <!--<div id="da-search">
                        <form>
                            <input type="text" class="search-query" placeholder="Search...">
                        </form>
                    </div>-->

                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <?php echo $this->Html->getCrumbList([
                                'firstClass' => false,
                                'lastClass' => 'active',
                                'escape' => false
                        ], '<i class="icon-home"></i> Inicio'); ?>
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
                <div id="da-sidebar"><?= $this->element('Sidebar/main_navigation'); ?></div>

                <!-- Main Content Wrapper -->
                <div id="da-content-wrap" class="clearfix">

                    <!-- Content Area -->
                    <div id="da-content-area">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="da-footer">
            <div class="da-container clearfix">
                <p>Copyright 2016. Piedica.</p>
            </div>
        </div>
    </div>


</body>
