const CACHE_NAME = 'v1_cache_gymapp',
    urlsToCache = [
        './',
        './css/app.css',
        './js/script.js'
    ]

console.log('hola sw')

self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache => {
            return cache.addAll(urlsToCache)
                .then(() => self.skipWaiting())
        })
        .catch(err => {
            console.log('Error', err)
        })
    )
})

self.addEventListener('activate', e => {
    const cacheWhiteList = [CACHE_NAME]
    e.waitUntil(
        caches.keys()
        .then(cacheNames => {
            cacheNames.map(cacheName => {
                if (cacheWhiteList.indexOf(cacheName) === -1) {
                    return caches.delete(cacheName)
                }
            })
        })
        .then(() => self.clients.claim())
    )
})

self.addEventListener('fetch', e => {
    e.responseWith(
        caches.match(e.request)
        .then(res => {
            if (res) {
                return res
            } else {
                return fetch(e.request)
            }
        })
    )
})