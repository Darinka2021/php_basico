<?php
    //header page
    include_once("cabecera.php");

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
<main>
    <h2>Consumo de API</h2>
    <pre>
        <?php var_dump($data);?>
    </pre>
    <section>
            <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
            style ="border-radius: 16px"/> 
    </section>
    <hgroup>
        <h2><?= $data["title"];?></h2>
    </hgroup>
</main>

<?php
    //footer page
    include_once("footer.php"); 
 ?>

