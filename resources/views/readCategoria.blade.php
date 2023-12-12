@extends('layouts.plantilla')

@section('titulo', 'CRUD * READ')

@section('contenido')
<body>
    <header">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Abarrotes "La recuperacion"</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="{{ route("Logout") }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Cerrar sesion</a>
                </div>
            </div>
          </nav>
          <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        
                        <li>
                            <a href="{{ route("crud.read") }}" class="text-gray-900 dark:text-white hover:underline">Productos</a>
                        </li>
                        <li>
                            <a href="{{ route("crud.readCategoria")}}" class="text-gray-900 dark:text-white hover:underline">Proveedores</a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    </header>
  </body>

<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
style="background-image: url(https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
<div class="container mx-auto flex justify-center">
    <div class="relative overflow-x-auto">
        <div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				Proveedores
			</h2>
		</div>
        <a href="{{ route('crud.createCategoria') }}">
            <button type="button"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Agregar
                Proveedor</button>
        </a>
        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Proveedor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actualizar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->categoria }}
                        </th>
                        <td class="px-6 py-4">
                            <form action="{{ route('crud.editCategoria', $item->id) }}" method="GET">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Actualizar</button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('crud.showCategoria', $item->id) }}" method="GET">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
