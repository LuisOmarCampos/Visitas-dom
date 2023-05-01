<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("SELECT *,
    (SELECT count(YEAR(fecha)) FROM info_inspeccion WHERE YEAR(fecha)=2022) as n_inspecciones,
    (SELECT count(Renavid_Sanciones) FROM info_inspeccion) as n_sanciones
     FROM info_inspeccion WHERE id=:id");

    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    //RECOLECCION DE DATOS PARA LOS CAMPOS (DATOS DE IDENTIFICACION DE LA INSPECCION).
    $n_sanciones=$registro["n_sanciones"];
    $n_inspecciones=$registro["n_inspecciones"];
    $renavid_dirigido_a=$registro["renavid_dirigido_a"];
    $derechos=$registro["derechos"];
    $renavid_obligacionesCumplir=$registro["renavid_obligacionesCumplir"];
    $Renavid_requisitos=$registro["Renavid_requisitos"];
    $es_tramite_inspeccion=$registro["es_tramite_inspeccion"];
    $Renavid_requisitos_2=$registro["Renavid_requisitos_2"];
    $es_tramite_inspeccion_2=$registro["es_tramite_inspeccion_2"];
    $Renavid_requisitos_3=$registro["Renavid_requisitos_3"];
    $es_tramite_inspeccion_3=$registro["es_tramite_inspeccion_3"];
    $Renavid_requisitos_4=$registro["Renavid_requisitos_4"];
    $es_tramite_inspeccion_4=$registro["es_tramite_inspeccion_4"];
    $Renavid_requisitos_5=$registro["Renavid_requisitos_5"];
    $es_tramite_inspeccion_5=$registro["es_tramite_inspeccion_5"];
    $Renavid_requisitos_6=$registro["Renavid_requisitos_6"];
    $es_tramite_inspeccion_6=$registro["es_tramite_inspeccion_6"];
    $Renavid_requisitos_7=$registro["Renavid_requisitos_7"];
    $es_tramite_inspeccion_7=$registro["es_tramite_inspeccion_7"];
    $Renavid_requisitos_8=$registro["Renavid_requisitos_8"];
    $es_tramite_inspeccion_8=$registro["es_tramite_inspeccion_8"];
    $Renavid_requisitos_9=$registro["Renavid_requisitos_9"];
    $es_tramite_inspeccion_9=$registro["es_tramite_inspeccion_9"];
    $Renavid_requisitos_10=$registro["Renavid_requisitos_10"];
    $es_tramite_inspeccion_10=$registro["es_tramite_inspeccion_10"];
    $formato_us=$registro["formato_us"];
    $costo=$registro["costo"];
    $tra_montos=$registro["tra_montos"];
    $HorarioAtencion=$registro["HorarioAtencion"];
    $tiempo=$registro["tiempo"];
    $renavid_pasosRealizar=$registro["renavid_pasosRealizar"];
    $Renavid_Sanciones=$registro["Renavid_Sanciones"];
    //Datos de la inspeccion
    $nombre_ins=$registro["nombre_ins"];
    $modalidad=$registro["modalidad"];
    $homoclave=$registro["homoclave"];
    $autoridad=$registro["autoridad"];
    $Renar_sujetoAplicaRegulacion_unidad=$registro["Renar_sujetoAplicaRegulacion_unidad"];
    $Renar_sujetoAplicaRegulacion_telefono=$registro["Renar_sujetoAplicaRegulacion_telefono"];
    $Renar_sujetoAplicaRegulacion_direccion=$registro["Renar_sujetoAplicaRegulacion_direccion"];
    $Renar_sujetoAplicaRegulacion_correo=$registro["Renar_sujetoAplicaRegulacion_correo"];
    $Renavid_tipoInspeccion=$registro["Renavid_tipoInspeccion"];
    $objetivo=$registro["objetivo"];
    $Renavid_FundamentosJuridicos=$registro["Renavid_FundamentosJuridicos"];
    $Renavid_FundamentosJuridicos_2=$registro["Renavid_FundamentosJuridicos_2"];
    $Renavid_FundamentosJuridicos_3=$registro["Renavid_FundamentosJuridicos_3"];
    $Renavid_FundamentosJuridicos_4=$registro["Renavid_FundamentosJuridicos_4"];
    $Renavid_FundamentosJuridicos_5=$registro["Renavid_FundamentosJuridicos_5"];
    $Renavid_FundamentosJuridicos_6=$registro["Renavid_FundamentosJuridicos_6"];
    $renavid_motivacion=$registro["renavid_motivacion"];
    $periodicidad=$registro["periodicidad"];
    $RenarRegulacionAsociada=$registro["RenarRegulacionAsociada"];
    // informacion autoridad publica
    $Renavid_Facultades=$registro["Renavid_Facultades"];
    $Renavid_SujetoObligado_Inspeccion=$registro["Renavid_SujetoObligado_Inspeccion"];
    $Tra_unidadesAtienden=$registro["Tra_unidadesAtienden"];
    $telefono=$registro["telefono"];
    $direccion=$registro["direccion"];
    $correo=$registro["correo"];


    
}
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>

    <style>
        
        table, td, th{
            border: 1px solid black;
            border-collapse: collapse
        }

        td, th{
            padding: 10px;
        }

        table, th, td{
            font-family: Arial;
        }


    </style>


    </head>
    <body>

   <table style="width: 100%; border: 1px solid white;">
   <tr>
    <th ><img src="{{asset('logo.jpg')}}" width="70" height="70" ></th>
    <th style="text-align: right;">SECRETARIA DE <br> FOMENTO ECONOMICO</th>
   </tr>

   </table>

   <p>
        <div class="padron" style="text-align: center; border:1px solid black; background-color: rgb(151, 152, 149); color: white;">
        <h3>LISTADO DE INSPECCIONES</h3>
        </div>
    </p>
    <br>


<table style="width: 100%;">
    <tr>
        <td style="text-align:center; background-color: #e3efdd;">¿Qué es una inspección, verificación o visita domiciliaria?</td>
    </tr>
    <tr>
        <td style="text-align:center;">Es el Acto ordinario o extraordinario de un ente público, mediante el cual se realiza la vigilancia, promoción, control,
comprobación, supervisión o corroboración a personas físicas o morales del sector privado sobre el cumplimiento de la
regulación, o bien se asiste y asesora en el cumplimiento de la misma. Su desahogo se realiza de manera presencial en el bien
o persona, o bien mediante el uso de las tecnologías de la información, requerimientos documentales y análogos, sin perjuicio
de otras medidas previstas en la regulación.</td>
    </tr>
</table>
    

<font color="Olive" face="Arial">
    <div class="datos" style="text-align: center; background-color: #9f0524;
   
    border: 2px solid black;
    color: white;
    "><h3>Datos de identificación de la inspección</h3></div>
    </font>


<table style="width: 100%;">
<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Nombre de la inspección, <br> verificación o visita domiciliaria:</td>
    <td> <?php echo $nombre_ins;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Modalidad:</td>
    <td><?php echo $modalidad;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Homoclave:</td>
    <td><?php echo $homoclave;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Autoridad pública que aplica la inspección, <br> verificación o visita domiciliaria:</td>
    <td><?php echo $autoridad;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;" >Contacto de la Autoridad pública para cerciorar la <br> veracidad de la inspección,
verificación o visita domiciliaria
</td>
    <td>
        <table style="width: 100%;">
        <tr>
            <td style="background-color: #e3efdd; color: black;">Unidad administrativa</td>
            <td><?php echo $Renar_sujetoAplicaRegulacion_unidad;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Teléfono</td>
            <td><?php echo $Renar_sujetoAplicaRegulacion_telefono;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Dirección</td>
            <td><?php echo $Renar_sujetoAplicaRegulacion_direccion;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Correo electrónico</td>
            <td><?php echo $Renar_sujetoAplicaRegulacion_correo;?></td>
        </tr>
        </table>
    </td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Tipo de inspección, verificación o visita domiciliaria:</td>
    <td><?php echo $Renavid_tipoInspeccion;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Cuál es el objetivo de la inspección, verificación o visita domiciliaria? (Descripción
ciudadana):</td>
    <td><?php echo $objetivo;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Qué motiva la inspección, verificación o visita domiciliaria?:</td>
    <td><?php echo $renavid_motivacion;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿En qué periodicidad?:</td>
    <td><?php echo $periodicidad;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Qué trámite o servicio?:</td>
    <td><?php echo $RenarRegulacionAsociada;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;" > Fundamento jurídico:</td>
    <td>
        <table style="width: 100%;">
        <tr>
            <td style="background-color: #e3efdd; color: black;">1.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">2.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos_2;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">3.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos_3;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">4.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos_4;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">5.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos_5;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">6.-</td>
            <td><?php echo $Renavid_FundamentosJuridicos_6;?></td>
        </tr>
        </table>
    </td>
</tr>

</table>
<br><br>




<font color="Olive" face="Arial">
    <div class="datos" style="text-align: center; background-color: #9f0524;
   
    border: 2px solid black;
    color: white;
    "><h3>Información sobre la inspección</h3></div>
    </font>


<table style="width: 100%;">
<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Bien, elemento, objeto o sujeto de inspección, verificación o visita domiciliaria:</td>
    <td> <?php echo $renavid_dirigido_a;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Derechos del sujeto regulado:</td>
    <td><?php echo $derechos;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Obligaciones que debe cumplir el sujeto regulado:</td>
    <td><?php echo $renavid_obligacionesCumplir;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Requisitos o documentos necesarios:</td>
    <table style="width: 100%;">
        <tr>
            <th>No</th>
            <th>Requisito</th>
            <th>El requisito es:</th>
        </tr>
        <tr>
            <td>1.-</td>
            <td><?php echo $Renavid_requisitos;?></td>
            <td><?php echo $es_tramite_inspeccion;?></td>
        </tr>
        <tr>
            <td>2.-</td>
            <td><?php echo $Renavid_requisitos_2;?></td>
            <td><?php echo $es_tramite_inspeccion_2;?></td>
        </tr>
        <tr>
            <td>3.-</td>
            <td><?php echo $Renavid_requisitos_3;?></td>
            <td><?php echo $es_tramite_inspeccion_3;?></td>
        </tr>
        <tr>
            <td>4.-</td>
            <td><?php echo $Renavid_requisitos_4;?></td>
            <td><?php echo $es_tramite_inspeccion_4;?></td>
        </tr>
        <tr>
            <td>5.-</td>
            <td><?php echo $Renavid_requisitos_5;?></td>
            <td><?php echo $es_tramite_inspeccion_5;?></td>
        </tr>
        <tr>
            <td>6.-</td>
            <td><?php echo $Renavid_requisitos_6;?></td>
            <td><?php echo $es_tramite_inspeccion_6;?></td>
        </tr>
        <tr>
            <td>7.-</td>
            <td><?php echo $Renavid_requisitos_7;?></td>
            <td><?php echo $es_tramite_inspeccion_7;?></td>
        </tr>
        <tr>
            <td>8.-</td>
            <td><?php echo $Renavid_requisitos_8;?></td>
            <td><?php echo $es_tramite_inspeccion_8;?></td>
        </tr>
        <tr>
            <td>9.-</td>
            <td><?php echo $Renavid_requisitos_9;?></td>
            <td><?php echo $es_tramite_inspeccion_9;?></td>
        </tr>
        <tr>
            <td>10.-</td>
            <td><?php echo $Renavid_requisitos_10;?></td>
            <td><?php echo $es_tramite_inspeccion_10;?></td>
        </tr>
    </table>
</tr>


<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Se solicita llenar un formato por parte del usuario para la inspección, verificación o
visita domiciliaria? (Adjuntar):</td>
    <td><?php echo $formato_us;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Tiene al algún costo o pago de derechos?:</td>
    <td><?php echo $costo;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">El monto es de:</td>
    <td><?php echo $tra_montos;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Horario de atención y servicio:</td>
    <td><?php echo $HorarioAtencion;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Tiempo aproximado de duración de la inspección, verificación o visita domiciliaria:</td>
    <td><?php echo $tiempo;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Pasos a realizar durante la inspección, verificación o visita domiciliaria:</td>
    <td><?php echo $renavid_pasosRealizar;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Sanciones que pudieran derivar de la inspección, verificación o visita domiciliaria:</td>
    <td><?php echo $Renavid_Sanciones;?></td>
</tr>

</table>

<br><br>

<font color="Olive" face="Arial">
    <div class="datos" style="text-align: center; background-color: #9f0524;
   
    border: 2px solid black;
    color: white;
    "><h3>Información de la Autoridad Pública</h3></div>
    </font>
        
<table style="width: 100%;">
<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Facultades, atribuciones y obligaciones de la Autoridad Pública durante la inspección,
verificación o visita domiciliaria </td>
    <td> <?php echo $Renavid_Facultades;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">¿Se llena un formato por parte de la Autoridad Pública para la inspección, verificación
o visita domiciliaria? (Adjuntar):</td>
    <td><?php echo $Renavid_SujetoObligado_Inspeccion;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;" >Quejas y denuncias</td>
    <td>
        <table style="width: 100%;">
        <tr>
            <td style="background-color: #e3efdd; color: black;">Unidad administrativa</td>
            <td><?php echo $Tra_unidadesAtienden;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Teléfono</td>
            <td><?php echo $telefono;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Dirección</td>
            <td><?php echo $direccion;?></td>
        </tr>
        <tr>
            <td style="background-color: #e3efdd; color: black;">Correo electrónico</td>
            <td><?php echo $correo;?></td>
        </tr>

        <tr>
            <td style="background-color: #e3efdd; color: black;">Correo electrónico</td>
            <td><?php echo $correo;?></td>
        </tr>
        </table>
    </td>
</tr>

</table>

<br><br>

<font color="Olive" face="Arial">
    <div class="datos" style="text-align: center; background-color: #9f0524;
   
    border: 2px solid black;
    color: white;
    "><h3>Estadisticas</h3></div>
    </font>
        
<table style="width: 100%;">

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Número de inspecciones, verificaciones o visitas domiciliarias realizadas en el año
anterior</td>
    <td> <?php echo $n_inspecciones;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Número de sujetos regulados sancionados en el año anterior</td>
    <td> <?php echo $n_sanciones;?></td>
</tr>

<tr>
    <td style="background-color: rgb(151, 152, 149);color: white;">Número de funcionarios autorizados para realizar la inspección, verificación o visita
domicialiaria:</td>
    <td><?php echo $Renavid_SujetoObligado_Inspeccion;?></td>
</tr>

</table>

</body>
</html>

<?php

//Aqui se recolectan los datos del HTML para convertirlo a PDF con la libreria domPDF
$HTML=ob_get_clean();
require_once("../../libs/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf= new Dompdf;


$opciones=$dompdf->getOptions();
$opciones->set(array("isRemoteEnabled"=>true));

$dompdf->setOptions($opciones);

$dompdf->loadHTML($HTML);

$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream("archivo.pdf", array ("Attachment"=>false));

?>