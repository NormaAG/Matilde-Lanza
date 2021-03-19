<?php 
	session_start();
    if($_SESSION['rol'] != 3)
	{
		header("location: ./");
	}
    include "../conexion.php";	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>UEML | Lista Inscripcion</title>
    <link rel="icon" type="image/ico" href="img/school.png"/>
<style>
    #form {
     border:3px solid ##CD5C5C;
    width:450px;
    margin:auto;
    padding:10px;
    background:#e5e7e9 ;
}
}
#form legend{
    font-weight:bold;
    font-size:12px;
}
label{
    color:blue;
    font-size:18px;
}

</style>
</head>
<body>
	<?php include "includes/header.php"; ?>

	<form name = "frm" action="lista_seccion_notas.php" method="post" >
		<center>	<fieldset id="form">			
            <legend> Subir Noltas por Curso y Sección</legend> 
                                <div class="">
                                   
                                        <div class="wd40">
                                            <label for="grado">Seleccionar Sección</label>
                                            <select name="grado" id="grado">
                                            <?php 
                                                $sql=$conection->query(" SELECT  *  FROM curso ");
                                                while($fila=$sql->fetch_array()){
                                                    echo "<option value='".$fila['idcurso']."'> ".$fila['grado']." ".$fila['seccion']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        
                                         <div class="wd40">
                                            <label for="gestion">Seleccione Gestión</label>
                                            <select name="gestion" id="gestion">
                                            <?php 
                                                $sql=$conection->query(" SELECT * FROM gestion ");
                                                while($fila=$sql->fetch_array()){
                                                echo "<option value='".$fila['gestion']."'> ".$fila['gestion']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
						<br>
						<button tye="submit" class="btn_view">  <i class="icon-search"></i>Buscar</button>
                        </div>
                        </fieldset>  </center> 
					</form>
	<?php include "includes/footer.php"; ?>
</body>
</html>