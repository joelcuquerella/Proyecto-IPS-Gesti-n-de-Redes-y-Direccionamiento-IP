<?php
require_once __DIR__ . '/../src/header.php';
require_once __DIR__ . '/../src/footer.php';

render_header('Panel principal de IPs');
?>
<section>
    <p>Bienvenido al panel principal para gestionar redes, VLANs y dispositivos.</p>
    <ul>
        <li><a href="/redes.php">Listado y creación de redes</a></li>
        <li><a href="/vlans.php">Gestión de VLANs</a></li>
        <li><a href="/nombres_dispositivos.php">Inventario de dispositivos</a></li>
        <li><a href="/buscar.php">Búsquedas</a></li>
    </ul>
</section>
<?php render_footer(); ?>
