<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo candidato') }}
        </h2>
    </x-slot>

  <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 <!--                 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> -->
                
            
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="flex -mx-2">
        <div class="w-1/3 bg-gray-400 h-12 px-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>
        <div class="w-1/3 bg-gray-400 h-12 px-2">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Apellido paterno
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>
        <div class="w-1/3 bg-gray-400 h-12"></div>
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>


            <!-- </div>-->
        </div>
    </div> 
</x-app-layout>