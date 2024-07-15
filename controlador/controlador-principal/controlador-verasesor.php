<?php
@include '../../modelo/conexion.php';

if (isset($_POST['click_btn_ver'])) {
  $id = $_POST['user_id'];
  $sql = "SELECT  
  colaborador.nombre AS nombreColaborador,
  colaborador.apellido AS apellidoColaborador,
    colaborador.celular AS celularAsesor,
    colaborador.direccion AS direccionAsesor,
    colaborador.sexo AS sexoAsesor,
    colaborador.fecha_nacimiento AS fecnacAsesor,
  empresa.razonsocial AS nombreEmpresa,
  tematica.nombre_tematica AS nombreTematica,
  login.usuario AS usuarioAsesor,
    login.contraseña AS contraseñaAsesor 
FROM 
  colaborador
INNER JOIN 
  empresa ON colaborador.id_empresa = empresa.idempresa
  INNER JOIN
  tematica ON colaborador.id_tematica = tematica.id_tematica
  INNER JOIN
  login ON colaborador.id_colaborador = login.id_colaborador
WHERE 
  colaborador.id_colaborador = '$id'";

    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
?>
            <div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                    <input type="hidden" id="id_colaborador" name="id_colaborador">
                                    <div class="nombre-colaborador" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="nombre_colaborador" class="col-form-label">Colaborador:</label></div>
                                    <div class="input-nombreEnt" ;"><input style="margin-bottom: 5px" class="form-control" type="text" id="nombre_colaborador" name="nombre_colaborador" value="<?php echo $fila['nombreColaborador'] ?>" readonly>
                                    </div>
                                    </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="nombre-apellido" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="apellido_colaborador" class="col-form-label">Empresa:</label></div>
                                    <div class="input-empresa"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="apellido_colaborador" name="apellido_colaborador" value="<?php echo $fila['apellidoColaborador'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="celular_asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="celular_asesor" class="col-form-label">Celular:</label></div>
                                    <div class="celular_asesor"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="celular_asesor" name="celular_asesor" value="<?php echo $fila['celularAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="direccion_asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="direccion_asesor" class="col-form-label">Dirección:</label></div>
                                    <div class="direccion_asesor"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="direccion_asesor" name="direccion_asesor" value="<?php echo $fila['direccionAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="sexo_asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="sexo_asesor" class="col-form-label">Sexo:</label></div>
                                    <div class="sexo_asesor"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="sexo_asesor" name="sexo_asesor" value="<?php echo $fila['sexoAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fecha_nacimiento" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="fecha_nacimiento" class="col-form-label">Fecha de Nacimiento:</label></div>
                                    <div class="fecha_nacimiento"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fila['fecnacAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="apellido_empresa" class="col-form-label">Empresa:</label></div>
                                    <div class="input-empresa"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="nombre_empresa" name="nombre_empresa" value="<?php echo $fila['nombreEmpresa'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="nombre-tematica" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="nombre-tematica" class="col-form-label">Tematica:</label></div>
                                    <div class="input-tematica"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="nombre-tematica" name="nombre-tematica" value="<?php echo $fila['nombreTematica'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="usuario-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="usuario-asesor" class="col-form-label">Usuario:</label></div>
                                    <div class="input-usuario-asesor"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="usuario-asesor" name="usuario-asesor" value="<?php echo $fila['usuarioAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="contraseña-asesor" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="contraseña-asesor" class="col-form-label">Contraseña:</label></div>
                                    <div class="input-contraseña-asesor"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="contraseña-asesor" name="contraseña-asesor" value="<?php echo $fila['contraseñaAsesor'] ?>" readonly></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

<?php

        }
        
    }
}
?>