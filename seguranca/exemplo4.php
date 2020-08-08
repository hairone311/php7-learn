<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<form action="cadastrar.php" method="POST">
    <div class="g-recaptcha" data-sitekey="key"></div>
    <input type="email" name="inputEmail">
    <button type="submit">Enviar</button>
</form>
