<?php include_once("cabecera.php"); ?>
<main>
    <?php
        //variables--------------------------------------------------------------------------------
        $name = "darinka";
        $money = 5.50;
        $isDev = false;
        $age = 24;

        //constantes
        #local
        const NOMBRE ="Miguel";
        #global
        define('LOGO_URL','https://pngimg.com/uploads/php/php_PNG35.png'); //es preferible definir las constantes globales en un archivo, para tener un mejor orden de codigo en el futuro

        //funciones para conocer el tipo de variable
        //var_dump($age); esta funcion imprime en pantalla el valor
        gettype($isDev);
        is_bool($age);

        //interpolacion de cadenas
        $outputmessage = 'hola $name con edad $age';
        $outputmessage2 = "hola $name con edad $age";

       
         //condicionales-----------------------------------------------------------------------------
         $isOld = $age < 40;
         if ($isOld){
            $outputAge ="<h2>Eres Joven </h2>";
         }
         else if($isDev){
            $outputAge ="<h2>No eres viejo pero eres dev</h2>";
         }
         else{
            $outputAge ="<h2>Eres Viejo</h2>";
         }
 
         //condicional ternaria
         $outputAge2 = $isOld? 'Eres_viejito': 'Eres Joven, felicitaciones';
 
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
 
     
         //arrays-------------------------------------------------------------------------------------
         $bestLanguajes = ["php", "java","JavaScript","Python"];
         $bestLanguajes[] = "ruby"; //añadimos un valor nuevo al array
         $bestLanguajes[] = "typescript";
         //echo $bestLanguajes[2];
 
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
    <!--vista HTML------------------------------------------------------------------------------>
    <div>
        <div class="mycard" id="cb">
            <h2>concepto b&aacute;sico</h2>
            <div id="cb_texto">
                <h5>Variables</h5>
                    <ul>
                        <li>Din&aacute;micas: sus valores y tipo de dato pueden cambiar segun se asigna el valor.</li>
                        <li>Constantes: a diferencia de las din&aacute;micas esta variables no modifican ni cambia su valor asignado.
                            <ul>
                                <li>global: en todo el proyecto</li>
                                <li>local: solo en el entorno de trabajo</li>
                            </ul>
                        </li>
                        <li>Gradual: se puede definir el tipo de valor que recepcionar&aacute; normalmente se aplican en las clases y funciones.</li>
                    </ul>
            </div>
            <div id="cb_img_logo_php">
                <img src="<?=LOGO_URL?>" alt="Logo-php">
                <p>Para esta imagen se utilizo una constante global</p>
            </div>
        </div>
        <div class="mycard">
            <h5>Array</h5>
            <ul>
                <!-- #recorrer un array-->
                <?php foreach($bestLanguajes as $key=>$lang) :?>
                    <li><?php echo $key.' '.$lang; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
       
    </div>


</main>
<?php include_once("footer.php"); ?>