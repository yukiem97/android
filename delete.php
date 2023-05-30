<?php 
    if($_SERVER['REQUEST_METHOD']== 'POST'){

        require_once("db.php");
        $id = $_POST['id'];

        $query = "DELETE FROM user WHERE id ='$id'";
        $result = $mysql->query($query);
        
        if($mysql->affected_rows>0){
            if($result === TRUE){
                echo "el usuario a sido eliminado satisfactoriamente";
            }
        }else{
            echo "No se encontraron resultados";
        }
        $mysql->close();
    }
?>