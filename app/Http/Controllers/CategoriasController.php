<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function readCategoria(){
        $datos = categorias::all();
        return view("readCategoria", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCategoria()
    {
        return view("createCategoria");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategoria(Request $request)
    {
        $categorias = new Categorias();
        $categorias->categoria = $request->post('categoria');
        $categorias->save();

        return redirect()->route("crud.readCategoria")->with("success", "Agregado con exito");
    }

    /**
     * Display the specified resource.
     */
    public function showCategoria($id)
    {
        $categoria = Categorias::find($id);
        return view('deleteCategoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCategoria($id)
    {
        $categoria = Categorias::find($id);
        return view('updateCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategoria(Request $request, $id)
    {
        $categoria = Categorias::find($id);
        $categoria->categoria = $request->post('categoria');
        $categoria->save();

        return redirect()->route("crud.readCategoria")->with("success", "Actualizado con exito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategoria($id)
    {
        $categoria = Categorias::find($id);
        $categoria->delete();

        return redirect()->route("crud.readCategoria")->with("success", "Eliminado con exito");
    }
}
