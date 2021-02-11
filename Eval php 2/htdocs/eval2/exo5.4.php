<?php require_once("includes/header.inc.php"); ?>



<h1 style="color: red;">EXERCICE 5.4 SANS LE 5.5</h1><br>
<br>

<?php 
    $result = $connection->query("SELECT * FROM annuaire");



?>

<table>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>ID Annuaire</th>
           <th>Nom</th>
           <th>Prénom</th>
           <th>Téléphone</th>
           <th>Profession</th>
           <th>Ville</th>
           <th>Code Postal</th>
           <th>Adresse</th>
           <th>Date de Naissance</th>
           <th>Sexe</th>
           <th>Description</th>
       </tr>
   </thead>

   <tbody> <!-- Corps du tableau -->

   <?php 
    while ($annuaire = $result->fetch_assoc()) {
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













<?php require_once("includes/footer.inc.php"); ?> 