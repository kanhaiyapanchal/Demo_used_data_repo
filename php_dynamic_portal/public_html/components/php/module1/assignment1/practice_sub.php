<?php
if($isset($_POST["hash"]) && strlen(trim($_POST["hash"])) > 0){
    echo "Hash found :: " . $_POST["hash"]; 
}else
    echo "No hash found";
?>