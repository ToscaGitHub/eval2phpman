<?php require_once("includes/header.inc.php"); ?>

<br>
<br>
<br>

<form action="" method="POST">

    <label for="">Rentre votre ID</label><br>
    <input type="text" name="urID" id="urID">

    
    <input type="submit" value="Envoyer">
</form>

<br>
<br>
<br>

<table>


   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>id_annuaire</th>
           <th>nom</th>
           <th>prenom</th>
           <th>telephone</th>
           <th>profession</th>
           <th>ville</th>
           <th>codepostal</th>
           <th>adresse</th>
           <th>date_de_naissance</th>
           <th>sexe</th>
           <th>description</th>
       </tr>
   </thead>

   <tbody> <!-- Corps du tableau -->
<?php

    if (!empty($_POST)) {
    $result = $connection->query("SELECT * FROM annuaire WHERE id_annuaire = " . $_POST['urID']);
    $annuaire = $result->fetch_assoc();
?>
       <tr>
           <td><?php echo $annuaire['id_annuaire']?></td>
           <td><?php echo $annuaire['nom']?></td>
           <td><?php echo $annuaire['prenom']?></td>
           <td><?php echo $annuaire['telephone']?></td>
           <td><?php echo $annuaire['profession']?></td>
           <td><?php echo $annuaire['ville']?></td>
           <td><?php echo $annuaire['codepostal']?></td>
           <td><?php echo $annuaire['adresse']?></td>
           <td><?php echo $annuaire['date_de_naissance']?></td>
           <td><?php echo $annuaire['sexe']?></td>
           <td><?php echo $annuaire['description']?></td>
       </tr>
<?php
    }
?>
   </tbody>

</table>

<br>
<br>
<br>

    <form action="" method="POST">
        <label for="">Rentrer le nom de la colonne que vous souhaitez modifier/Supprimer</label><br>
        <input type="text" name="quoi" id="quoi">

        <input type="submit" value="Envoyer">

    </form>

<br>
<br>
<br>

<?php 

    if (!empty($_POST['quoi'])) {
        $modifcolomn = $_POST['quoi'];
    }

?>

    <form action="" method="POST">
        <label for="">Entrer  votre nouvelle valeur</label><br>
        <textarea name="new" id="new" rows="6" cols="33"></textarea>

        <input type="submit" value="Envoyer">

    </form>

<?php

    // ****************************************
    //Modification
    //*************************************** */
    //$result = $connection->query("UPDATE actualites SET titre = 'Mon titre modifié' WHERE id_actualites = 5");
    //var_dump($result);

    // ****************************************

?>











<?php require_once("includes/footer.inc.php"); ?>