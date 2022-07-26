


<div id="aside" class="w-100 m-5">
  <?php $i=0 ?> 
    @forelse ($rutinas as $rutina)
    <div class="d-flex align-items-center justify-content-evenly m-5">
      <hr class="w-50"> 
      <h6>{{$rutina[0]->fecha}}</h6>
    </div>
        <div class="accordion m-2 border-0 shadow" id="accordionExample{{$i}}">
          <div class="accordion-item border-0">
            <h2 class="accordion-header border-0" id="headingOne{{$i}}">
              <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$i}}" aria-expanded="false" aria-controls="collapseOne{{$i}}">
                Rutina realizada el dia: {{$rutina[0]->fecha}}         
              </button>
          </h2>
          @forelse ($rutina as $ruti)
                <div id="collapseOne{{$i}}" class="accordion-collapse border-0" aria-labelledby="headingOne{{$i}}" data-bs-parent="#accordionExample{{$i}}">
                  <div class="accordion-body">
                      <p>Se hicieron <strong>{{$ruti->repeticiones}} repeticiones</strong>  con un peso promedio de <strong>{{$ruti->promedio_peso}} Kg</strong> haciendo <strong>{{$ruti->ejercicio['nombre']}}</strong> para trabajar <strong>{{$ruti->ejercicio['musculo_trabajado']}}</strong>  </p>
                  </div>
            </div>
          @empty
            No Hay resultados
          @endforelse
        </div>
    </div>
    
    <?php $i++ ?> 
    @empty
        <p class="alert alert-warning">No hay resultados</p>
    @endforelse
    
    
</div>