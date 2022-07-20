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

    console.log(peso)

    const data = {
      labels: meses,
      datasets: [{
        label: 'Km Andados en Bicicleta',
        backgroundColor: 'rgb(0, 255, 232 )',
        borderColor: 'rgb(0, 255, 232 )',
        data: km_bicicleta,
      },
      {
        label: 'Km Corridos',
        backgroundColor: 'rgb(42, 255, 0 )',
        borderColor: 'rgb(42, 255, 0 )',
        data: km_corridos,
      }
    ]
    };

    const data2 = {
      labels: meses,
      datasets: [
      {
        label: 'Peso',
        backgroundColor: 'rgb(0, 12, 255 )',
        borderColor: 'rgb(0, 12, 255 )',
        data: peso,
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
   