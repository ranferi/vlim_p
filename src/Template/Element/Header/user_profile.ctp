<div id="da-user-profile-wrap">
    <div id="da-user-profile" data-toggle="dropdown" class="clearfix">
        <div id="da-user-avatar">
            <?= $this->Html->image('profile.jpg', ['alt' => 'Perfil']) ?>
        </div>
        <div id="da-user-info">
            Administrador
            <span class="da-user-title">adan@piedica.com<</span>
        </div>
    </div>
    <ul class="dropdown-menu">
        <li><a href="#">Inicio</a></li>
        <li class="divider"></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Configuración</a></li>
        <li><a href="#">Cambiar Password</a></li>
    </ul>
</div>