@extends('welcome')
@section('content')
<!-- component -->
<!-- This is an example component -->


<div class="overflow-x-auto relative">
  <a href="{{ route('course.create') }}">
    <button class="rounded-md border-solid border-2 border-indigo-600 text-red-400 mb-2 bg-blue-200	">Crear Materia</button>
  </a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-blue-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nombre Materia
                </th>
                <th scope="col" class="py-3 px-6">
                    Creditos de la materia
                </th>
                <th scope="col" class="py-3 px-6">
                    Primer Horario
                </th>
                <th scope="col" class="py-3 px-6">
                    Segundo Horario
                </th>
                <th scope="col" class="py-3 px-6">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$course->nombre}}
                    </th>
                    <td class="py-4 px-6">
                        {{$course->creditos}}
                    </td>
                    <td class="py-4 px-6">
                        {{$course->primerdia}}
                    </td>
                    <td class="py-4 px-6">
                        {{$course->segundodia}}
                    </td>
                    <td>
                        <div style="display: flex">
                            <a href="{{route('course.edit' , $course)}}">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <div>
                                <form action="{{route('course.destroy' , $course)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>   
                </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection