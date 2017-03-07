<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UPLOAD FILE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="center">SUBIR UN SOLO ARCHIVO</h1>
          <p>Esta es una de las tantas maneras de adjuntar un archivo hacia nuestro servidor, para este ejemplo solo se permiten archivos de imagen o de audio. <span class="red-text"><strong>Importante: </strong></span> Si desea personalizar el botón del upload y no usa materialize puede ver el siguiente ejemplo >><a href="http://codepen.io/uxcode/pen/pENxKo" target="_blank">Ver en Codepen</a> <<
 
          <form action="uploadfile.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file_upload">
            <button>Subir Archivo</button>
          </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  </body>
</html>
