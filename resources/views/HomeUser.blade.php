<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div>
        <nav class="flex items-center justify-between flex-wrap bg-gray-300 p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-16 w-auto" src="https://blogger.googleusercontent.com/img/a/AVvXsEhjD6LMLU65EpxDEWEmSNL6h32cn_5699y9_fXDVPPuZ54cOHRqYKDDkczX--4sxuVbntRs7PpTh_wBvYDwuxnjcu5qyt2MeBvCSzzbSRomKf-kyPYmVj6P1ALHWffMJOMZ58LUi7kMXg4oqZUAh4CGmWIuUAi-YCqHfvpZhRDEfuGlDWW3V16oDC1Z6w=w441-h188" alt="Workflow">
                    <img class="hidden lg:block h-16 w-auto" src="https://blogger.googleusercontent.com/img/a/AVvXsEhjD6LMLU65EpxDEWEmSNL6h32cn_5699y9_fXDVPPuZ54cOHRqYKDDkczX--4sxuVbntRs7PpTh_wBvYDwuxnjcu5qyt2MeBvCSzzbSRomKf-kyPYmVj6P1ALHWffMJOMZ58LUi7kMXg4oqZUAh4CGmWIuUAi-YCqHfvpZhRDEfuGlDWW3V16oDC1Z6w=w441-h188" alt="Workflow">
                  </div>
            </div>

            <div class="block lg:hidden">
                <button id="boton" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" ><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="menu">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li>
                        <div class="m-3">
                            <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                              <span class="mr-2">User</span>
                              <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            </button>
                          </div>
                    </li>
                    <li>
                        <div class="m-3">
                            <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                              <span class="mr-2">Notificaciones</span>
                              <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                              </svg>

                            </button>
                          </div>
                    </li>
                    <li>
                        <div class="m-3">
                            <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                              <a class="mr-2" href="{{ url('/login') }}">Salir</a>
                              <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            </button>
                          </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>



<div  max-width=768px>
    <div class="bg-gray-100 flex justify-between mx-4 pt-40 ml-20 mr-20 mb-20">

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Bienvenida</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a class="mr-2" href="{{ url('bienvenida') }}">Ingresar</a></button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Somos World Vision</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Mis Beneficios y Políticas</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>
</div>
</div>


<div  max-width=768px>
    <div class="bg-gray-100 flex justify-between mx-4 pt-10 ml-20 mr-20 mb-20">

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Relaciones y Retribuciones laborales</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Política de Anticorrupción</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Protección y Salvaguardia</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>
</div>
</div>


<div  max-width=768px>
    <div class="bg-gray-100 flex justify-between mx-4 pt-10 ml-20 mr-20 mb-20">

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Comunicaciones</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Sostenibilidad y Amigo Solidario</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10 inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Seguridad de la Información TI</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"">Ingresar</button>
          </div>
        </div>
      </div>
</div>
</div>


<div  max-width=768px>
    <div class="bg-gray-100 flex justify-between mx-4 pt-10 ml-20 mr-20 mb-20">

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Tu Agenda</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10 inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Tu Mundo World Vision </h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="flex justify-center" max-width=768px>
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">--</h5>
            <p class="text-gray-700 text-base mb-4">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            <button type="button" class="text-white bg-gradient-to-br from-neutral-300 to-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xl px-20 py-3.5 text-center ml-10 mr-10 mb-10  inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"">Ingresar</button>
          </div>
        </div>
      </div>
</div>
</div>



	<!--Scripts-->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
