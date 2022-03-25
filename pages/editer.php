<?php 

     $nom=`nc`;
     $description=`nc`;
     $title="Ajouter";
     $lienCrud="crud.php?action=ajouter";

        if (isset($_GET['mod']) && isset($_GET['id'])) {

            $title="Modifier";

            $lienCrud = "crud.php?action=modifier&id=".$_GET['id'];

            $rqPlante =$mysqli->query("SELECT * FROM `plantes` WHERE id = '".$_GET ['id']."'") ;
 
            //var_dump($rqPlante);

        if ($rqPlante->num_rows> 0){

            $row= $rqPlante->fetch_assoc();
            
            $nom =$row ['nom'] ;

            $description =$row['description'] ;


        }
    } 
?>

    <div class="text"><?php echo $title;?></div>


    <form action="<?php echo $lienCrud;?>" method="post">

    <label for="">Nom de la plante</label>

    <input type="text" name="nom" value="<?php echo $nom;?>"id="">


    <label for="">Description de la plante</label>

    <input type="text" name="description" value="<?php echo $description ;?>" id="">


    <label for="">Prix de la plante</label>
    <input type="text" name="prix" id="">


    <input type="submit" value="Ajouter">


</form>

