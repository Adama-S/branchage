<?php
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2> Sélection de l'adresse</h2>
          
         <form method='POST' action='result.php?nom=<?php echo $nom; ?>&prenom=<?php echo $prenom; ?>'>
       Adresse*<input type="text" name="adresse"></br>
        
        <td>  <input type="submit" value="Valider"> <input type="reset" value="Annuler"></td>
         </form>
    </body>
</html>

<?php


?>
