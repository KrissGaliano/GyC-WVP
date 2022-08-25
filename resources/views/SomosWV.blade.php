<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Somos World Vision
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Tab content - closed */
        .tab-content {
        max-height: 0;
        -webkit-transition: max-height .35s;
        -o-transition: max-height .35s;
        transition: max-height .35s;
        }
        /* :checked - resize to full height */
        .tab input:checked ~ .tab-content {
        max-height: 100vh;
        }
        /* Label formatting when open */
        .tab input:checked + label{
        /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
        font-size: 1.25rem; /*.text-xl*/
        padding: 1.25rem; /*.p-5*/
        border-left-width: 2px; /*.border-l-2*/
        border-color: #f6a951; /*.border-indigo*/
        background-color: #f8fafc; /*.bg-gray-100 */
        color: #f6a951; /*.text-indigo*/
        }
        /* Icon */
        .tab label::after {
        float:right;
        right: 0;
        top: 0;
        display: block;
        width: 1.5em;
        height: 1.5em;
        line-height: 1.5;
        font-size: 1.25rem;
        text-align: center;
        -webkit-transition: all .35s;
        -o-transition: all .35s;
        transition: all .35s;
        }
        /* Icon formatting - closed */
        .tab input[type=checkbox] + label::after {
        content: "+";
        font-weight:bold; /*.font-bold*/
        border-width: 1px; /*.border*/
        border-radius: 9999px; /*.rounded-full */
        border-color: #b8c2cc; /*.border-grey*/
        }
        .tab input[type=radio] + label::after {
        content: "\25BE";
        font-weight:bold; /*.font-bold*/
        border-width: 1px; /*.border*/
        border-radius: 9999px; /*.rounded-full */
        border-color: #b8c2cc; /*.border-grey*/
        }
        /* Icon formatting - open */
        .tab input[type=checkbox]:checked + label::after {
        transform: rotate(315deg);
        background-color: #eba968; /*.bg-indigo*/
        color: #f8fafc; /*.text-grey-lightest*/
        }
        .tab input[type=radio]:checked + label::after {
        transform: rotateX(180deg);
        background-color: #eabd54; /*.bg-indigo*/
        color: #f8fafc; /*.text-grey-lightest*/
        }
     </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <nav class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-16 w-auto" src="https://blogger.googleusercontent.com/img/a/AVvXsEhjD6LMLU65EpxDEWEmSNL6h32cn_5699y9_fXDVPPuZ54cOHRqYKDDkczX--4sxuVbntRs7PpTh_wBvYDwuxnjcu5qyt2MeBvCSzzbSRomKf-kyPYmVj6P1ALHWffMJOMZ58LUi7kMXg4oqZUAh4CGmWIuUAi-YCqHfvpZhRDEfuGlDWW3V16oDC1Z6w=w441-h188" alt="Workflow">
                <img class="hidden lg:block h-16 w-auto" src="https://blogger.googleusercontent.com/img/a/AVvXsEhjD6LMLU65EpxDEWEmSNL6h32cn_5699y9_fXDVPPuZ54cOHRqYKDDkczX--4sxuVbntRs7PpTh_wBvYDwuxnjcu5qyt2MeBvCSzzbSRomKf-kyPYmVj6P1ALHWffMJOMZ58LUi7kMXg4oqZUAh4CGmWIuUAi-YCqHfvpZhRDEfuGlDWW3V16oDC1Z6w=w441-h188" alt="Workflow">
            </div>
        </div>
    </nav>

    <section class="bg-white dark:bg-gray-900 content-center mx-4 pt-40 ml-20 mr-20 mb-20">
        <div class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 space-y-3 border-2 border-orange-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg class="h-8 w-8 text-orange-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Conozcamos a la familia World Vision</h1>
                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                    </p>

                    <button class="bg-gray-200 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal2-id')">
                        <svg class="h-8 w-8 text-orange-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    </button>

                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal2-id">
                        <div class="relative w-auto my-6 mx-auto max-w-6xl h-72">
                            <!--content-->
                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" >
                                <!--header-->
                                <div class="w-full md:w-3/5 mx-auto p-8 text-black">
                                    <p class="text-xl">Conozcamos a Familia <strong>WORLD VISION</strong></p>
                                    <div class="shadow-md">
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs1">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-one">¿Quiénes Somos?</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/NnEP5Gjkt_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs1">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-two">Familia World Vision Perú</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/GAJ2Ygf2VHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--footer-->
                                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                    <button class="bg-orange-400 text-white active:bg-emerald-600 font-extrabold uppercase text-base px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal2-id')">
                                    Siguiente
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal2-id-backdrop"></div>
                </div>


                <div class="p-8 space-y-3 border-2 border-orange-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg class="h-8 w-8 text-orange-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" /></svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Nuestro ADN</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                    </p>

                    <button class="bg-gray-200 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal3-id')">
                        <svg class="h-8 w-8 text-orange-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    </button>
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal3-id">
                        <div class="relative w-auto my-6 mx-auto max-w-6xl h-72">
                            <!--content-->
                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" >
                                <!--header-->
                                <div class="w-full md:w-3/5 mx-auto p-8 text-black">
                                    <p class="text-xl">Nuestro <strong>ADN</strong></p>
                                    <div class="shadow-md">
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-three">Nuestra Misión</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/FwZt603AVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-four">Nuestra Visión</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/1-4q9fjZUTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-five">Nuestra Valores Centrales</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/GTIgfYxLsLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-->
                            <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                <button class="bg-orange-400 text-white active:bg-emerald-600 font-extrabold uppercase text-base px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal3-id')">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal3-id-backdrop"></div>
            </div>

            <div class="p-8 space-y-3 border-2 border-orange-400 dark:border-blue-300 rounded-xl">
                <span class="inline-block text-blue-500 dark:text-blue-400">
                    <svg class="h-8 w-8 text-orange-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </span>
                <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Somos World Vision</h1>
                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                </p>

                <button class="bg-gray-200 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal4-id')">
                    <svg class="h-8 w-8 text-orange-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                </button>
                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal4-id">
                    <div class="relative w-auto my-6 mx-auto max-w-6xl h-72">
                        <!--content-->
                        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" >
                            <!--header-->
                            <div class="w-full md:w-3/5 mx-auto p-8 text-black">
                                <p class="text-xl">Declaración <strong>de Fe</strong></p>
                                <div class="shadow-md">
                                    <div class="tab w-full overflow-hidden border-t">
                                        <input class="absolute opacity-0" id="tab-single-six" type="radio" name="tabs3">
                                        <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-six">¿Qué es la declaración de Fe?</label>
                                        <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                            <iframe width="900" height="350" src="https://www.youtube.com/embed/Xqn2a5TnvkA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-->
                            <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                <button class="bg-orange-400 text-white active:bg-emerald-600 font-extrabold uppercase text-base px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal4-id')">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal4-id-backdrop"></div>
                </div>




                <script type="text/javascript">
                    function toggleModal(modalID){
                      document.getElementById(modalID).classList.toggle("hidden");
                      document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                      document.getElementById(modalID).classList.toggle("flex");
                      document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                    }
                </script>

                <script>
                    /* Optional Javascript to close the radio button version by clicking it again */
                    var myRadios = document.getElementsByName('tabs3');
                    var setCheck;
                    var x = 0;
                    for(x = 0; x < myRadios.length; x+++){
                        myRadios[x].onclick = function(){
                            if(setCheck != this){
                                 setCheck = this;
                            }else{
                                this.checked = false;
                                setCheck = null;
                            }
                        };
                    }
                    </script>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

