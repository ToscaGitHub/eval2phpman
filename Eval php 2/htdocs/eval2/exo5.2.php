<?php require_once("includes/header.inc.php"); ?>


<h1 style="color: red;">EXERCICE 5.2 SANS LE 5.3</h1><br>
<br>

<?php if(!empty($_POST)) { ?>

    <p>Représentation des données saisies</p><br>
    <p><?php echo 'Nom: ' . $_POST['nom'] ?></p><br>
    <p><?php echo 'Prénom: ' . $_POST['prenom'] ?></p><br>
    <p><?php echo 'Téléphone: ' . $_POST['tel'] ?></p><br>
    <p><?php echo 'Profession: ' . $_POST['prof'] ?></p><br>
    <p><?php echo 'Ville: ' . $_POST['ville'] ?></p><br>
    <p><?php echo 'Code Postal: ' . $_POST['cp'] ?></p><br><br>
    <p><?php echo 'Adresse: ' . $_POST['adresse'] ?></p><br>
    <p><?php echo 'Date de Naissance: ' . $_POST['born'] ?></p><br>
    <p><?php echo 'Sexe: ' . $_POST['sex'] ?></p><br>
    <p><?php echo 'Description: ' . $_POST['desc'] ?></p><br>

<?php } ?>



<div class="infos">

    <h1>Informations</h1>

    <form action="" method="POST">
        <div>
            <label for="nom">Nom * </label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom * </label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <div>
            <label for="tel">Téléphone * </label>
            <input type="text" name="tel" id="tel" maxlength="10" required >
        </div>
        <div>
            <label for="prof">Profession * </label>
            <input type="text" name="prof" id="prof" required>
        </div>
        <div>
            <label for="ville">Ville * </label>
            <input type="text" name="ville" id="ville" required>
        </div>
        <div>
            <label for="cp">Code Postal * </label>
            <input type="text" name="cp" id="cp" required>
        </div>
        <div>
            <label for="adresse">Adresse * </label>
            <textarea name="adresse" id="adresse" rows="5" cols="33"></textarea>
        </div> 
        <div>
            <label for="born">Date de Naissance *</label>
            <input type="date" name="born" id="born" required>
        </div>
        <div>
            <p>
            Homme <input type="radio" name="sex" value="h" checked>
            </p>
            <p>
            Femme <input type="radio" name="sex" value="f" checked>
            </p>
            <p>
            Autre <input type="radio" name="sex" value="a" checked>
            </p>
        </div>
        <div>     
            <label for="desc">Description *</label>
            <textarea name="desc" id="desc"  rows="5" cols="33"></textarea>
        </div>
        <div>
            <input type="submit" value="enregistrement">
        </div>
</form>


</div>


















<?php require_once("includes/footer.inc.php"); ?>