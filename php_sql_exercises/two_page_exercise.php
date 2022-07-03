<!-- Link: https://lab.anahuac.mx/~a00426099/php_sql_exercises/page_exercise.php-->
<HTML>
<H1 STYLE="COLOR:black;"><center>RESULTADOS DEL PERFIL</center></H1><br>
<BODY bgcolor="green">
<?
$mat=$_POST['mat'];
	$exp=$_REQUEST['exp'];
	$cadena=$_REQUEST['cadena'];
	$mat=$_REQUEST['mat'];
	$per=$_REQUEST['per'];
	$Genero=$_REQUEST['Genero'];
echo "
<TABLE>
<TR>
<TD><b>NOMBRE:</b> </TD>
<TD> $cadena </TD>
</TR> 
<TR>
<TD><b>EXPEDIENTE:</b></TD>
<TD> $exp</TD>
<TR>
<TD><b>PERIODO:</b> </TD> 
<TD> $per</TD>
</TR>
<TR>
<TD><b>GENERO:</b> </TD>
<TD> $Genero</TD>
</TR>
</TABLE>";


       echo "<br><h2>Materias cursadas:</h2>";  

while (list ($key,$valor) = @each ($mat)) {

echo "* $valor<br>"; 

}


?>
</BODY>
</HTML>
