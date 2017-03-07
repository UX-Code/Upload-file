<?php
  // El archivo a incluir se encuentra en el repositorio random
  include('../../random/random.php');

  $nameFile = randAlphanum(30).date('Ymdhs');
  $paths = array("image_upload/", "mp3_upload/");
  $successUpload = false;

  // Capturamos el nombre original del archivo con su extension.
  $fileUploadName = strtolower(basename($_FILES["file_upload"]["name"]));
  $fileUploadExt  = pathinfo($fileUploadName,PATHINFO_EXTENSION);

  // Validamos que el archivo sea mp3 o imagen >> Se le asigna la carpeta donde se debe guardar

  if($fileUploadExt == "mp3"){
    $path = $paths[1];
    $typeFile = "audio";
    $successUpload = true;
  }else{
      if($fileUploadExt != "jpg" && $fileUploadExt != "png" && $fileUploadExt != "jpeg" && $fileUploadExt != "gif" ) {
        $msn = "El archivo debe ser Imagen o Mp3";
        $successUpload = false;
      }else{
        $typeFile = "imagen";
        $path = $paths[0];
        $successUpload = true;
      }

    $typeFile = "";
  }

  // Validamos el peso del archivo, para este ejemplo no se permite archivos de imagen superiores a 2MB y archivos de audio superiores a 4MB

  switch ($typeFile) {
    case 'audio':
        if($_FILES["file_upload"]["size"] > 16777216){
          $msn = "Ooops! tu imagen no puede superar mas de 4MB";
          $successUpload = false;
        }
    break;

    case 'imagen':
        if($_FILES["file_upload"]["size"] > 16777216){
          $msn = "Ooops! tu imagen no puede superar mas de 2MB";
          $successUpload = false;
        }
    break;
  }


if($successUpload == true){

  $file = $path. $nameFile .".". $fileUploadExt;

  if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $file)) {
      $msn = "El archivo  se subio correctamente.  <br>";
  } else {
    $msn =  "Ocurrio un error, empiece a ver en que fallo";
  }
}

header("Location: index.php?msn=$msn");






?>
