<!--Ejercicio con inputs, checkbox,radio button y select-->
<!-- Link: https://lab.anahuac.mx/~a00426099/php_sql_exercises/page_exercise.php-->
<HTML>
<BODY bgcolor="black">
<FORM ACTION="two_page_exercise.php" METHOD=POST">
<H1 STYLE="COLOR:green;"><center>FORMULARIO ACADÉMICO</center></H1>
<font color="#D3D3D3;"><p><center>Por: Óscar Poblete Sáenz</center></p></font>
<h2 STYLE="COLOR:white;">Favor de llenar los siguientes datos:</h2> 
<p STYLE="COLOR:white;">Nombre:<INPUT TYPE="text" name="cadena" value=""size=20><br><br>
			Expediente: <INPUT TYPE="text" NAME="exp"><br><br></p>

<h2 STYLE="COLOR:white;">Selecciona las materias que has cursado:</h2>
<font color="#39ff14">
<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Microcontroladores" CHECKED>Microcontroladores<br>

<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Algebra lineal avanzada">Algebra lineal avanzada<br>

<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Algoritmos y Programación">Algoritmos y Programación<br>

<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Redes de computadoras" CHECKED>Redes de computadoras<br>

<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Introducción a la computación">Introducción a la computación<br>

<INPUT TYPE="checkbox" NAME="mat[]" VALUE="Formación Universitaria A">Formación Universitaria A<br>
<br>
</font>
<h2 STYLE="COLOR:white;">Selecciona el periodo en el que entraste:</h2> 
<font color="fc4b08;">
<INPUT TYPE="radio"NAME="per"VALUE="2021"CHECKED>Periodo 2021<br>
<INPUT TYPE="radio"NAME="per"VALUE="2019"CHECKED>Periodo 2019<br>
<INPUT TYPE="radio"NAME="per"VALUE="2017"CHECKED>Periodo 2017<br>
</font>

<h2 STYLE="COLOR:white;">Selecciona tu género:</h2>

<SELECT NAME="Genero">

   <OPTION VALUE="Femenino" SELECTED>Femenino<br>
   <OPTION VALUE="Masculino" SELECTED>Masculino<br>
   <OPTION VALUE="No binario" SELECTED>No binario<br>
</SELECT><br><br>
<INPUT TYPE="submit" VALUE="aceptar">
</FORM>
</BODY>
</HTML>

