<div id="da-main-nav" class="btn-container">
    <ul>
        <li class="active">
            <a href="#">
                <span class="da-nav-icon"><i class="icon-home"></i></span>
                <?= __('Avisos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Avisos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Avisos', 'action' => 'administrar']) ?></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-parents"></i></span>
                <?= __('Pacientes') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Pacientes', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-hand-right"></i></span>
                <?= __('Otros') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Tallas'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><i class="icon-settings"></i></span>
                Parametros
            </a>
        </li>
        <li>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><i class="icon-cart-in"></i></span>
                Pedidos
            </a>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><i class="icon-user"></i></span>
                Mi Perfil
            </a>
            <!--<ul class="closed">
                <li><a href="#">Layouts</a></li>
                <li><a href="#">Elements</a></li>
                <li><a href="#">Validation</a></li>
            </ul>-->
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><i class="icon-blog"></i></span>
                Productos
            </a>
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><i class="icon-more-windows"></i></span>
                Categorías de Productos
            </a>
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><i class="icon-notes-2"></i></span>
                Reporte
            </a>
            <!--<ul class="closed">
                <li><a href="grids.html">Grids and Panels</a></li>
                <li><a href="typography.html">Typography</a></li>
            </ul>-->
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><i class="icon-database-plus"></i></span></span>
                Usuarios
            </a>
        </li>
    </ul>
</div>