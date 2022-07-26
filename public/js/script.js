ServiceWorkerContainer.register('./js/sw.js')
    .then(reg => console.log('registado', reg))
    .catch(err => console.log('error', err))