<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h1>FUNCIONES SECRETAS</h1>



    <?php
        /*argumentos infinitos*/
        function datos(){
          $args=func_get_args();
          print_r($args);
          echo "<br /><br />";

          echo __FUNCTION__;/*OBTENER EL NOMBRE DE LA FUNCION*/
          echo "<br /><br />";

        }
        datos("mango","pera","sandia");

    ?>


    <?php
      /*busca todos los archivos dentro del directorio con la extensionenviada*/
      $files=glob('*.{php,txt}',GLOB_BRACE);
      print_r($files);
        echo "<br /><br />";
    ?>


    <?php

      echo __LINE__;/*OBTENER EL NUMERO DE LINEA*/
      echo "<br /><br />";

      echo __DIR__;/*OBTENER EL DIRECTORIO*/
      echo "<br /><br />";

      echo __CLASS__;/*OBTENER EL NOMBRE DE LA CLASE EJECUTADA*/
      echo "<br /><br />";

      echo __METHOD__;/*OBTENER EL NOMBRE DEL METODO*/
      echo "<br /><br />";


      /*GENERAR UN ID UNICO*/
      echo uniqid('id_');
      echo "<br /><br />";


      /*serializar un arreglo*/
      $item=array(
        'id'=>020103,
        'nombre'=>'Manuel flores',
        'lenguajes'=>array(
          'php','javascript','css','jquery','nodejs'
        )
      );

      $string=serialize($item);
      echo $string;

      //deserealizar
      $deserealizado=unserialize($string);
      echo "<pre>
      ",print_r($deserealizado),"
      </pre>";
      echo "<br /><br />";



      /*comrimir texto*/
      $texto="hola como estas tu?, no podia dormir, estoy muy solo ,solo ,solo y tal vez, tambien tu sola estes";
      print_r(strlen($texto)); /*numero de caracteres*/

      //comprimido
      $compress=gzcompress($texto);echo "<br />";
      print_r(strlen($compress)); /*numero de caracteres*/
      echo $compress."<br />";

      /*descomprimir un texto*/
      $texto=gzuncompress($compress);echo "<br />";
      print_r(strlen($texto)); /*numero de caracteres*/


      echo "<br /><br />";

      /*imprimir en pantalla y dar estilo al codigo en la impresion mostrando el archivo*/
      //highlight_file("index.php");

      highlight_string(
        '
          <?php
            for($i=0;$i<10;$i++)
            {
              echo "hola mundo";
            }
          ?>
        '
      );
        echo "<br /><br />";

    ?>


  </body>
</html>
