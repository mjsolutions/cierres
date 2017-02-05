<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

use App\Http\Requests;

use App\Http\Requests\GalleryRequest;

use App\Http\Controllers\Controller;

use Laracasts\Flash\Flash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
public function index()
    {
        $galeria=Gallery::where('status',1)->orderBy('nombre','ASC')->paginate(10);
        return view('admin.galeria.list')->with('galeria',$galeria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {   
        $galeria = new Gallery();
        $galeria->nombre = $request->nombre;
        $galeria->tipo = $request->tipo;

        $path = $request->file('archivo')->store('archivos');
        $galeria->ruta = $path;
        // $galeria->ruta = "Prueba";
        

        if($galeria->save()){
            Flash::overlay('Se ha registrado el elemento -'.$galeria->nombre.'- de forma exitosa.', 'Alta exitosa');
        }else{
            Flash::overlay('Ha ocurrido un error al registrar el elemento -'.$galeria->nombre."- : ".$fail, 'Error');            
        }

        
        return redirect()->route('galeria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeria = Gallery::find($id);
        return json_encode($galeria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeria = Gallery::find($id);
        return view('admin.galeria.edit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = false;

        DB::beginTransaction();

        try {

            $galeria = Gallery::find($id);
            $galeria->fill($request->all());
            if ($galeria->save()) {
                $validate = true;
            }else{
                $validate = false;
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            $validate = false;
            $fail = $e;
            // throw $e;
        }

        if($validate) {
            Flash::overlay('Se ha actualizado '.$galeria->nombre.' de forma exitosa.', 'Modificación exitosa');
        }else{
            Flash::overlay('Ha ocurrido un error al actualizar la galeria  '.$galeria->nombre." : ".$fail, 'Error');            
        }
        
        return redirect()->route('admin.galeria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Gallery::find($id);
        $galeria->status = 0;
        if($galeria->save()) {
            Flash::overlay('Se ha eliminado ' . $galeria->nombre . ' de forma exitosa', 'Operación exitosa');
        } else {
            Flash::overlay('Ha ocurrido un erro al eliminar la galeria ' . $galeria->nombre, 'Error');
        }

        return redirect()->route('galeria.index');
    }

    public function busqueda(Request $req){
        $data=$req->data;
        $data=explode(" ",trim($data));
        $galeria = Gallery::where(function($query) use ($data) {
            foreach ($data as $dato) {
                $query->where('galeria.nombre', 'like', '%'.$dato.'%')
                ->orwhere('galeria.tipo', 'like', '%'.$dato.'%')
                ->orwhere('galeria.descripcion', 'like', '%'.$dato.'%');
            }
        })->orderBy('nombre', 'DESC')
        ->paginate(10);
        return view('admin.galeria.list')->with('galeria',$galeria);
    }
}
