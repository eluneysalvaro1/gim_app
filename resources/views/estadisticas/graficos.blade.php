
@if(count($estadisticas) >= 3)
  <div class="w-75 mt-5 m-auto">
      <canvas class="" id="myChart"></canvas>
      <div class="d-none" id="datos">
          {{$estadisticas}}
      </div>
  </div>
  <div class="w-75 mt-5 m-auto">
    <canvas class="" id="myChart2"></canvas>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
      
      let estadisticas = document.getElementById('datos').textContent

      let meses = []
      let km_bicicleta = [] 
      let km_corridos = []
      let peso = []
      let rtaa = ''
      JSON.parse(estadisticas).forEach(ele => {
        rtaa = ele.created_at.slice(0,10)
        meses.push(rtaa)
        km_bicicleta.push(ele.km_bicicleta)
        km_corridos.push(ele.km_corridos)
        peso.push(ele.peso)


      });

      let vMes = meses.reverse()
      let vKmBicicleta = km_bicicleta.reverse()
      let vKmCorridos = km_corridos.reverse()
      let vPeso = peso.reverse()
       console.log(vMes.reverse)

      const data = {
        labels: vMes,
        datasets: [{
          label: 'Km Andados en Bicicleta',
          backgroundColor: 'rgb(0, 255, 232 )',
          borderColor: 'rgb(0, 255, 232 )',
          data: vKmBicicleta,
        },
        {
          label: 'Km Corridos',
          backgroundColor: 'rgb(42, 255, 0 )',
          borderColor: 'rgb(42, 255, 0 )',
          data: vKmCorridos,
        }
      ]
      };

      const data2 = {
        labels: vMes,
        datasets: [
        {
          label: 'Peso',
          backgroundColor: 'rgb(0, 12, 255 )',
          borderColor: 'rgb(0, 12, 255 )',
          data: vPeso,
        }
      ]
      };
    
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
      const config2 = {
        type: 'line',
        data: data2,
        options: {}
      };
    </script>
  
  
  <script>

      const myChart = new Chart(
        document.getElementById('myChart'),
        config 
      );

      const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2 
      );
      
    </script>
   
  @else 
     <p class="m-auto w-50 alert alert-warning text-center">No hay datos suficientes para el grafico </p> 
  @endif