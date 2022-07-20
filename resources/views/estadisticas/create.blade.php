<div class="modal fade" id="estadisticasModal" tabindex="-1" aria-labelledby="estadisticasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="estadisticasModalLabel">Estadisticas Personales</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action=" {{route('estadisticas.store')}}" method="post">
            <div>
                @csrf
                <div class="mb-3">
                    <label for="altura" class="form-label">Altura</label>
                    <input type="number" class="form-control" name="altura" id="altura" placeholder="1.70">
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control" name="peso" id="peso" placeholder="69">
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="date" class="form-control" name="edad" id="edad" placeholder="2002-06-26">
                </div>
                <div class="mb-3">
                    <label for="km_corridos" class="form-label">Km Corridos</label>
                    <input type="number" class="form-control" name="km_corridos" id="km_corridos" placeholder="1">
                </div>
                <div class="mb-3">
                    <label for="km_bicicleta" class="form-label">Km Bicicleteados</label>
                    <input type="number" class="form-control" name="km_bicicleta" id="km_bicicleta" placeholder="325">
                </div>
                <div class="mb-3">
                    <label for="meses_entrenando" class="form-label">Meses Entrenando</label>
                    <input type="number" class="form-control" name="meses_entrenando" id="meses_entrenando" placeholder="7">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Informacion</button>
        </div>
        </form>
      </div>
    </div>
  </div>
