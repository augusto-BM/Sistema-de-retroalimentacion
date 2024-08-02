<div class="modal fade" id="editar_info_empresa" tabindex="-1" aria-labelledby="editar_info_empresaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title fs-5" id="editar_info_empresa">Informacion de la empresa</h5>
                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="../../../controlador/controlador-principal/controlador-editarempresa.php">
            <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                    <input type="hidden" id="idempresa" name="idempresa">
                                    <div class="razonsocial" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="razonsocial" class="col-form-label">Razon Social:</label></div>
                                    <div class="input-nombreEnt" ;"><input style="margin-bottom: 5px" class="form-control" type="text" id="razonsocial" name="razonsocial" value="">
                                    </div>
                                    </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="rucempresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="rucempresa" class="col-form-label">RUC:</label></div>
                                    <div class="input-rucempresa"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="rucempresa" name="rucempresa" value=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="direccion" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="direccion" class="col-form-label">Dirección:</label></div>
                                    <div class="input-direccion"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="direccion" name="direccion" value=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="ubicacion" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="ubicacion" class="col-form-label">Ubicación:</label></div>
                                    <div class="input-ubicacion"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="ubicacion" name="ubicacion" value=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="celular" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="celular" class="col-form-label">Celular:</label></div>
                                    <div class="input-celular"><input style="margin-bottom: 5px"  class="form-control"  type="text" id="celular" name="celular" value=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fecharegistro-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;" ><label for="fecharegistro-empresa" class="col-form-label">Fecha de registro:</label></div>
                                    <div class="input-fecharegistro-empresa"><input style="margin-bottom: 5px"  class="form-control "  type="date" id="fecharegistro-empresa" name="fecharegistro-empresa" value=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="click_btn_editar_cambios">Guardar Cambios</button>
            </div>
</form>
        </div>
    </div>
</div>