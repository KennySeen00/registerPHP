<?php
include("con_db.php");

if(isset($_POST['register'])){ //ISSTE si se presionó ocurrirá lo de dentro
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){ //STRLEN si estos campos están vacíos
         $name = trim($_POST['name']); //TRIM se remueve el espacio del principio y del final
         $email = trim($_POST['email']);
         $fechareg = date("d/m/y"); //guardar fechas
         $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
         $resultado= mysqli_query($conex,$consulta);//se entrega la variable de conexion y la consulta
         if($resultado){
            ?>
               <h3>Dato insertado</h3>
           <?php
        }else{
            ?>
               <h3>Dato no insertado</h3>
           <?php
        }
    }  else{
        ?>
           <h3>rellene los datos</h3>
       <?php
    }
}
?>