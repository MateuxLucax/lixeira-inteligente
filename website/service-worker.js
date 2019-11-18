var hoje = new Date();
const staticCacheName = "lixeira-inteligente-" + hoje.getTime();
const filesToCache = [
  // Páginas
  "index.html",
  "offline.html",
  "sobre/index.html",
  "contato/index.html",
  "faca-voce-mesmo/index.html",

  // Manifesto
  "manifest.json",

  // Ícones
  "assets/img/icons/icon-192x192.png",
  "assets/img/componentes/favicon.png",

  // Estilo
  "assets/css/lixeira-inteligente.css",

  // Scripts
  "assets/js/lixeira-inteligente.min.js",
  "assets/js/init.min.js",  
  "assets/js/requisicoes.min.js",

  // Imagens
  "assets/img/componentes/logo.svg",
  "assets/img/pagina-inicial/sensores.svg",
  "assets/img/pagina-inicial/automatica.svg",
  "assets/img/pagina-inicial/construa-voce-mesmo.svg",
  "assets/img/pagina-inicial/open-source.svg",

  // Fontes
  "assets/fonts/lixeira-inteligente.woff"
];

// Cache on install
this.addEventListener("install", event => {
  this.skipWaiting();
  event.waitUntil(
    caches.open(staticCacheName)
      .then(cache => {
        return cache.addAll(filesToCache);
    })
  )
});

// Clear cache on activate
this.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames
          .filter(cacheName => (cacheName.startsWith('lixeira-inteligente-')))
          .filter(cacheName => (cacheName !== staticCacheName))
          .map(cacheName => caches.delete(cacheName))
      );
    })
  );
});

// Serve from Cache
this.addEventListener("fetch", event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        return response || fetch(event.request);
      })
      .catch(() => {
        return caches.match('offline.html');
      })
  )
});