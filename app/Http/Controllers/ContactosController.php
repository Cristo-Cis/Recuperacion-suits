<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Contactos;
use Illuminate\Http\Request;
use PSpell\Config;

class ContactosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function read()
    {
        //index generalmente se utiliza para mostrar la pagina principal
        $datos = contactos::all();
        return view("read", compact('datos'));
    }
    public function gallery()
    {
        return view("gallery");
    }

    public function create()
    {
        $categoria = categorias::all();
        return view("create", compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contactos = new Contactos();
        $contactos->nombre = $request->post('nombre');
        $contactos->telefono = $request->post('telefono');
        $contactos->categoria = $request->post('categoria');
        $contactos->save();

        return redirect()->route('crud.read')->with('success', 'Contacto agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contacto = Contactos::find($id);
        $categoria = categorias::all();
        return view('delete', compact('contacto', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $contacto = Contactos::find($id);
        $categoria = categorias::all();
        return view('update', compact('contacto', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contacto = Contactos::find($id);

        $contacto->nombre = $request->post('nombre');
        $contacto->telefono = $request->post('telefono');
        $contacto->categoria = $request->post('categoria');
        $contacto->save();

        return redirect()->route('crud.read')->with('success', 'Contacto actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacto = Contactos::find($id);
        $contacto->delete();

        return redirect()->route("crud.read")->with("success", "Eliminado con exito");
    }
    
    public function chartObtenerDatos() {
        
        $categoria = Categorias::all();
        $datos = [];
 
        foreach($categoria as $c){
         $count = Contactos::where('categoria', $c->categoria)->count();
         $datos[] = $count;        
        }
        return response()->json([
            'datos' => $datos,
            'labels' => $categoria->pluck('categoria')
           ]);
        
     }
    
}
