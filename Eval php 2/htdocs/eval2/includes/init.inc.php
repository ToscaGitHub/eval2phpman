<?php

    //create connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eval2";
    $option = array();

    $connection = new mysqli($host, $username, $password, $dbname)

    //check connection








    // RAPPEL POUR MOI, NE T'EN OCCUPES PAS



    // ****************************************
    //Insertion
    //*************************************** */
    //$result = $connection->query("INSERT INTO actualites (titre, texte, image) VALUES ('Titre test', 'Texte test', 'Image test') ");
    //var_dump($result);

    // ****************************************
    
    
 
    // ****************************************
    //Modification
    //*************************************** */
    //$result = $connection->query("UPDATE actualites SET titre = 'Mon titre modifié' WHERE id_actualites = 5");
    //var_dump($result);

    // ****************************************



    // ****************************************
    //Suppression
    //*************************************** */
    //$result = $connection->query("DELETE FROM actualites WHERE id_actualites = 4");
    //var_dump($result);

    // ****************************************



    // ****************************************
    //Affichage
    //*************************************** */
    //$result = $connection->query("SELECT * FROM actualites WHERE id_actualites = 1");
    //$actualite = $result->fetch_assoc();
    //echo $actualite['titre'];

    // ****************************************

?>