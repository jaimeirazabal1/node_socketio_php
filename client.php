<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Aplicación con Sockets</title>
  <script src="./socket.io.js"></script>
  <script src="public/main.js"></script>
</head>
<body>
  <h1>My App</h1>
  <form onsubmit="return addMessage(this)">
    <input type="text" id="username" placeholder="Tu Nombre" >
    <input type="text" id="texto" placeholder="Cuéntanos algo...">
    <input type="submit" value="Enviar!">
  </form>
  <div id="messages"></div>
</body>
</html>