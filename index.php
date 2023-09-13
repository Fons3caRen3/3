<?php
// Realizamos la conexión con el servidor
  $mysqli = new mysqli('localhost', 'demo', 'root', 'Base_datos');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Demo de menú desplegable</title>
  <meta charset=utf-8" />
</head>
<body>
  <div align="center"> 
    <p>Seleccione un pais del siguiente menú:</p>
    <p>Paises:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM paises");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.$valores[paises].'</option>';
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
</body>
 
</html>