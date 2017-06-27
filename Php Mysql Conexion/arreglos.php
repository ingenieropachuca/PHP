<html>
    <head></head>
    <body>
        <?php
        $arreglo =array(1,2,3);
        foreach ($arreglo as $elemento)
        {
            echo $elemento . "<br>";
        }

        $arreglo_bi= array(

            array("pedro",23),
            array("pablo",26),
            array("juan",34),
            );
            for ($index=0; $index < count($arreglo_bi) ; $index++) 
            { 
            echo $arreglo_bi[$index][0];
            echo " - ";
            echo $arreglo_bi[$index][1];
            echo " <br> ";
            }
 echo "<br>";
            foreach($arreglo_bi as $persona)
            {

                echo $persona[0];
                echo " - ";
                echo $persona[1];
                echo "<br>";
            }
            echo "<br>";
//NUEVO ARREGLO ASOCIATIVO 

            $personas= array(
            array("nombre" => "pedro", "edad"=> 23),
            array("nombre" => "pablo", "edad"=> 26),
            array("nombre" => "juan", "edad"=> 34)
            );

            foreach ($personas as $persona) {
                echo $persona["nombre"];
                echo " - ";
                echo $persona["edad"];
                echo "<br>";
            }



        ?>
    </body>
    
</html>