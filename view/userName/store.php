<?php

    require_once("../../controller/userNameController.php");
    $obj = new UserNameController();
    $obj->save($_POST['name']);


    /* echo $_POST['name']; */
?>