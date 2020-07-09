<form>
    <input type="text" name="nome">
    <input type="date" name="Nascimento">
    <input type="submit" value="Enviar">
</form>

<?php

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value . "<br>";
        echo "<hr>";
    }
}