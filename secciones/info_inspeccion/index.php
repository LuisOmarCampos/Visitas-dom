<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("DELETE FROM info_inspeccion WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $mensaje="Registro eliminado";
    header("Location:index.php?mensaje=".$mensaje);

}

$sentencia=$conexion->prepare("SELECT * FROM `info_inspeccion` ");
$sentencia->execute();
$lista_supervisor=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include ("../../templates/header.php");?>
<br/>

<h3>Registro de inspecciones</h3>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Llenar registro</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table" id="tabla_id">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la inspeccion</th>
                <th scope="col">Modalidad</th>
                <th scope="col">Homoclave</th>
                <th scope="col">Autoridad publica que aplica inspeccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($lista_supervisor as $registro){?>
            <tr class="">
                <td scope="row"><?php echo $registro['id']?></td>
                <td><?php echo $registro['nombre_ins']?></td>
                <td><?php echo $registro['modalidad']?></td>
                <td><?php echo $registro['homoclave']?></td>
                <td><?php echo $registro['autoridad']?></td>
                <td><a name="" class="btn btn-info" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button">Editar</a>
                |
                <a name="" class="btn btn-danger" href="javascript:borrar(<?php echo $registro['id']; ?>);" role="button">Eliminar</a>
                |
                <a class="btn btn-secondary" href="ficha_ins.php?txtID=<?php echo $registro['id']; ?>" role="button">Ver ficha completa</a>
            </td>
            </tr>
            <?php }?>

        </tbody>
    </table>
</div>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include ("../../templates/footer.php");?>
