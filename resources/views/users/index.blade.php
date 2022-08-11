@extends('welcome')
@section('content')
<!-- component -->
<!-- This is an example component -->


<div class="overflow-x-auto relative">
  <a href="{{ route('materia.create') }}">
    <button class="rounded-md border-solid border-2 border-indigo-600 text-red-400 mb-2 bg-blue-200	">Crear Materia</button>
  </a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-blue-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nombre Materia
                </th>
                <th scope="col" class="py-3 px-6">
                    Nombre Docente
                </th>
                <th scope="col" class="py-3 px-6">
                    Ceditos
                </th>
                <th scope="col" class="py-3 px-6">
                    Horario
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection