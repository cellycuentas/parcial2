
<?php
$nombre = htmlspecialchars($_POST["nombre"] ?? "", ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($_POST["correo"] ?? "", ENT_QUOTES, "UTF-8");
$mascota = htmlspecialchars($_POST["mascota"] ?? "", ENT_QUOTES, "UTF-8");

echo "<h1>Turno reservado en Veterinaria Patitas</h1>";

echo "<p><strong>Nombre completo:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo electrónico:</strong> " . $correo . "</p>";
echo "<p><strong>Contanos de tu mascota:</strong> " . nl2br($mascota) . "</p>";

$servicios = [
    "Consulta general - Bs 60",
    "Vacuna antirrabica - Bs 40",
    "Bano y corte - Bs 50"
];

echo "<h2>Servicios de la veterinaria</h2>";
echo "<ul>";

foreach ($servicios as $servicio) {
    echo "<li>" . $servicio . "</li>";
}

echo "</ul>";

echo "<p>Te atiende Celly Villca Cuentas.</p>";
?>
