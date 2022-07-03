<!-- Link: https://lab.anahuac.mx/~a00426099/php_sql_exercises/select_multiple.php-->
<HTML>

<BODY> 

<? 

$pais=$_REQUEST['pais'];

                echo "el pais es $pais "; 

        echo "Los paises seleccionados son:<br>";  

        echo "<br>";

while (list ($key,$valor) = @each ($pais)) {

echo "$valor,"; 

}

?> 

</BODY>

</HTML>
