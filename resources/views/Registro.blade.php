<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="bg-gray-100 flex bg-local" style="background: url('')">
  <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
    <form>
        <div class="text-center">
                  <img
                    class="mx-auto w-48"
                    src="https://worldvision.pe/photos/shares/NOTICIAS/Logo%20png.png"
                    alt="logo"
                  />
                  <h4 class="text-3xl font-medium mt-20 mt-1 mb-12 pb-1 tracking-wider"> REGISTRO DE USUARIOS</h4>
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="apellido">
                Apellido
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="apellido" type="text" placeholder="Apellido Completo">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="nombre">
                Nombre
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="nombre" type="text" placeholder="Nombre Completo">
            </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="correo">
                Correo Electrónico
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="correo" type="text" placeholder="Ingresar Correo electrónico">
            </div>
            </div>
            <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sede">
                Sede
                </label>
                <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="sede">
                    <option>Abuja</option>
                    <option>Enugu</option>
                    <option>Lagos</option>
                </select>
                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="puesto">
                Puesto
                </label>
                <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="puesto">
                    <option>Full-Time</option>
                    <option>Part-Time</option>
                    <option>Internship</option>
                </select>
                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="area">
                Área
                </label>
                <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="area">
                    <option>Engineering</option>
                    <option>Design</option>
                    <option>Customer Support</option>
                </select>
                </div>
            </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="dni">
                DNI
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="dni" type="text" placeholder="Número de DNI">
            </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="contraseña">
                Contraseña
                </label>
                <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="contraseña" type="password" placeholder="Ingrese su Contraseña">
            </div>
            </div>
            <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3" >
                <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                <a href="{{ url('/login') }}">Registrarse</a>
                </button>
            </div>
            </div>
        </div>
    </form>
  </div>
</body>
</html>