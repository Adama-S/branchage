<?php
$nom=$_REQUEST["nom"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2> Sélection du prénom</h2>
          
         <form method="POST" action=adresse.php?nom=<?php echo $nom  ?> >
       Prénom*<input type="text" name="prenom"></br>
        
        <td>  <input type="submit" value="Valider"> <input type="reset" value="Annuler"></td>
         </form>
    </body>
</html>

<?php


?>
