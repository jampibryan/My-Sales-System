<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducto $request)
    {
        // $request->validate([
        //     'codigo'=> 'required',
        //     'nombre'=> 'required',
        //     'descripcion'=> 'required',
        //     'precio'=> 'required',
        // ]);

        // $producto = new Producto();

        // $producto->codigo = $request->codigo;
        // $producto->nombre = $request->nombre;
        // $producto->descripcion = $request->descripcion;
        // $producto->precio = $request->precio;

        // $producto->save();
        
        /* ASIGNACIÓN MASIVA*/
        // $producto = Producto::create([
        //     'codigo' => $request->codigo,
        //     'nombre' => $request->nombre,
        //     'descripcion' => $request->descripcion,
        //     'precio' => $request->precio,
        // ]);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $producto = Producto::find($id);

        // return view ('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view ('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProducto $request, Producto $producto)
    {
        $producto->update($request->all());
        
        return redirect()->route('productos.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
