<div id="da-main-nav" class="da-button-container">
    <ul>
        <li class="active">
            <a href="#">
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/megaphone.png', ['alt' => 'Avisos']) ?></span>
                <?= __('Avisos') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Avisos', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Avisos', 'action' => 'administrar']) ?></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/users_2.png', ['alt' => 'Pacientes']) ?></span>
                <?= __('Pacientes') ?>
            </a>
            <ul class="closed">
                <li><?= $this->Html->link(__('Crear'), ['controller' => 'Pacientes', 'action' => 'crear']) ?></li>
                <li><?= $this->Html->link(__('Administrar'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/applications.png', ['alt' => 'Otros Detalles']) ?></span>
                <?= __('Otros') ?>
            </a>

        </li>
        <li>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/tools.png', ['alt' => 'Parametros']) ?></span>
                Parametros
            </a>
        </li>
        <li>
            <a href="#">
                <!-- Icon Container -->
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/truck_2.png', ['alt' => 'Pedidos']) ?></span>
                Pedidos
            </a>
        </li>
        <li>
            <a href="#">
                <span class="da-nav-icon"><?= $this->Html->image('icons/black/32/footprint.png', ['alt' => 'Perfil']) ?></span>
                Mi Perfil
            </a>
            <!--<ul class="closed">
                <li><a href="#">Layouts</a></li>
                <li><a href="#">Elements</a></li>
                <li><a href="#">Validation</a></li>
            </ul>-->
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><?= $this->Html->image('icons/black/32/book.png', ['alt' => 'Productos']) ?></span>
                Productos
            </a>
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><?= $this->Html->image('icons/black/32/file_cabinet.png', ['alt' => 'Categorías de Productos']) ?></span>
                Categorías de Productos
            </a>
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><?= $this->Html->image('icons/black/32/documents_1.png', ['alt' => 'Reporte']) ?></span>
                Reporte
            </a>
            <!--<ul class="closed">
                <li><a href="grids.html">Grids and Panels</a></li>
                <li><a href="typography.html">Typography</a></li>
            </ul>-->
        </li>
        <li>
            <a href="#"><span class="da-nav-icon"><?= $this->Html->image('icons/black/32/single_user.png', ['alt' => 'Usuarios']) ?></span>
                Usuarios
            </a>
        </li>
    </ul>
</div>