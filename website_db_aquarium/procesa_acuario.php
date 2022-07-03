<HTML>

<HEAD>

<TITLE>View Database Records</TITLE>


</HEAD>

<BODY>

<?PHP

error_reporting(E_ALL);

ini_set('display_errors','On');

$user ="a00426099";

$password="UNIA2020$.";

$host="localhost";

$port="5432";

$dbname="a00426099";

$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";

$conn=pg_Connect($strconn);

if (!$conn) {

echo "No hay conexi<F3>n a la base de datos.\n";

exit;

}

$boton =$_POST['boton'];


echo "la variable boton es igual a $boton";

if($boton == "ALTAS")

{

include('alt_peces_1.php');

}

else if($boton == "BAJAS")

{

include('bajas_peces_1.php');

}

else if($boton == "CAMBIOS")

{


include('cambios_peces_1.php');

}

else if($boton == "CONSULTAS")

{

include('consultas_peces_1.php');

}

?>

</body>

</html>
