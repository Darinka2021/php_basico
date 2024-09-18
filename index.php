<?php
    /*variables son dinamicos
     debil en tipado
     gradual(indica explicitamente los tipos de datos se aplica en clases, funciones.)*/
    $name = "darinka";
    $isDev = false;
    $age = 24;
    echo "hola $name ";

    //saber que tipo de variable es
    var_dump($age);
    gettype($isDev);
    is_bool($age);

    //interpolacion de cadenas
    $output = 'hola $name con edad $age';
    $output2 = "hola $name con edad $age";

    //constantes: variables que no se modifican su valor
        //globales: se pueede llamar de cualquier parte del proyecto es preferible definirlas en un solo archivo
        define('LOGO_URL','https://pngimg.com/uploads/php/php_PNG35.png');

        //locales: clases o nivel del entorno que trabajamos
        const NOMBRE ="Miguel";
?>
    <img src="<?=LOGO_URL?>" alt="LogoPhp" width="200px">


<?php    
    //condicionales
    $isOld = $age < 40;
    if ($isOld){
        echo "<h2>Eres Joven </h2>";
    }
    else if($isDev){
        echo "<h2>No eres viejo pero eres dev</h2>";
    }
    else{
        echo "<h2>Eres Viejo</h2>";
    }

    //condicional ternaria
    $outputAge = $isOld? 'Eres_viejito': 'Eres Joven, felicitaciones';

    //match
            //version 1 de match
    /*$outputAgeEvaluacion = match($age){
        0,1,2 => "eres un bebe",
        3,4,5,6,7,8,9,10 => "eres un niño", 
        11,12,13,14,15,16,17 => "eres un adolescente",
    }*/
            //version 2 de match
    $outputAgeEvaluacion = match(true){
        $age < 2 => "eres un bebe",
        $age < 10 => "eres un niño", 
        $age < 18 => "eres un adolescente",
        $age == 18 => "Eres mayor de edad",
        $age < 40 => "Eres aun adulto joven",
        default  => "Eres aun adulto viejo :'v",
    };

    echo $outputAgeEvaluacion;
?>


<?php
    //arrays
    $bestLanguajes = ["php", "java","JavaScript","Python"];
    $bestLanguajes[] = "ruby"; //añadimos un valor nuevo al array
    $bestLanguajes[] = "typescript";
    echo $bestLanguajes[2];


    $person = [
        "name" => "Darinka",
        "age" => 24,
        "isDev" => true,
        "languajes" => ["PHP","JavaScript","JAVA"]
    ];
    $person["name"] = "JoseFa";
    $person["languajes"][] = "Python";
    $person["languajes"]["JavaScript"] = "TypeScript"
?>
    <ul>
        <!-- //recorrer un array-->
        <?php foreach($bestLanguajes as $key=>$lang) :?>
            <li><?php echo $key.' '.$lang; ?></li>
        <?php endforeach; ?>
    </ul>


<style>
    :root{
        background-color: black;
    }
    body{
        display: grid;
        place-content: center;
        color: aliceblue;
    }
</style>