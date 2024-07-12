<div class="button-view-campaign">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVerCampaña"><i class="fas fa-eye"></i> Ver Detalles</button>

    <div class="modal fade" id="modalVerCampaña" tabindex="-1" aria-labelledby="modalVerCampañaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerCampañaLabel">Detalles de la Campaña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombreCampaña" class="form-label">Nombre de la Campaña:</label>
                        <input type="text" class="form-control" id="nombreCampaña" value="Nombre de la Campaña Ejemplo" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nombreEmpresa" class="form-label">Empresa:</label>
                        <input type="text" class="form-control" id="nombreEmpresa" value="Nombre de la Empresa Ejemplo" readonly>
                    </div>
                    <!-- Aquí puedes añadir más campos de acuerdo a tus necesidades -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
