<?php
function render_header(string $title = 'Gestión de Redes') : void {
    echo "<!DOCTYPE html>\n";
    echo "<html lang=\"es\">\n<head>\n<meta charset=\"UTF-8\">\n";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    echo "<title>{$title}</title>\n";
    echo "<link rel=\"stylesheet\" href=\"/style.css\">\n";
    echo "</head>\n<body>\n<header class=\"site-header\">\n";
    echo "<h1>{$title}</h1>\n<nav><a href=\"/indexip.php\">Inicio</a> | <a href=\"/redes.php\">Redes</a> | <a href=\"/vlans.php\">VLANs</a> | <a href=\"/nombres_dispositivos.php\">Dispositivos</a></nav>\n";
    echo "</header>\n<main>\n";
}
