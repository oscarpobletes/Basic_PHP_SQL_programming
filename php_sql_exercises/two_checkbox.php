<!-- Link: https://lab.anahuac.mx/~a00426099/php_sql_exercises/checkbox.php-->
<HTML>

<BODY>


<? 

$ciudad=$_POST['ciudad'];

       echo "Las ciudades visitadas son:<br>";  

       echo "<br>";

while (list ($key,$valor) = @each ($ciudad)) {

echo "$valor, "; 

}



?> 



</BODY>

</HTML>
