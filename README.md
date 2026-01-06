Proyecto IPS – Gestión de Redes y Direccionamiento IP

📌 **Descripción:**
Este proyecto ha sido desarrollado como parte de las prácticas del ciclo de Administración de Sistemas Informáticos en Red (ASIR), por encargo del tutor de prácticas. El objetivo principal es crear una aplicación web sencilla para gestionar redes, IPs, VLANs y dispositivos mediante formularios PHP conectados a una base de datos MySQL.

🧰 **Tecnologías utilizadas:**
- PHP
- MySQL
- HTML + CSS
- TailwindCSS (opcional, para el diseño)
- Servidor Apache (Windows)

🗂️ **Estructura del proyecto:**

Estructura generada con `find . -maxdepth 3 -not -path './.git*'`:

```
.
├── config
│   ├── .env.example
│   └── config.php
├── public
│   ├── buscar.php
│   ├── insertar_dispositivo.php
│   ├── insertar_red.php
│   ├── insertar_vlan.php
│   ├── indexip.php
│   ├── nombres_dispositivos.php
│   ├── redes.php
│   ├── style.css
│   └── vlans.php
├── src
│   ├── db.php
│   ├── footer.php
│   └── header.php
└── README.md
```

📡 **Publicación del código:**

Este repositorio se mantiene de forma local dentro de este entorno de trabajo y no se ha subido a GitHub. Si quieres publicarlo, bastaría con crear un repositorio remoto y ejecutar `git remote add origin <URL>` seguido de `git push -u origin <rama>`.


⚙️ **Funciones implementadas:**
- Inserción de redes, VLANs y dispositivos mediante formularios.
- Listado de registros guardados en la base de datos.
- Edición y eliminación de registros.
- Búsqueda de datos específicos.
- Diseño modular con cabecera y pie de página comunes (`header.php` y `footer.php`).

---

🧑‍💻 **Autores:**
- Joel Cuquerella Bataller  

📅 Abril 2025
