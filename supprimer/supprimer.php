<?php
    $conn  = new PDO('mysql:host=localhost; dbname=Location_Imobilier','Mama','Mama@123@');
    $requete = "SELECT * FROM client";
    $resultat = $conn->query($requete);
    $data = $resultat ->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $_GET['id_client'];
    $x = $conn->prepare('DELETE FROM client where id_client=?');
    $delete = $x->execute([$id]);
    header('location: listerC.php');
    
?>
