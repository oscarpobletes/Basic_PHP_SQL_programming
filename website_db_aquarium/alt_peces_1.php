
<html>

<head><title>altas_peces</title></head>

<body bgcolor="FFA500">

<form method="post" action="alt_peces_2.php">

<?PHP

$user ="a00426099"; 

$password="UNIA2020$."; 

$host="localhost";

$port="5432";

$dbname="a00426099";

$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";

$conn=pg_Connect($strconn);

if(!$conn)

{ echo "no se conecto a la base\n";

exit;

}

?>

<TABLE>

<TR><TH>ALTA NUEVOS PECES EN EL ACUARIO</TH></TR>

<TR><TD>NOMBRE DEL PEZ :</TD>

<TD><INPUT type="Text" name="nombre" align="LEFT"

size="60" maxlength="100"></TD>

</TR>

<TR><TD>NUMERO :</TD>

<TD><INPUT type="Text" name="numero" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>COLOR :</TD>

<TD><INPUT type="Text" name="color" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>PESO :</TD>

<TD><INPUT type="Text" name="peso" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>TANQUE :</TD>

<TD><INPUT type="Text" name="tanque" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>ESPECIE :</TD>

<TD><INPUT type="Text" name="especie" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<tr><td><INPUT type="Submit" name="c_submit" value="Enviar Datos"></td></tr>

</TABLE>

</form>
<?PHP
echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
?>
</body>

</html>
