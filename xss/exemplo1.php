<form method="POST">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['busca'])) {
    // echo strip_tags($_POST['busca']); // Remove tags html
    echo htmlentities($_POST['busca']); // Transforma tags em texto simples
}

?>