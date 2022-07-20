

<div id="estadisticas" class="d-flex container-fluid"  style="border-radius: 15px;">
    <div id="estadisticas_primero" class="">
        <div id="estadisticas_primero_uno">
            <span>Hola</span>
            <h5>{{$usuario['name']}} </h5>
            <h6 id="day"></h6>
        </div> 
        <div id="estadisticas_primero_dos">
            <div id="clockdate">
                <div class="clockdate-wrapper">
                  <div id="clock"></div>
                  <div id="date"></div>
                </div>
              </div>
        </div>
    </div>
    <hr>
    <div id="estadisticas_segundo" class="">
        @if(isset($estadisticas))
            <?php
                $es = $estadisticas[0]
            ?>
            <div id="estadisticas_segundo_uno">
                <h4>Peso</h4>
                <h5 id="peso">{{$es['peso'] }}</h5>
            </div>
            <div id="estadisticas_segundo_uno">
                <h4>Altura</h4>
                <h5 id="altura">{{$es['altura'] }}</h5>
            </div>
            <div id="estadisticas_segundo_uno">
                <h4>Edad</h4>
                <h5 id="fecha" class="d-none">{{ $es['edad'] }}</h5>
                <h5  id="age"></h5>
            </div>
        @else
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#estadisticasModal"> Ingresar Estadisticas </button>
        @endif
    </div> 
    <hr>
    <div id="estadisticas_tercero">
        <button id="estadisticas_tercero_uno" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#rutinaModal"> Agregar Rutina </button>
    </div>
   
</div>



@include('rutina.create')

@include('estadisticas.create')




<script>
 let horaActual = new Date().getHours()
    let rta = ''
    if (horaActual > 9 && horaActual < 12) {
        rta = 'Buen Dia'
    }else if(horaActual >= 12 && horaActual <= 20){
        rta = 'Buenas Tardes'
    }else{
        rta = 'Buenas Noches'
    }
    document.getElementById('day').innerHTML = rta


    let edad = new Date().getFullYear()
    let fecha = parseInt(document.getElementById('fecha').textContent)
    document.getElementById('age').innerHTML =  edad - fecha


</script>

<script>

    document.getElementById('age').addEventListener('keydown' , e => {
        console.log('todos cambian')
    })

</script>


<script>

    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}


startTime()
</script>
    
