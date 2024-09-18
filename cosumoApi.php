<?php
    #cURL es una herramienta que nos permite transferir datos sin usar el navegador
    const API_URL = "https://whenisthenextmcufilm.com/api";
    #Iniciar una nueva sesion de cURl; ch = cURL handle
    $ch = curl_init(API_URL);
    //indicar que queremos recibir el resultado de la peticion y no mostrar en la pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);

    //ejecutar peticion y guardamos resultado
    $resultado = curl_exec($ch);
    $data = json_decode($resultado,true); //formateamos a Json
?>
<head>
    <meta charset="utf-8"/>
    <title>La próxima pelicula de Marvel</title>
    <meta name="description" content="La próxima pelicula de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--PICO css Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<body>
    <pre style="font-size: 8px; overflow:scroll; height: 150px;">
        <?php var_dump($data);?>
    </pre>
    <section>
            <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
            style ="border-radius: 16px"/> 
    </section>
    <hgroup>
        <h2><?= $data["title"];?></h2>
    </hgroup>
</body>

<style>
    body{
        display: grid;
        place-content: center;
        text-align: center;
    }
</style>