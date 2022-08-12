<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
<main id="content" role="main" class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg light:bg-gray-500 dark:border-gray-300">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-gray-800">¿Olvidaste tu contraseña?</h1>
          <p class="mt-2 text-sm text-gray-800 dark:text-gray-800">
            ¿Recuerdas tu contraseña?
            <a class="text-orange-500 decoration-2 hover:underline font-medium" href="{{ url('/login') }}">
              Entra aquí
            </a>
          </p>
        </div>

        <div class="mt-5">
          <form>
            <div class="grid gap-y-4">
              <div>
                <label for="dni" class="block text-sm font-bold ml-1 mb-2 dark:text-black">DNI</label>
                <div class="relative">
                  <input type="dni" id="dni" name="dni" placeholder ="Ingresar DNI" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="dni-error">
                </div>
                <p class="hidden text-xs text-red-600 mt-2" id="dni-error">Incluya un número de DNI válida para que podamos responderle</p>
              </div>

              <div>
                <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-black">CORREO</label>
                <div class="relative">
                  <input type="email" id="email" name="email" placeholder ="Ingresar Correo Electrónico" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                </div>
                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Incluya una dirección de correo electrónico válida para que podamos responderle</p>
              </div>

              <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-orange-400 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Recuperar mi Contraseña</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    
  </main>
</body>
</html>