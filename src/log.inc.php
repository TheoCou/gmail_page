<?php
        //test form
        if (isset($_POST["login"]) && isset($_POST["password"])) {
             // connect to MySQL
             try{
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=gmail', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));
            $reponse = $bdd->query('SELECT login, password FROM  inscription Where login = "'.$_POST["login"].'"');
            $data = $reponse->fetch();
            $reponse->closeCursor();
             }catch (Exception $e) {
                 die('Erreur : '.$e->getMessage());
             }
            
            $login = $_POST["login"];
            $mdp = $_POST["password"];

            if (!$login || !$mdp) {
                echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
            }
            //compare login and password to the database
            elseif($data){
                if (password_verify($mdp, $data["password"])){
                    print "<p class=\"success\">Votre login est " . $login . "
                                votre mot de passe est  " . md5($mdp);
                    header("Location: connection.php");
                    exit;
                }
            }else {
                echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
            }
            /*elseif ($login != $data["login"] && $mdp != $data["password"]) {
                echo"<p class=\"warning\">Erreur login ou mot de passe?</p>";
            } else {
                //valid connection
                $_SESSION['nom'] = $login;
                echo "<p class=\"success\">Votre login est " . $_SESSION['nom'] . "
                            votre mot de passe est  " . md5($mdp);
                header("Location: connection.php");
                exit;*/
            }
