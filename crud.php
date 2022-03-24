<?php

    include("../config.php") ;


    if(isset($_GET["action"])){

        switch ($_GET["action"]) {

            case "ajouter":
            

               $maRequete ="INSERT INTO `plantes` (`id`,`nom`,`description`,`prix`,`dateins`) VALUES (NULL, '".$_POST["nom"]."','".$_POST["description"]."', '".$_POST["prix"]."',CURRENT_TIMESTAMP)";

               
                   //echo "i égal 0";
                break;
            
            case "supprimer":
            

                $maRequete = "DELETE FROM `plantes` WHERE `plantes`.`id` =".$_GET["id"];
                break;

        }

     $mysqli->query($maRequete) ; 


    }
        // redirection par defaut
    header("location: ".$dir_ws."admin/") ;
    







?>