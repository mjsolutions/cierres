<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Laracasts\Flash\Flash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;

use App\Http\Requests\CPRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::where('status',1)->orderBy('name','ASC')->paginate(10);
        return view('admin.usuarios.list')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {   
        $usuario = new User($request->all());
        $usuario->password = bcrypt($usuario->password);

        if($usuario->save()){
            Flash::overlay('Se ha registrado '.$usuario->nombre.' de forma exitosa.', 'Alta exitosa');
        }else{
            Flash::overlay('Ha ocurrido un error al registrar al usuario  '.$usuario->nombre." : ".$fail, 'Error');            
        }

        
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return json_encode($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.edit', compact('usuario'));
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

            $usuario = User::find($id);
            $usuario->fill($request->all());
            if ($usuario->save()) {
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
            Flash::overlay('Se ha actualizado '.$usuario->nombre.' de forma exitosa.', 'Modificación exitosa');
        }else{
            Flash::overlay('Ha ocurrido un error al actualizar al usuario  '.$usuario->nombre." : ".$fail, 'Error');            
        }
        
        return redirect()->route('admin.usuarios.index');
    }

    public function change_password(CPRequest $req){
        $usuario = User::find($req->id);
        $route = "";
        //Comprobrar que coincida contraseña de administrador
        if( Hash::check($req->password_admin, Auth::user()->password)){
            $usuario->password = bcrypt($req->password);
            if($usuario->save()){
                Flash::overlay('Cambio de contraseña exitoso', 'Exito');
            }else{
                Flash::overlay('A ocurrido un error, intentelo de nuevo mas tarde ', 'Error');
            }
            $route = "admin.usuarios.index";
        }else{
            Flash::overlay('Contraseña de administrador incorrecta', 'Error');
        }

        $route = "usuarios.index";

        if($req->id == Auth::user()->id){
            $route = "logout";
             //Flash::overlay('Cambio de contraseña exitoso, vuelve a iniciar sesión', 'Exito');
        }

        return redirect()->route($route);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->status = 0;
        if($usuario->save()) {
            Flash::overlay('Se ha eliminado ' . $usuario->nombre . ' de forma exitosa', 'Operación exitosa');
        } else {
            Flash::overlay('Ha ocurrido un erro al eliminar al usuario ' . $usuario->nombre, 'Error');
        }

        return redirect()->route('usuarios.index');
    }

    public function busqueda(Request $req){
        $data=$req->data;
        $data=explode(" ",trim($data));
        $usuarios = User::where(function($query) use ($data) {
            foreach ($data as $dato) {
                $query->where('users.name', 'like', '%'.$dato.'%')
                ->orwhere('users.last_name', 'like', '%'.$dato.'%')
                ->orwhere('users.second_name', 'like', '%'.$dato.'%')
                ->orwhere('users.id', 'like', '%'.$dato.'%')
                ->orwhere('users.email', 'like', '%'.$dato.'%');
            }
        })->orderBy('name', 'DESC')
        ->paginate(10);
        return view('admin.usuarios.list')->with('usuarios',$usuarios);
    }

}
