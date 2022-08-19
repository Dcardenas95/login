@extends('welcome')
@section('content')

    <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Crear Materias</h5>
    <div class="w-96 bg-sky-200 rounded rounded-md">
        <form  action="{{route('course.store')}}" method="POST">
        @csrf
           <div class="mb-6">
           <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre de la materia :</label>
           <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
           </div>
           <div class="mb-6">
           <label for="credito" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cantidad de creditos :</label>
           <input type="number" id="creditos" name="creditos"  value="{{old('creditos')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           </div>
           <div class="mb-6">
               <label for="horario1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Horario 1 :</label>
               <input type="datetime-local" name ="primerdia"  value="{{old('primerdia')}}" id="primerdia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
               dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           </div>
           <div class="mb-6">
               <label for="horario2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Horario 2 :</label>
               <input type="datetime-local" id="segundodia" name="segundodia" value="{{old('segundodia')}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           </div>
           <div class="flex justify-center pb-5">
               <button type="submit" class="flex justify-center text-white md:w-auto bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
               text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 grid content-center">Crear Materia</button>
           </div>
       </form>
    </div>
@endsection