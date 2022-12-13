<?php
    include("conexion.php");
    $cantidad = $_POST['cantidad'];
    $sql = "SELECT * FROM carreras";
    $result = $conn->query($sql);
    $resultado = $result->fetch_all();
?>

<form action="insertarUsuarios.php" method="post">
    <input type='hidden' name='numero' value='<?php echo $cantidad; ?>'>
    <?php for ($i=1; $i <= $cantidad; $i++) { ?>
            <label for='nombre'>Nombre: </label>
            <input type='text' name='nombre<?php echo $i ?>'>
            <label for='apellido'>Apellido: </label>
            <input type='text' name='apellido<?php echo $i ?>'>
            <label for='cu'>CU: </label>
            <input type='text' name='cu<?php echo $i ?>'>
            <input type='radio' name='sexo<?php echo $i ?>' value='Masculino'>
            <label for='sexo'>Masculino</label>
            <input type='radio' name='sexo<?php echo $i ?>' value='Femenino'>
            <label for='sexo'>Femenino</label>
            <select name='carrera<?php echo $i ?>'>
            <?php foreach ($resultado as $dato) {?>
                "<option value='<?php echo $dato[0]; ?>'><?php echo $dato[1] ?></option>
            <?php } ?>
            </select>
            <br>
    <?php } ?>
    <input type="submit" value="Enviar">
</form>