<?php
# CONNNECTION
    $db_handle=mysqli_connect("127.0.0.1","root", "", "dischoolvery");
    $db_found = mysqli_select_db($db_handle,"dischoolvery");
    # controle
    if (mysqli_connect_error())
    {
        echo "Echec de connexion à la base de donnée";
        echo "Error code : ". mysqli_connect_error();
    }

?>