<?php
$selectedGenres = $_POST['generos'];

$libros = array(
    array("titulo" => "Libro 1", "genero" => "Ingeneria En Software"),
    array("titulo" => "Libro 2", "genero" => "Ingeneria En Mecanica"),
    array("titulo" => "Libro 3", "genero" => "Licenciatura En Negocios"),
    array("titulo" => "Libro 4", "genero" => "Negocios"),
);

$librosRecomendados = array_filter($libros, function($libro) use ($selectedGenres) {
    return in_array($libro['genero'], $selectedGenres);
});

if (!empty($librosRecomendados)) {
    echo "<h2>Libros Recomendados:</h2>";
    foreach ($librosRecomendados as $libro) {
        echo "<p>" . $libro["titulo"] . "</p>";
    }
} else {
    echo "No se encontraron libros recomendados para los géneros seleccionados.";
}
?>