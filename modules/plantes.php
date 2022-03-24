<?php

if(isset($_GET["mod"])) {


switch ($_GET["mod"]) {
    
    case 'ajouter':
            include("./pages/editer.php");
        break;

        case 'modifier':
            include("./pages/editer.php");
        break;
    
    default:
             include("./pages/lister.php");
        break;
} //end Switch




} else {

  include("./pages/lister.php");

}//end if mod

?>