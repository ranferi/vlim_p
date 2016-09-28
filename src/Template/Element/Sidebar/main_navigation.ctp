<?php $controlador = $this->request->controller; ?>
<div id="da-main-nav" class="btn-container">
    <ul>
        <li <?php echo ($controlador === 'Avisos')? 'class="active"' : ''?>>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-home"></i></span>
                <?= __('Avisos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Avisos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Avisos', 'action' => 'administrar']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'Pacientes')? 'class="active"' : ''?>>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-parents"></i></span>
                <?= __('Pacientes') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Pacientes', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === ('NumeroCalzados' || 'Materiales' || 'Softwares' || 'Recubrimientos'))? 'class="active"' : ''?>>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-hand-right"></i></span>
                <?= __('Otros') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Tallas'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Tipo de Software'), ['controller' => 'Softwares', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Recubrimientos'), ['controller' => 'Recubrimientos', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'Parametros')? 'class="active"' : ''?>>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><i class="icon-settings"></i></span>
                <?= __('Parametros') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Parametros', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Parametros', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'Pedidos')? 'class="active"' : ''?>>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><i class="icon-cart-in"></i></span>
                <?= __('Pedidos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Pedidos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'Usuarios' && $this->request->action === 'ver')? 'class="active"' : ''?>>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-user"></i></span>
                <?= __('Mi Perfil') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Editar mi Perfil'), ['controller' => 'Usuarios', 'action' => 'ver', 1]) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'Productos')? 'class="active"' : ''?>>
            <a href="#"><span class="da-nav-icon"><i class="icon-blog"></i></span>
                <?= __('Productos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Productos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li <?php echo ($controlador === 'CategoriaProductos')? 'class="active"' : ''?>>
            <a href="#"><span class="da-nav-icon"><i class="icon-more-windows"></i></span>
                <?= __('Categorías de Productos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'CategoriaProductos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'CategoriaProductos', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li >
            <a href="#"><span class="da-nav-icon"><i class="icon-notes-2"></i></span>
                Reporte
            </a>
            <!--<ul class="closed">
                <li><a href="grids.html">Grids and Panels</a></li>
                <li><a href="typography.html">Typography</a></li>
            </ul>-->
        </li>
        <li <?php echo ($controlador === 'Usuarios')? 'class="active"' : ''?>>
            <a href="#"><span class="da-nav-icon"><i class="icon-database-plus"></i></span>
                <?= __('Usuarios') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('General'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Diseñadores'), ['controller' => 'Usuarios', 'action' => 'diseniadores']) ?></li>
                <li><?= $this->Html->link(__('Sucursales'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Vendedores'), ['controller' => 'Usuarios', 'action' => 'vendedores']) ?></li>
                <li><?= $this->Html->link(__('Control'), ['controller' => 'Usuarios', 'action' => 'control']) ?></li>
                <li><?= $this->Html->link(__('Producción'), ['controller' => 'Usuarios', 'action' => 'produccion']) ?></li>
            </ul>
        </li>
    </ul>
</div>