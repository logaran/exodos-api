<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exodos-api</title>
</head>

<body>
    <?php

    const URL = "https://raw.githubusercontent.com/zach-morris/plugin.program.iagl/main/resources/data/dat_files/eXoDOS_ZachMorris.xml";

    $xml_data = file_get_contents(URL);

    if ($xml_data === FALSE) {
        echo "Error al recuperar los datos";
    } else {
        $xml = simplexml_load_string($xml_data);
        echo "<h1>" . "Títulos de los juegos" . "</h1>";
        echo "<ul>";
        foreach ($xml->game as $gam) {
            $titulo = (string) $gam["name"];
            $descripcion = (string) $gam->plot;
            echo "<li>"
                .$titulo .": "
                ."<p>"
                .$descripcion
                ."</p>"
                ."</li>";
        }
        echo "<ul>";
    }
    ?>
</body>

</html>