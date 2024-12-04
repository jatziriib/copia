<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Flores del Guadiana</title>
    <link rel="stylesheet" href="../css/logi.css">
</head>
<body>
<div class="login-container">
    <div class="logo">
        <img src="image/logoo.jpg" alt="">
    </div>
   
    <div class="login-form">
        <form method="POST" action="principal.blade.php">
            
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required>
            
           
                <div class="error"></div>
            
            
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>

</body>
</html>
