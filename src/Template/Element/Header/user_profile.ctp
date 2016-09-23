<div id="da-user-profile">
    <div id="da-user-avatar">
        <?= $this->Html->image('profile.jpg', ['alt' => 'Perfil']) ?>
    </div>
    <div id="da-user-info">
        Administrador
        <span class="da-user-title">adan@piedica.com</span>
    </div>
    <ul class="da-header-dropdown">
        <li class="da-dropdown-caret">
            <span class="caret-outer"></span>
            <span class="caret-inner"></span>
        </li>
        <li class="da-dropdown-divider"></li>
        <li><a href="dashboard.html">Inicio</a></li>
        <li class="da-dropdown-divider"></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Configuración</a></li>
        <li><a href="#">Cambiar Password</a></li>
    </ul>
</div>