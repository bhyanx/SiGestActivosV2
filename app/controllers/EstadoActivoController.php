<?php
//require_once '../config/configuracion.php';
require_once '../models/EstadoActivo.php';

$estadoActivo = new EstadoActivo();

$action = $_GET['action'] ?? $_POST['action'] ?? 'Consultar';

switch($action){

    case 'RegistrarEstadoActivo':
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            try{
                $data = [
                    'idEstadoActivo' => null,
                    'nombre' => $_POST['nombre'],
                    'descripcion' => $_POST['descripcion'],
                    'esFinal' => $_POST['esFinal'],
                ];
                $estadoActivo->crear($data);
                echo "Estado Activo registrado con éxito.";
            }catch(Exception $e){
                echo "Error: " . $e->getMessage();
            }
        }
        break;

    case 'ActualizarEstadoActivo':
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            try{
                $data = [
                    'idEstadoActivo' => $_POST['idEstadoActivo'],
                    'nombre' => $_POST['nombre'],
                    'descripcion' => $_POST['descripcion'],
                    'esFinal' => $_POST['esFinal'],
                ];
                $estadoActivo->actualizar($data);
                echo "Estado Activo actualizado con éxito.";
            }catch(Exception $e){
                echo "Error: " . $e->getMessage();
            }
        }
}

?>

<!-- $objetoEstadoActivo = new EstadoActivoModels();

switch ($_GET['op']) {
    case "combo":
        $datos = $objetoEstadoActivo->get_EstadoActivo($_POST['idEstadoActivo']);
        if (is_array($datos) and count($datos) > 0) {
            $html = "<option value=''>Selecione</option>";
            foreach ($datos as $row) {
                $html .= "<option value='" . $row['idEstadoActivo'] . "'>" . $row['nombre'] . "</option>";
            }
            echo $html;
        } else {
            echo "<option value=''>Selecione</option>";
        }
        break;

    case 'listar':
        $datos = $objetoEstadoActivo->get_EstadoActivo_id($_POST['idEstadoActivo']);
        $data = array();
        $i = 1;
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $i;
            $sub_array[] = $row['idEstadoActivo'];
            $sub_array[] = $row['nombre'];
            $sub_array[] = $row['descripcion'];
            $sub_array[] = $row['esFinal'];
            if ($row['esFinal'] == 1) {
                $sub_array[] = '<span class="badge badge-pill badge-success">Activo</span>';
                $sub_array[] = '<div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <button type="button" onClick="editar(' . $row['idEstadoActivo'] . ')" id="' . $row['idEstadoActivo'] . '" class="btn btn-sm dropdown-item"><i class="fa fa-edit text-warning"></i> Editar</button>
                                    <button type="button" onClick="eliminar(' . $row['idEstadoActivo'] . ')" id="' . $row['idEstadoActivo'] . '" class="btn btn-sm dropdown-item"><i class="fa fa-trash text-danger"></i> Eliminar</button>
                                </div>
                            </div>';
            } else {
                $sub_array[] = '<span class="badge badge-pill badge-danger">DESACTIVADO</span>';
                $sub_array[] = '<div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <button type="button" onClick="activar(' . $row['idEstadoActivo'] . ')" id="' . $row['idEstadoActivo'] . '" class="btn btn-sm dropdown-item"><i class="fa fa-check text-info"></i> Activar</button>
                                </div>
                            </div>';
            }
            $data[] = $sub_array;
            $i++;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    default:
        # code...
        break;
} -->