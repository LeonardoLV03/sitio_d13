<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="/guardar-formulario" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" id=""><br>
        
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="correo" id=""><br>
        
        <label for="message">Mensaje:</label>
        <textarea name="message" cols="30" rows="4">
        </textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>





