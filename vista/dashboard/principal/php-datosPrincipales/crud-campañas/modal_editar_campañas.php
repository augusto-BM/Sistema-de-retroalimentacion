<div class="modal fade" id="editar_info_campaña" tabindex="-1" aria-labelledby="editar_info_campañaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center>
                            <h5 class=" modal-title" id="editar_info_campañaLabel">Editar Información de la Campaña</h5>

                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" id="campaña_id" name="id_campaña">
                            <div class="">
                                <div class="nombre-campaña" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px; "><label for="recipient-name" class="col-form-label">Empresa:</label></div>
                                <input type="text" class="form-control" style="margin-bottom: 5px;" id="nombre_campaña" name="nombre_campaña" oninput="soloLetras(this)"">
                            </div>
                            <div class="">
                                <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">Lugar:</label></div>
                                <input type="text" class="form-control" style="margin-bottom: 5px;" id="nombre_empresa" name="nombre_empresa" oninput="soloLetras(this)">
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