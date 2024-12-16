<?php 
    if (isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Mail'])) {
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $mail = $_POST['Mail'];
        $sujet = $_POST['Sujet'];
        $commentaire = $_POST['Commentaire'];
        $commentaire = str_replace("'","\'", $commentaire);        
        try {
            // CONNEXION A LA BASE DE DONNEES
            $dbh = new PDO('mysql:host=localhost;dbname=noel','root','');
            $req = "INSERT INTO contact(Nom, Prenom, Mail, Sujet, Commentaire) VALUES('$nom', '$prenom', '$mail', '$sujet', '$commentaire')";
            $result = $dbh->exec($req);
            if ($result){
                echo '<div class="alert alert-success" role="alert">
                <h3>Message envoyé</h3>
            </div>';
            }
            if (!$result){
               echo '<div class="alert alert-danger" role="alert">
                <h3>Message non envoyé</h3>
            </div>';
            }
        } catch (PDOException $e) {
            echo '<div class="alert alert-danger" role="alert">
                <h3>Message non envoyé</h3>
            </div>';
            die();
        } 
    }
        ?>   