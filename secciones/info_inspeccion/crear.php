<?php
include("../../bd.php");

if($_POST){

  //RECOLECCION DE DATOS METODO $_POST PARA LOS CAMPOS (DATOS DE IDENTIFICACION DE LA INSPECCION)
  $renavid_dirigido_a=(isset($_POST["renavid_dirigido_a"])?$_POST["renavid_dirigido_a"]:"");
  $derechos=(isset($_POST["derechos"])?$_POST["derechos"]:"");
  $renavid_obligacionesCumplir=(isset($_POST["renavid_obligacionesCumplir"])?$_POST["renavid_obligacionesCumplir"]:"");
  $Renavid_requisitos=(isset($_POST["Renavid_requisitos"])?$_POST["Renavid_requisitos"]:"");
  $es_tramite_inspeccion=(isset($_POST["es_tramite_inspeccion"])?$_POST["es_tramite_inspeccion"]:"");
  $Renavid_requisitos_2=(isset($_POST["Renavid_requisitos_2"])?$_POST["Renavid_requisitos_2"]:"");
  $es_tramite_inspeccion_2=(isset($_POST["es_tramite_inspeccion_2"])?$_POST["es_tramite_inspeccion_2"]:"");
  $Renavid_requisitos_3=(isset($_POST["Renavid_requisitos_3"])?$_POST["Renavid_requisitos_3"]:"");
  $es_tramite_inspeccion_3=(isset($_POST["es_tramite_inspeccion_3"])?$_POST["es_tramite_inspeccion_3"]:"");
  $Renavid_requisitos_4=(isset($_POST["Renavid_requisitos_4"])?$_POST["Renavid_requisitos_4"]:"");
  $es_tramite_inspeccion_4=(isset($_POST["es_tramite_inspeccion_4"])?$_POST["es_tramite_inspeccion_4"]:"");
  $Renavid_requisitos_5=(isset($_POST["Renavid_requisitos_5"])?$_POST["Renavid_requisitos_5"]:"");
  $es_tramite_inspeccion_5=(isset($_POST["es_tramite_inspeccion_5"])?$_POST["es_tramite_inspeccion_5"]:"");
  $Renavid_requisitos_6=(isset($_POST["Renavid_requisitos_6"])?$_POST["Renavid_requisitos_6"]:"");
  $es_tramite_inspeccion_6=(isset($_POST["es_tramite_inspeccion_6"])?$_POST["es_tramite_inspeccion_6"]:"");
  $Renavid_requisitos_7=(isset($_POST["Renavid_requisitos_7"])?$_POST["Renavid_requisitos_7"]:"");
  $es_tramite_inspeccion_7=(isset($_POST["es_tramite_inspeccion_7"])?$_POST["es_tramite_inspeccion_7"]:"");
  $Renavid_requisitos_8=(isset($_POST["Renavid_requisitos_8"])?$_POST["Renavid_requisitos_8"]:"");
  $es_tramite_inspeccion_8=(isset($_POST["es_tramite_inspeccion_8"])?$_POST["es_tramite_inspeccion_8"]:"");
  $Renavid_requisitos_9=(isset($_POST["Renavid_requisitos_9"])?$_POST["Renavid_requisitos_9"]:"");
  $es_tramite_inspeccion_9=(isset($_POST["es_tramite_inspeccion_9"])?$_POST["es_tramite_inspeccion_9"]:"");
  $Renavid_requisitos_10=(isset($_POST["Renavid_requisitos_10"])?$_POST["Renavid_requisitos_10"]:"");
  $es_tramite_inspeccion_10=(isset($_POST["es_tramite_inspeccion_10"])?$_POST["es_tramite_inspeccion_10"]:"");
  $formato_us=(isset($_POST["formato_us"])?$_POST["formato_us"]:"");
  $costo=(isset($_POST["costo"])?$_POST["costo"]:"");
  $tra_montos=(isset($_POST["tra_montos"])?$_POST["tra_montos"]:"");
  $HorarioAtencion=(isset($_POST["HorarioAtencion"])?$_POST["HorarioAtencion"]:"");
  $tiempo=(isset($_POST["tiempo"])?$_POST["tiempo"]:"");
  $renavid_pasosRealizar=(isset($_POST["renavid_pasosRealizar"])?$_POST["renavid_pasosRealizar"]:"");
  $Renavid_Sanciones=(isset($_POST["Renavid_Sanciones"])?$_POST["Renavid_Sanciones"]:"");

  //RECOLECCION DE DATOS METODO $_POST PARA LOS CAMPOS (INFORMACION SOBRE LA INSPECCION)
  $nombre_ins=(isset($_POST["nombre_ins"])?$_POST["nombre_ins"]:"");
  $modalidad=(isset($_POST["modalidad"])?$_POST["modalidad"]:"");
  $homoclave=(isset($_POST["homoclave"])?$_POST["homoclave"]:"");
  $autoridad=(isset($_POST["autoridad"])?$_POST["autoridad"]:"");
  $Renar_sujetoAplicaRegulacion_unidad=(isset($_POST["Renar_sujetoAplicaRegulacion_unidad"])?$_POST["Renar_sujetoAplicaRegulacion_unidad"]:"");
  $Renar_sujetoAplicaRegulacion_telefono=(isset($_POST["Renar_sujetoAplicaRegulacion_telefono"])?$_POST["Renar_sujetoAplicaRegulacion_telefono"]:"");
  $Renar_sujetoAplicaRegulacion_direccion=(isset($_POST["Renar_sujetoAplicaRegulacion_direccion"])?$_POST["Renar_sujetoAplicaRegulacion_direccion"]:"");
  $Renar_sujetoAplicaRegulacion_correo=(isset($_POST["Renar_sujetoAplicaRegulacion_correo"])?$_POST["Renar_sujetoAplicaRegulacion_correo"]:"");
  $Renavid_tipoInspeccion=(isset($_POST["Renavid_tipoInspeccion"])?$_POST["Renavid_tipoInspeccion"]:"");
  $objetivo=(isset($_POST["objetivo"])?$_POST["objetivo"]:"");
  $Renavid_FundamentosJuridicos=(isset($_POST["Renavid_FundamentosJuridicos"])?$_POST["Renavid_FundamentosJuridicos"]:"");
  $Renavid_FundamentosJuridicos_2=(isset($_POST["Renavid_FundamentosJuridicos_2"])?$_POST["Renavid_FundamentosJuridicos_2"]:"");
  $Renavid_FundamentosJuridicos_3=(isset($_POST["Renavid_FundamentosJuridicos_3"])?$_POST["Renavid_FundamentosJuridicos_3"]:"");
  $Renavid_FundamentosJuridicos_4=(isset($_POST["Renavid_FundamentosJuridicos_4"])?$_POST["Renavid_FundamentosJuridicos_4"]:"");
  $Renavid_FundamentosJuridicos_5=(isset($_POST["Renavid_FundamentosJuridicos_5"])?$_POST["Renavid_FundamentosJuridicos_5"]:"");
  $Renavid_FundamentosJuridicos_6=(isset($_POST["Renavid_FundamentosJuridicos_6"])?$_POST["Renavid_FundamentosJuridicos_6"]:"");
  $renavid_motivacion=(isset($_POST["renavid_motivacion"])?$_POST["renavid_motivacion"]:"");
  $periodicidad=(isset($_POST["periodicidad"])?$_POST["periodicidad"]:"");
  $RenarRegulacionAsociada=(isset($_POST["RenarRegulacionAsociada"])?$_POST["RenarRegulacionAsociada"]:"");

  //RECOLECCION DE DATOS METODO $_POST PARA LOS CAMPOS (INFORMACION DE LA AUTORIDAD PUBLICA)
  $Renavid_Facultades=(isset($_POST["Renavid_Facultades"])?$_POST["Renavid_Facultades"]:"");
  $Renavid_SujetoObligado_Inspeccion=(isset($_POST["Renavid_SujetoObligado_Inspeccion"])?$_POST["Renavid_SujetoObligado_Inspeccion"]:"");
  $Tra_unidadesAtienden=(isset($_POST["Tra_unidadesAtienden"])?$_POST["Tra_unidadesAtienden"]:"");
  $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");
  $direccion=(isset($_POST["direccion"])?$_POST["direccion"]:"");
  $correo=(isset($_POST["correo"])?$_POST["correo"]:"");


  //Preparar la insesrcion de los datos
  $sentencia=$conexion->prepare("INSERT INTO info_inspeccion
  (id,renavid_dirigido_a,derechos,renavid_obligacionesCumplir,Renavid_requisitos,es_tramite_inspeccion,Renavid_requisitos_2,es_tramite_inspeccion_2,Renavid_requisitos_3,es_tramite_inspeccion_3,Renavid_requisitos_4,es_tramite_inspeccion_4,Renavid_requisitos_5,es_tramite_inspeccion_5,Renavid_requisitos_6,es_tramite_inspeccion_6,Renavid_requisitos_7,es_tramite_inspeccion_7,Renavid_requisitos_8,es_tramite_inspeccion_8,Renavid_requisitos_9,es_tramite_inspeccion_9,Renavid_requisitos_10,es_tramite_inspeccion_10,formato_us,costo,tra_montos,HorarioAtencion,tiempo,renavid_pasosRealizar,Renavid_Sanciones,
  nombre_ins,modalidad,homoclave,autoridad,Renar_sujetoAplicaRegulacion_unidad,Renar_sujetoAplicaRegulacion_telefono,Renar_sujetoAplicaRegulacion_direccion,Renar_sujetoAplicaRegulacion_correo,Renavid_tipoInspeccion,objetivo,Renavid_FundamentosJuridicos,Renavid_FundamentosJuridicos_2,Renavid_FundamentosJuridicos_3,Renavid_FundamentosJuridicos_4,Renavid_FundamentosJuridicos_5,Renavid_FundamentosJuridicos_6,renavid_motivacion,periodicidad,RenarRegulacionAsociada,
  Renavid_Facultades,Renavid_SujetoObligado_Inspeccion,Tra_unidadesAtienden,telefono,direccion,correo) 
  VALUES (null,:renavid_dirigido_a,:derechos,:renavid_obligacionesCumplir,:Renavid_requisitos,:es_tramite_inspeccion,:Renavid_requisitos_2,:es_tramite_inspeccion_2,:Renavid_requisitos_3,:es_tramite_inspeccion_3,:Renavid_requisitos_4,:es_tramite_inspeccion_4,:Renavid_requisitos_5,:es_tramite_inspeccion_5,:Renavid_requisitos_6,:es_tramite_inspeccion_6,:Renavid_requisitos_7,:es_tramite_inspeccion_7,:Renavid_requisitos_8,:es_tramite_inspeccion_8,:Renavid_requisitos_9,:es_tramite_inspeccion_9,:Renavid_requisitos_10,:es_tramite_inspeccion_10,:formato_us,:costo,:tra_montos,:HorarioAtencion,:tiempo,:renavid_pasosRealizar,:Renavid_Sanciones,
  :nombre_ins,:modalidad,:homoclave,:autoridad,:Renar_sujetoAplicaRegulacion_unidad,:Renar_sujetoAplicaRegulacion_telefono,:Renar_sujetoAplicaRegulacion_direccion,:Renar_sujetoAplicaRegulacion_correo,:Renavid_tipoInspeccion,:objetivo,:Renavid_FundamentosJuridicos,:Renavid_FundamentosJuridicos_2,:Renavid_FundamentosJuridicos_3,:Renavid_FundamentosJuridicos_4,:Renavid_FundamentosJuridicos_5,:Renavid_FundamentosJuridicos_6,:renavid_motivacion,:periodicidad,:RenarRegulacionAsociada,
  :Renavid_Facultades,:Renavid_SujetoObligado_Inspeccion,:Tra_unidadesAtienden,:telefono,:direccion,:correo)");
  //Asisgnando los valores que obtienen del metodo POST
  $sentencia->bindParam(":renavid_dirigido_a",$renavid_dirigido_a);
  $sentencia->bindParam(":derechos",$derechos);
  $sentencia->bindParam(":renavid_obligacionesCumplir",$renavid_obligacionesCumplir);
  $sentencia->bindParam(":Renavid_requisitos",$Renavid_requisitos);
  $sentencia->bindParam(":es_tramite_inspeccion",$es_tramite_inspeccion);
  $sentencia->bindParam(":Renavid_requisitos_2",$Renavid_requisitos_2);
  $sentencia->bindParam(":es_tramite_inspeccion_2",$es_tramite_inspeccion_2);
  $sentencia->bindParam(":Renavid_requisitos_3",$Renavid_requisitos_3);
  $sentencia->bindParam(":es_tramite_inspeccion_3",$es_tramite_inspeccion_3);
  $sentencia->bindParam(":Renavid_requisitos_4",$Renavid_requisitos_4);
  $sentencia->bindParam(":es_tramite_inspeccion_4",$es_tramite_inspeccion_4);
  $sentencia->bindParam(":Renavid_requisitos_5",$Renavid_requisitos_5);
  $sentencia->bindParam(":es_tramite_inspeccion_5",$es_tramite_inspeccion_5);
  $sentencia->bindParam(":Renavid_requisitos_6",$Renavid_requisitos_6);
  $sentencia->bindParam(":es_tramite_inspeccion_6",$es_tramite_inspeccion_6);
  $sentencia->bindParam(":Renavid_requisitos_7",$Renavid_requisitos_7);
  $sentencia->bindParam(":es_tramite_inspeccion_7",$es_tramite_inspeccion_7);
  $sentencia->bindParam(":Renavid_requisitos_8",$Renavid_requisitos_8);
  $sentencia->bindParam(":es_tramite_inspeccion_8",$es_tramite_inspeccion_8);
  $sentencia->bindParam(":Renavid_requisitos_9",$Renavid_requisitos_9);
  $sentencia->bindParam(":es_tramite_inspeccion_9",$es_tramite_inspeccion_9);
  $sentencia->bindParam(":Renavid_requisitos_10",$Renavid_requisitos_10);
  $sentencia->bindParam(":es_tramite_inspeccion_10",$es_tramite_inspeccion_10);
  $sentencia->bindParam(":formato_us",$formato_us);
  $sentencia->bindParam(":costo",$costo);
  $sentencia->bindParam(":tra_montos",$tra_montos);
  $sentencia->bindParam(":HorarioAtencion",$HorarioAtencion);
  $sentencia->bindParam(":tiempo",$tiempo);
  $sentencia->bindParam(":renavid_pasosRealizar",$renavid_pasosRealizar);
  $sentencia->bindParam(":Renavid_Sanciones",$Renavid_Sanciones);

  //Asisgnando los valores que obtienen del metodo POST PARA LOS CAMPOS (INFORMACION SOBRE LA INSPECCION)
  $sentencia->bindParam(":nombre_ins",$nombre_ins);
  $sentencia->bindParam(":modalidad",$modalidad);
  $sentencia->bindParam(":homoclave",$homoclave);
  $sentencia->bindParam(":autoridad",$autoridad);
  $sentencia->bindParam(":Renar_sujetoAplicaRegulacion_unidad",$Renar_sujetoAplicaRegulacion_unidad);
  $sentencia->bindParam(":Renar_sujetoAplicaRegulacion_telefono",$Renar_sujetoAplicaRegulacion_telefono);
  $sentencia->bindParam(":Renar_sujetoAplicaRegulacion_direccion",$Renar_sujetoAplicaRegulacion_direccion);
  $sentencia->bindParam(":Renar_sujetoAplicaRegulacion_correo",$Renar_sujetoAplicaRegulacion_correo);
  $sentencia->bindParam(":Renavid_tipoInspeccion",$Renavid_tipoInspeccion);
  $sentencia->bindParam(":objetivo",$objetivo);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos",$Renavid_FundamentosJuridicos);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos_2",$Renavid_FundamentosJuridicos_2);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos_3",$Renavid_FundamentosJuridicos_3);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos_4",$Renavid_FundamentosJuridicos_4);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos_5",$Renavid_FundamentosJuridicos_5);
  $sentencia->bindParam(":Renavid_FundamentosJuridicos_6",$Renavid_FundamentosJuridicos_6);
  $sentencia->bindParam(":renavid_motivacion",$renavid_motivacion);
  $sentencia->bindParam(":periodicidad",$periodicidad);
  $sentencia->bindParam(":RenarRegulacionAsociada",$RenarRegulacionAsociada);
 
  //Asisgnando los valores que obtienen del metodo POST PARA LOS CAMPOS (INFORMACION DE LA AUTORIDAD PUBLICA)
  $sentencia->bindParam(":Renavid_Facultades",$Renavid_Facultades);
  $sentencia->bindParam(":Renavid_SujetoObligado_Inspeccion",$Renavid_SujetoObligado_Inspeccion);
  $sentencia->bindParam(":Tra_unidadesAtienden",$Tra_unidadesAtienden);
  $sentencia->bindParam(":telefono",$telefono);
  $sentencia->bindParam(":direccion",$direccion);
  $sentencia->bindParam(":correo",$correo);
  $sentencia->execute();
  $mensaje="Registro agregado correctamente";
  header("Location:index.php?mensaje=".$mensaje);

}

?>

<?php include ("../../templates/header.php");?>
<br/>

<div class="card">
    <div class="card-header">
        <h4 style="text-align:center; background-color:  #e3efdd">Informacion sobre la Inspección</h4>
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="renavid_dirigido_a" class="form-label">Bien, elemento, objeto o sujeto de inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="renavid_dirigido_a" id="renavid_dirigido_a" aria-describedby="helpId" placeholder="Bien, elemento, objeto o sujeto de inspección, verificación o visita domiciliaria">
    </div>

    <div class="mb-3">
      <label for="derechos" class="form-label">Derechos del sujeto regulado</label>
      <input type="text" required
        class="form-control" name="derechos" id="derechos" aria-describedby="helpId" placeholder="Derechos del sujeto regulado">
    </div>

    <div class="mb-3">
      <label for="renavid_obligacionesCumplir" class="form-label">Obligaciones que debe cumplir el sujeto regulado</label>
      <input type="text" required
        class="form-control" name="renavid_obligacionesCumplir" id="renavid_obligacionesCumplir" aria-describedby="helpId" placeholder="Obligaciones que debe cumplir el sujeto regulado">
    </div>

    <div><label for="id_supervisor" class="form-label">Requisitos o documentos necesarios</label> </div>

            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">1.-</span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos" id="Renavid_requisitos" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion" id="es_tramite_inspeccion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">2.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_2" id="Renavid_requisitos_2" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_2" id="es_tramite_inspeccion_2" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">3.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_3" id="Renavid_requisitos_3" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_3" id="es_tramite_inspeccion_3" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">4.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_4" id="Renavid_requisitos_4" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_4" id="es_tramite_inspeccion_4" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">5.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_5" id="Renavid_requisitos_5" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_5" id="es_tramite_inspeccion_5" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">6.-</span>
            <input type="text" style="width : 400px; heigth : 400px" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_6" id="Renavid_requisitos_6" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_6" id="es_tramite_inspeccion_6" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">7.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_7" id="Renavid_requisitos_7" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_7" id="es_tramite_inspeccion_7" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">8.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_8" id="Renavid_requisitos_8" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_8" id="es_tramite_inspeccion_8" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">9.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_9" id="Renavid_requisitos_9" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_9" id="es_tramite_inspeccion_9" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">10.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_requisitos_10" id="Renavid_requisitos_10" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">El requisito es: "tramite" / "inspeccion" / "tramite e inspeccion" </span>
            <input type="text" d class="form-control" 
            aria-label="Sizing example input" name="es_tramite_inspeccion_10" id="es_tramite_inspeccion_10" aria-describedby="inputGroup-sizing-default">
            </div>

    <div class="mb-3">
      <label for="formato_us" class="form-label">¿Se solicita llenar un formato por parte del usuario para la inspección, verificación o
                                                visita domiciliaria? (Adjuntar)</label>
      <input type="text" required
        class="form-control" name="formato_us" id="formato_us" aria-describedby="helpId" placeholder="Si / No">
    </div>

    <div class="mb-3">
      <label for="costo" class="form-label">¿Tiene al algún costo o pago de derechos?</label>
      <input type="text" required
        class="form-control" name="costo" id="costo" aria-describedby="helpId" placeholder="Si / No">
    </div>

    <div class="mb-3">
      <label for="tra_montos" class="form-label">Indicar monto $ (si su respuesta anterior fue "No" puede dejar este campo vacio)</label>
      <input type="text"
        class="form-control" name="tra_montos" id="tra_montos" aria-describedby="helpId" placeholder="Indicar monto (solo numeros)">
    </div>

    <div class="mb-3">
      <label for="HorarioAtencion" class="form-label">Horario de atención y servicio</label>
      <input type="text" required
        class="form-control" name="HorarioAtencion" id="HorarioAtencion" aria-describedby="helpId" placeholder="Horario de atención y servicio">
    </div>

    <div class="mb-3">
      <label for="tiempo" class="form-label">Tiempo aproximado de duración de la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Tiempo aproximado de duración de la inspección, verificación o visita domiciliaria">
    </div>

    <div class="mb-3">
      <label for="renavid_pasosRealizar" class="form-label">Pasos a realizar durante la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="renavid_pasosRealizar" id="renavid_pasosRealizar" aria-describedby="helpId" placeholder="Pasos a realizar durante la inspección, verificación o visita domiciliaria">
    </div>

    <div class="mb-3">
      <label for="Renavid_Sanciones" class="form-label">Sanciones que pudieran derivar de la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="Renavid_Sanciones" id="Renavid_Sanciones" aria-describedby="helpId" placeholder="Sanciones que pudieran derivar de la inspección, verificación o visita domiciliaria">
    </div>

    <br/>

<div class="card">
    <div class="card-header">
        <h4 style="text-align:center; background-color:  #e3efdd">Datos de Identificación de la Inspección</h4>
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombre_ins" class="form-label">Nombre de la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="nombre_ins" id="nombre_ins" aria-describedby="helpId" placeholder="Nombre de la inspección, verificación o visita domiciliaria">
    </div>

    <div class="mb-3">
      <label for="modalidad" class="form-label">Modalidad</label>
      <input type="text" required
        class="form-control" name="modalidad" id="modalidad" aria-describedby="helpId" placeholder="Modalidad">
    </div>

    <div class="mb-3">
      <label for="homoclave" class="form-label">Homoclave</label>
      <input type="text" required
        class="form-control" name="homoclave" id="homoclave" aria-describedby="helpId" placeholder="Homoclave">
    </div>

    <div class="mb-3">
      <label for="autoridad" class="form-label">Autoridad pública que aplica la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="autoridad" id="autoridad" aria-describedby="helpId" placeholder="Autoridad pública que aplica la inspección, verificación o visita domiciliaria">
    </div>

    <div><label for="id_supervisor" class="form-label">Contacto de la Autoridad pública para cerciorar la veracidad de la inspección, verificación o visita domiciliaria</label> </div>

            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Unidad administrativa</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="Renar_sujetoAplicaRegulacion_unidad" id="Renar_sujetoAplicaRegulacion_unidad" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="Renar_sujetoAplicaRegulacion_telefono" id="Renar_sujetoAplicaRegulacion_telefono" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Dirección</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="Renar_sujetoAplicaRegulacion_direccion" id="Renar_sujetoAplicaRegulacion_direccion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
            <input type="email" required class="form-control" 
            aria-label="Sizing example input" name="Renar_sujetoAplicaRegulacion_correo" id="Renar_sujetoAplicaRegulacion_correo" aria-describedby="inputGroup-sizing-default">
            </div>

    <div class="mb-3">
      <label for="objetivo" class="form-label">Tipo de inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="Renavid_tipoInspeccion" id="Renavid_tipoInspeccion" aria-describedby="helpId" placeholder="Tipo de inspección, verificación o visita domiciliaria">
    </div>

    <div class="mb-3">
      <label for="objetivo" class="form-label">¿Cuál es el objetivo de la inspección, verificación o visita domiciliaria? (Descripción ciudadana)</label>
      <input type="text" required
        class="form-control" name="objetivo" id="objetivo" aria-describedby="helpId" placeholder="¿Cuál es el objetivo de la inspección, verificación o visita domiciliaria?">
    </div>

    <div class="mb-3">
      <label for="renavid_motivacion" class="form-label">¿Qué motiva la inspección, verificación o visita domiciliaria? </label>
      <input type="text"
        class="form-control" name="renavid_motivacion" id="renavid_motivacion" aria-describedby="helpId" placeholder="¿Qué motiva la inspección, verificación o visita domiciliaria? ">
    </div>

    <div class="mb-3">
      <label for="periodicidad" class="form-label">¿En qué periodicidad?</label>
      <input type="text" required
        class="form-control" name="periodicidad" id="periodicidad" aria-describedby="helpId" placeholder="¿En qué periodicidad?">
    </div>

    <div class="mb-3">
      <label for="RenarRegulacionAsociada" class="form-label">¿Qué trámite o servicio?</label>
      <input type="text" required
        class="form-control" name="RenarRegulacionAsociada" id="RenarRegulacionAsociada" aria-describedby="helpId" placeholder="¿Qué trámite o servicio?">
    </div>

    <div><label for="id_supervisor" class="form-label">Fundamento jurídico</label> </div>

            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">1.-</span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos" id="Renavid_FundamentosJuridicos" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">2.-</span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos_2" id="Renavid_FundamentosJuridicos_2" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">3.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos_3" id="Renavid_FundamentosJuridicos_3" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">4.-</span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos_4" id="Renavid_FundamentosJuridicos_4" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">5.-</span>
            <input type="text" class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos_5" id="Renavid_FundamentosJuridicos_5" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">6.-</span>
            <input type="text"  class="form-control" 
            aria-label="Sizing example input" name="Renavid_FundamentosJuridicos_6" id="Renavid_FundamentosJuridicos_6" aria-describedby="inputGroup-sizing-default">
            </div>


    <br/>

<div class="card">
    <div class="card-header">
    <h4 style="text-align:center; background-color:  #e3efdd">Información de la Autoridad Pública</h4>
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="Renavid_Facultades" class="form-label">Facultades, atribuciones y obligaciones de la Autoridad Pública durante la inspección, verificación o visita domiciliaria</label>
      <input type="text" required
        class="form-control" name="Renavid_Facultades" id="Renavid_Facultades" aria-describedby="helpId" placeholder="Facultades, atribuciones y obligaciones de la Autoridad Pública durante la inspección">
    </div>

    <div class="mb-3">
      <label for="Renavid_SujetoObligado_Inspeccion" class="form-label">¿Se llena un formato por parte de la Autoridad Pública para la inspección, verificación o visita domiciliaria? (Adjuntar)</label>
      <input type="text" required
        class="form-control" name="Renavid_SujetoObligado_Inspeccion" id="Renavid_SujetoObligado_Inspeccion" aria-describedby="helpId" placeholder="¿Se llena un formato por parte de la Autoridad Pública para la inspección, verificación o visita domiciliaria?">
    </div>

    <div><label for="id_supervisor" class="form-label">Quejas y denuncias</label> </div>

            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Unidad administrativa</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="Tra_unidadesAtienden" id="Tra_unidadesAtienden" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="telefono" id="telefono" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Dirección</span>
            <input type="text" required class="form-control" 
            aria-label="Sizing example input" name="direccion" id="direccion" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3"> 
            <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
            <input type="email" required class="form-control" 
            aria-label="Sizing example input" name="correo" id="correo" aria-describedby="inputGroup-sizing-default">
            </div>


    <button type="submit" class="btn btn-success">Aceptar y generar ficha</button>
    <a name="" id="" class="btn btn-danger" href="/visitas/secciones/sujeto_ob/index_sujetoObligado.php" role="button">Cancelar</a>

    
    </form>
    </div>

    <div class="card-footer text-muted">
    </div>
</div>

<?php include ("../../templates/footer.php");?>