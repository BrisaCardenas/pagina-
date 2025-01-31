<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css"> 
    <script src="sidebar.js" defer></script> 
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">JX</div>
            <span class="title">JX Gestion</span>
        </div>
        <ul class="menu">
            <li class="menu-item" onclick="location.href='inicio.php';">🏠 Inicio</li> 
            <li class="menu-item" onclick="location.href='usuarios.php';">👥 Personas JX</li>
            <li class="menu-item" onclick="location.href='equipos.php';">💻 Equipos</li>
            <li class="menu-item" onclick="location.href='asignaciones.php';">✔ Asignaciones</li>
            <li class="menu-item" onclick="location.href='incidentes.php';">🔨 Incidentes</li>
            <li class="menu-item" onclick="location.href='historial.php';">📕 Historial</li>
        </ul>
    </div>

    <div class="main-content">
        <!-- Contenido principal aquí -->
    </div>
    <button class="toggle-button" onclick="toggleSidebar()">☰</button> 
</body>
</html>