


<div id="aside" class="w-100 m-5">
  <?php $i=0 ?> 
    @forelse ($rutinas as $rutina)
    <div class="d-flex align-items-center justify-content-evenly m-5">
      <hr class="w-50"> 
      <h6>{{$rutina[0]->fecha}}</h6>
    </div>
        <div class="accordion m-3" id="accordionExample{{$i}}">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne{{$i}}">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                Rutina realizada el dia: {{$rutina[0]->fecha}}         
              </button>
          </h2>
          @forelse ($rutina as $ruti)
                <div id="collapseOne{{$i}}" class="accordion-collapse" aria-labelledby="headingOne{{$i}}" data-bs-parent="#accordionExample{{$i}}">
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
        No hay resultados
    @endforelse
    
    
</div>