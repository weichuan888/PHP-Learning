<?php
// Connexion à la base de données

class DB {
  public $bdd;

  function __construct(){
    try
    {
      $this->bdd= new PDO ('mysql:host=localhost; dbname=4wings', 'root', 'user');
      $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "connected successfully";

    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
      // echo "connection failed";
    }
  }

  public function getDb(){
     return $this->bdd;
  }
}

  // $filename=basename($_FILES['$file_name']['name']);
  // $description= $_POST["Description"];
  // $sql = "INSERT INTO Team (url_Img, Title, Description) VALUES ('$filename', $description)" ;


function displayTitles() {
  $DB = new DB();
  $bdd = $DB->getDb();
  $reponse=$bdd->query("SELECT * FROM Team");
  while($donnees=$reponse->fetch())
  {
    echo "<p>  {$donnees['Title']} {$donnees['Description']} </p>";
    echo '<img src="'.$donnees['url_Img'].' ">';
  }

  $reponse->closeCursor();
}
displayTitles();

function NewImage($url){
   $url_Img = $url;
   $title = isset($_POST['name']) ? $_POST['name'] : "";
   $description =  isset($_POST['message']) ? $_POST['message'] : "";

   if($title != "" && $description != ""){
      $DB = new DB();
      $bdd = $DB->getDb();
      $request = $bdd->prepare('INSERT INTO Team (url_Img, Title, Description) VALUES(?, ?, ?)');
      $request->execute([$url_Img, $title, $description]);
   }
}




 ?>


<?php
  // error_reporting(E_ALL);
  // var_dump($_FILES);
  //
  // if (isset($_POST['submit']))
  // {
  //   $Upload_File= $_FILES['fichiertruc']['name'];
  //   $file_tmp_name = $_FILES['fichiertruc']['tmp_name'];
  //   $Upload_Dest = 'files/' . basename($Upload_File);
  //   $Upload_Size = $_FILES['fichiertruc']['size'];
  //
  //   $Upload_Allow= array('.pdf', '.jpeg', '.jpg', '.png');
  //   $Upload_Extension = strrchr($file_name, ".");
  //
  //   if(!empty($_FILES))
  //   {
  //     if(file_exists($file_dest)){
  //
  //       if(in_array($Upload_Extension, $Upload_Allow) && ($Upload_Size < 5000000))
  //       {
  //            if(move_uploaded_file($file_tmp_name, $file_dest))
  //            {
  //                 echo 'Fichier envoyé avec succès';
  //            } else {
  //                  echo "Une erreur est survenue lors de l'envoie du fichier";
  //            }
  //       }
  //       else if (empty($Upload_Dest))
  //       {
  //           echo " Please Select a file to upload.";
  //       }
  //       else if ($Upload_Size > 5000000)
  //       {
  //           echo " Your file is too large";
  //       }
  //       else {
  //           echo "Erreur.";
  //       }
  //     }
  //   }
  // }
 ?>

<?php


// error_reporting(E_ALL);
//
// var_dump($_FILES);

$uploadOk=1;
// $file_tmp_name ="";
// $file_name = "";

  if(!empty($_FILES)) {

    $file_tmp_name = $_FILES['fichiertruc']['tmp_name'];
    $file_name = $_FILES['fichiertruc']['name'];
    $file_dest = 'files/' . basename($file_name);

    if(file_exists($file_dest)) {

      $extension = strstr($file_dest, '.');
      $newname = strstr($file_dest, '.' ,true);
      $file_dest = $newname.mt_rand(0,100).$extension;

      // echo "<br> TEST:";
      // var_dump(basename($file_name));
      // echo "<br> TEST:";
      // echo "Sorry, file already exists.";
      $uploadOk = 0;

      if ($_FILES['fichiertruc']['size']> 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      $file_extension = strrchr($file_name, ".");
      $extension_autorisees = array('.pdf', '.PDF', '.png', '.jpeg', '.jpg');

      if(in_array($file_extension, $extension_autorisees))
      {
          if(move_uploaded_file($file_tmp_name, $file_dest)){
               echo 'Fichier envoyé avec succès';
               NewImage($file_dest);
          } else {
                echo "Une erreur est survenue lors de l'envoie du fichier";
          }
      } else {
             echo "Seul les fichiers PDF sont autorisées";
      }
  }
}

?>



<!doctype html>
<html>
    <head>
        <title>Upload  de fichier PDF</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Uploader un fichier PDF</h1>

        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <label>Nom :
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Dupont" required>
              </label>
            </div>
            <br/>

            <div class="form-group">
              <label>Description :
                <textarea class="form-control" name="message" type="textarea" id="message" maxlength="500" rows="7" cols="110">
                </textarea>
              </label>
            </div>
            <br/>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
            <input type="file" name="fichiertruc" /> <br/>
            <input type="submit" value="Envoyer le fichier" />
        </form>
    </body>
</html>
