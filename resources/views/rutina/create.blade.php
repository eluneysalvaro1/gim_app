<div class="modal fade" id="rutinaModal" tabindex="-1" aria-labelledby="rutinaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rutinaModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action=" {{route('rutina.store')}}" method="post">
                <div>
                    @csrf
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="2002-06-26">
                    </div>
                    <div class="mb-3">
                        <label for="repeticiones" class="form-label">Repeticiones</label>
                        <input type="number" class="form-control" name="repeticiones" id="repeticiones" placeholder="69">
                    </div>
                    
                    <div class="mb-3">
                        <label for="promedio_peso" class="form-label">Promedio Peso</label>
                        <input type="number" class="form-control" name="promedio_peso" id="promedio_peso" placeholder="1">
                    </div>
                    <div class="mb-3">
                        <label for="km_bicicleta" class="form-label">Ejercicio</label>
                        <select class="form-select" name="ejercicio" id="">
                            @forelse ($ejercicios as $ejer)
                                <option value=" {{$ejer['id']}} "> {{$ejer['nombre']}} </option>
                            @empty
                                No hay resultados
                            @endforelse
                        </select>
                    </div>
                    <input type="number" class="d-none" name="user_id" id="user_id" value="{{Auth::user()->id}}">
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
