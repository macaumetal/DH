<!DOCTYPE HTML>
<html>
<body>
<form action="imprimir.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<br>
<label for="hobbies">¿Qué hobbies tenés?</label>
<br>
<br>
<label><input type="checkbox" id="musica" value="chk1">Música</label><br>
<label><input type="checkbox" id="cine" value="chk2">Cine</label><br>
<label><input type="checkbox" id="arte" value="chk3">Arte</label><br>
<label><input type="checkbox" id="modelismo" value="chk4">Modelismo</label><br>
<br>
<label><input type="radio" id="masculino" name="sexo">Masculino</label>
<label><input type="radio" id="femenino" name="sexo">Femenino</label><br>
<br>
<select name="select">
  <option value="value1" selected="">Value 1</option> 
  <option value="value2">Value 2</option>
  <option value="value3">Value 3</option>
  <option value="value1">Value 4</option> 
  <option value="value2">Value 5</option>
  <option value="value3">Value 6</option>
  <option value="value1">Value 7</option> 
  <option value="value2" >Value 8</option>
  <option value="value3">Value 9</option>
  <option value="value1">Value 10</option> 
</select>
<br>
<br>
<input type="submit">
</form>
</body>
</html>