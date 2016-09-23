<?php $cakeDescription = 'CakePHP: the rapid development php framework'; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Demo Stylesheet -->
    <?= $this->Html->css('demo.css') ?>

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

    <!-- Demo JavaScript Files -->
    <?= $this->Html->script('demo/demo.dashboard.js') ?>

    <!-- Core JavaScript Files -->
    <?= $this->Html->script('core/dandelion.core.js') ?>

    <!-- Customizer JavaScript File (remove if not needed) -->
    <?= $this->Html->script('core/dandelion.customizer.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!--    <nav class="top-bar expanded" data-topbar role="navigation">-->
    <!--        <ul class="title-area large-3 medium-4 columns">-->
    <!--            <li class="name">-->
    <!--                <h1><a href="">--><?php //$this->fetch('title') ?><!--</a></h1>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--        <div class="top-bar-section">-->
    <!--            <ul class="right">-->
    <!--                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>-->
    <!--                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </nav>-->
    <?= $this->Flash->render() ?>

    <div id="da-wrapper" class="fluid">

        <!-- Header -->
        <div id="da-header">

            <div id="da-header-top">

                <!-- Container -->
                <div class="da-container clearfix">

                    <!-- Logo Container. All images put here will be vertically centere -->
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
                        <div id="da-user-profile">
                            <div id="da-user-avatar">
                                <?= $this->Html->image('pp.jpg', ['alt' => '']) ?>
                            </div>
                            <div id="da-user-info">
                                John Doe
                                <span class="da-user-title">Creative Director</span>
                            </div>
                            <ul class="da-header-dropdown">
                                <li class="da-dropdown-caret">
                                    <span class="caret-outer"></span>
                                    <span class="caret-inner"></span>
                                </li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Change Password</a></li>
                            </ul>
                        </div>
                        <div id="da-header-button-container">
                            <ul>
                                <li class="da-header-button notif">
                                    <span class="da-button-count">32</span>
                                    <a href="#">Notifications</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                            <span class="da-dropdown-sub-title">Notifications</span>
                                            <ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                                View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="da-header-button message">
                                    <span class="da-button-count">5</span>
                                    <a href="#">Messages</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                            <span class="da-dropdown-sub-title">Messages</span>
                                            <ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                                View all messages
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="da-header-button logout">
                                    <a href="index.html">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">

                    <div id="da-search">
                        <form>
                            <input type="text" placeholder="Search..." />
                        </form>
                    </div>

                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <ul>
                            <li class="active"><span><?= $this->Html->image('icons/black/16/home.png', ['alt' => 'Inicio']) ?>Dashboard</span></li>
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
                    <div id="da-main-nav" class="da-button-container">
                        <ul>
                            <li class="active">
                                <a href="dashboard.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <?= $this->Html->image('icons/black/32/speech_bubble.png', ['alt' => 'Avisos']) ?>

                                    </span>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- Nav Notification -->
                                    <span class="da-nav-count">32</span>
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/graph.png" alt="Charts" />

                                    </span>
                                    Statistics and Charts
                                </a>
                                <ul class="closed">
                                    <li><a href="statistic.html">Statistic Widgets</a></li>
                                    <li><a href="charts.html">Chart Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/day_calendar.png" alt="Calendar" />
                                    </span>
                                    Calendar
                                </a>
                            </li>
                            <li>
                                <a href="file.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/file_cabinet.png" alt="File Handling" />
                                    </span>
                                    File Handling
                                </a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/table_1.png" alt="Table" />
                                    </span>
                                    Table
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/create_write.png" alt="Form" />
                                    </span>
                                    Form
                                </a>
                                <ul>
                                    <li><a href="form-layouts.html">Layouts</a></li>
                                    <li><a href="form-elements.html">Elements</a></li>
                                    <li><a href="form-validation.html">Validation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/settings.png" alt="" />
                                    </span>
                                    UI Elements
                                </a>
                            </li>
                            <li>
                                <a href="widgets.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/cog_4.png" alt="Widgets" />
                                    </span>
                                    Widgets
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/word_documents_1.png" alt="Layout and Typography" />
                                    </span>
                                    Layout and Typography
                                </a>
                                <ul class="closed">
                                    <li><a href="grids.html">Grids and Panels</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="gallery.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/images_2.png" alt="Gallery" />
                                    </span>
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="error.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/alert.png" alt="Error Pages" />
                                    </span>
                                    Error Page (404)
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                    	<img src="images/icons/black/32/pacman.png" alt="Icons" />
                                    </span>
                                    Icons
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Main Content Wrapper -->
                <div id="da-content-wrap" class="clearfix">

                    <!-- Content Area -->
                    <div id="da-content-area">
                        <div class="grid_3">
                            <ul class="da-circular-stat-wrap">
                                <li class="da-circular-stat {fillColor: '#a6d037', value: 55, maxValue: 98, label: 'Seeds Collected'}"></li>
                                <li class="da-circular-stat {fillColor: '#ea799b', percent: true, value: 200, maxValue: 241, label: 'iPads Cloned'}"></li>
                                <li class="da-circular-stat {fillColor: '#fab241', value: 124, maxValue: 523, label: 'Androids Bought'}"></li>
                                <li class="da-circular-stat {fillColor: '#61a5e4', percent: true, value: 42, maxValue: 100, label: 'Funds Collected'}"></li>
                            </ul>
                            <div class="da-panel-widget">
                                <h1>Estimated Revenue</h1>
                                <div id="da-ex-gchart-line" style="height:225px;"></div>
                            </div>
                        </div>

                        <div class="grid_1">
                            <div class="da-panel-widget">
                                <h1>Summary</h1>
                                <ul class="da-summary-stat">
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#e15656;">
                                                <img src="images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">211</span>
                                                <span class="label">Packages Distributed</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="images/icons/white/32/sport_shirt.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">512</span>
                                                <span class="label">T-Shirts Sold</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#ea799b;">
                                                <img src="images/icons/white/32/abacus.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">286</span>
                                                <span class="label">Transactions Completed</span>
	                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#fab241;">
                                                <img src="images/icons/white/32/airplane.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value down">61</span>
                                                <span class="label">Planes Flown</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#61a5e4;">
                                                <img src="images/icons/white/32/shopping_basket_2.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">42</span>
                                                <span class="label">Shops Visited</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#656565;">
                                                <img src="images/icons/white/32/users_2.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">266</span>
                                                <span class="label">Customers Satisfied</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="grid_2">
                            <div class="da-panel">
                                <div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img src="images/icons/color/wand.png" alt="" />
                                        Wizard Form
                                    </span>

                                </div>
                                <div class="da-panel-content">
                                    <form id="da-ex-wizard-form" class="da-form">
                                        <fieldset class="da-form-inline">
                                            <legend>Account</legend>
                                            <div class="da-form-row">
                                                <label>Username <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="username" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Email <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="email" class="required email" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Password <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="password" name="password" class="required" />
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Member</legend>
                                            <div class="da-form-row">
                                                <label>Fullname <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="fullname" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Address <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <textarea name="address" class="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Gender <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <ul class="da-form-list">
                                                        <li><input type="radio" name="gender" class="required" /> <label>Male</label></li>
                                                        <li><input type="radio" name="gender" /> <label>Female</label></li>
                                                    </ul>
                                                    <label for="gender" class="error" generated="true" style="display:none"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Membership</legend>
                                            <div class="da-form-row">
                                                <label>Membership Period <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <select name="period" class="required">
                                                        <option>1 Month</option>
                                                        <option>3 Months</option>
                                                        <option>6 Months</option>
                                                        <option>1 Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Package <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <ul class="da-form-list">
                                                        <li><input type="radio" name="package" class="required" /> <label>Basic</label></li>
                                                        <li><input type="radio" name="package" /> <label>Full</label></li>
                                                        <li><input type="radio" name="package" /> <label>Premium</label></li>
                                                    </ul>
                                                    <label for="package" class="error" generated="true" style="display:none"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Confirmation</legend>
                                            <div class="da-form-row">
                                                <label>Payment Method <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <select name="payment" class="required">
                                                        <option>PayPal</option>
                                                        <option>Visa</option>
                                                        <option>Mastercard</option>
                                                        <option>Wire Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <ul class="da-form-list inline">
                                                        <li><input type="checkbox" name="tos" class="required" /> <label>I agree to the terms of service <span class="required">*</span></label></li>
                                                    </ul>
                                                    <label for="tos" class="error" generated="true" style="display:none"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="grid_2">
                            <div class="da-panel">
                                <div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img src="images/icons/color/calendar_2.png" alt="" />
                                        Holiday Calendar
                                    </span>

                                </div>
                                <div class="da-panel-content with-padding">
                                    <div id="da-ex-calendar-gcal"></div>
                                </div>
                            </div>
                        </div>
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


    <div id="da-main-nav" class="btn-container">
        <ul id="yw1">
            <li><a><span class="da-nav-icon"><i class="icon-bullhorn"></i></span>Avisos</a>
                <ul style="display: none;" class="closed">
                    <li><a href="/prueba/index.php?r=avisos/admin">Administrar</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-parents"></i></span>Paciente</a>
                <ul style="display: none;" class="closed">
                    <li><a href="/prueba/index.php?r=cliente/admin">Administrar</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-hand-right"></i></span>Otros</a>
                <ul style="display: block;" class="">
                    <li><a href="/prueba/index.php?r=talla/admin">Tallas</a></li>
                    <li><a href="/prueba/index.php?r=caracteristicaProducto/materiales">Materiales</a></li>
                    <li><a href="/prueba/index.php?r=tipoSoftware/admin">Tipo Software</a></li>
                    <li><a href="/prueba/index.php?r=caracteristicaProducto/recubrimientos">Recubrimientos</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-settings"></i></span>Parametros</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=parametros/admin">Administrar</a></li>
                </ul>
            </li>
            <li class="active"><a><span class="da-nav-icon"><i class="icon-cart-in"></i></span>Pedidos</a>
                <ul class="closed">
                    <li class="active"><a href="/prueba/index.php?r=pedido/admin">Administrar</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-user"></i></span>Mi Perfil</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=user/editprofile">Editar mi Perfil</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-blog"></i></span>Productos</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=producto/admin">Administrar</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-more-windows"></i></span>Categoria de Productos</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=categoria/admin">Administrar</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-notes-2"></i></span>Reporte</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=pedido/index">General</a></li>
                    <li><a href="/prueba/index.php?r=pedido/report">Especificos</a></li>
                    <li><a href="/prueba/index.php?r=pedido/mensual">Mensual</a></li>
                </ul>
            </li>
            <li><a><span class="da-nav-icon"><i class="icon-database-plus"></i></span>Usuarios</a>
                <ul class="closed">
                    <li><a href="/prueba/index.php?r=user/usermanagementadmin">General</a></li>
                    <li><a href="/prueba/index.php?r=disenyador/admin">Diseñadores</a></li>
                    <li><a href="/prueba/index.php?r=sucursal/admin">Sucursales</a></li>
                    <li><a href="/prueba/index.php?r=vendedor/admin">Usuarios</a></li>
                    <li><a href="/prueba/index.php?r=control/admin">Control</a></li>
                    <li><a href="/prueba/index.php?r=productor/admin">Producción</a></li>
                </ul>
            </li>
        </ul>
    </div>



    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
