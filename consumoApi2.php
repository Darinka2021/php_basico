<?php
const API_URL_DOG = "https://dog.ceo/api/breeds/image/random";
const API_URL_USER = "https://randomuser.me/api/";

//solo nos permite realizar get, para traida de datos
$result = file_get_contents(API_URL_DOG);

//codifica a formato Json
$data = json_decode($result, true);

?>
<?php include_once("cabecera.php") ?>
<main>
    <div class="myclassApi">
        <h2>Consumo de Api 2</h2>
        <div class="api_pre">
            <pre>
                <?= var_dump($data); ?>
            </pre>
        </div>
        <div class="api_img">
            <img src="<?= $data["message"]; ?>" alt="img_de_perro" />
        </div>
    </div>
</main>

<?php include_once("footer.php") ?>