const cacheName = 'lixeira-inteligente';
const resourcesToCache = [
  '../../index.html',
  '../../assets/pwa/manifest.json',
  '../../assets/pwa/images/icons/icon-192x192.png',
  '../../assets/css/lixeira-inteligente.css',
  '../../assets/js/lixeira-inteligente.min.js',
  '../../assets/js/init.min.js',
  '../../assets/js/requisicoes.min.js',
  '../../assets/img/componentes/logo.svg',
  '../../assets/fonts/lixeira-inteligente.woff',
  '../../assets/img/componentes/favicon.png',
  '../../contato/index.html',
  '../../faca-voce-mesmo/index.html'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(resourcesToCache);
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});
