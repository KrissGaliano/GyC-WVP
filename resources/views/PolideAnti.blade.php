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

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Política de Anticorrupción</h1>
                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                    </p>

                    <button class="bg-gray-200 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal10-id')">
                        <svg class="h-8 w-8 text-orange-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="12 16 16 12 12 8" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    </button>

                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal10-id">
                        <div class="relative w-auto my-6 mx-auto max-w-6xl h-72">
                            <!--content-->
                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none" >
                                <!--header-->
                                <div class="w-full md:w-3/5 mx-auto p-8 text-black">
                                    <p class="text-xl">Política de <strong>Anticorrupción</strong></p>
                                    <div class="shadow-md">
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-uno" type="radio" name="tabs1">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-uno">Política de Anticorrupción de WV</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/Ecf5TaqrhPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="tab w-full overflow-hidden border-t">
                                            <input class="absolute opacity-0" id="tab-single-dos" type="radio" name="tabs1">
                                            <label class="block p-5 leading-normal cursor-pointer text-lg" for="tab-single-dos">¿Cuáles son nuestras políticas de Anticorrupción?</label>
                                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal flex justify-center">
                                                <iframe width="900" height="350" src="https://www.youtube.com/embed/eUlS7uLQvew" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--footer-->
                                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                    <button class="bg-orange-400 text-white active:bg-emerald-600 font-extrabold uppercase text-base px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal10-id')">
                                    Siguiente
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal10-id-backdrop"></div>
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
                    var myRadios = document.getElementsByName('tabs1');
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
