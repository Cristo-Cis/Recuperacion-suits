@extends('layouts.plantilla')

@section('titulo', 'CRUD * CREATE')

@section('contenido')
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1698394210081-ec748773df66?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				Hacer compra
			</h2>
			<p class="mt-2 text-sm text-gray-400">Escribir los datos:</p>
		</div>
        <form action="{{route('crud.store')}}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input type="text" id="nombre" name="nombre" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="Telefono"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                <input type="text" id="telefono" name="telefono" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="categoria"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proveedor</label>
                <select type="text" id="categoria" name="categoria" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Selecciona una proveedor</option>
                    @foreach ($categoria as $item)
                        <option value="{{$item->categoria}}">{{$item->categoria}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Agregar
                Registro</button>
        </form>
        <a href="{{ route('crud.read') }}">
            <button type="button"
                class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Regresar</button>
        </a>
        
        
	</div>
</div>

<style>
	.has-mask {
		position: absolute;
		clip: rect(10px, 150px, 130px, 10px);
	}
</style>
@endsection
