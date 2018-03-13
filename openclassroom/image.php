<?php
if(isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
   {
     /* Si la taille ne dépasse pas 2M, taille Max pour easy php */
     if($_FILES['photo']['size'] < 2000000)
     {
       $infosfichier = pathinfo($_FILES['photo']['name']);
       $extension_upload = $infosfichier['extension'];
       $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png'); /* Les extensions acceptées */
       if(in_array($extension_upload, $extensions_autorisees)) /* Verification de l'extension du fichier avec celle autorisées */
       {
         mkdir("photo/$pseudo", 0777, true); /* Création du dossier pour uploader les images */
         move_uploaded_file($_FILES['photo']['tmp_name'], './photo/' . $pseudo . '/' . $_FILES['photo']['name']);
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
             <input type="file" name="photo" /> <br/>
             <input type="submit" value="Envoyer le fichier" />
         </form>

     </body>
 </html>
