<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Escritor;
use App\Models\User;

//CREACIÓN DE LA CLASE ESCRITORCONTROLLER
class escritorController extends Controller
{
    //CREACIÓN DE LA FUNCIÓN INDEX
    
    public function index(){
        $escritores= Escritor::all();
        return view('admin.escritores.list_escritores',compact("escritores"));
    }
    //CREACIÓN DE LA FUNCIÓN CREATE

    public function create(){
        $escritor= new Escritor;
        $user= new User;
        $title= __("Alta escritor");
        $textButton=__("Añadir");
        $route= route("admin.escritores.store");
        return view("admin.escritores.create", compact("title", "textButton", "route","escritor","user"));
    }

    //CREACIÓN DE LA FUNCIÓN STORE

    public function store(Request $request){
        $this->validate($request,[
            "nombre"=>"required",
            "apellidos"=>"required",
            "direccion"=>"required",
            "name"=>"required",
            "email"=>"required|string|email|max:255",
            "password"=>"required|string|min:8"

        ]);

        $user= User::create($request->only("name","email","password"))->assignRole('escritor');
        $user->escritor()->create($request->only("nombre","apellidos","direccion"));

        return redirect(route("admin.escritores.index"))
        ->width("success",__("Escritor dado de alta correctamente"));
    }
    


        //CREACIÓN DE LA FUNCIÓN SHOW
        public function show($id){

        }

        //CREACIÓN DE LA FUNCIÓN EDIT
        public function edit(Escritor $escritor, User $user){
            $update=true;
            $title=__("Editar Escritor");
            $textButton=__("Actualizar");
            $route= route("admin.escritores.update",["escritor"=>$escritor,"user"=>$user]);
            return view("admin.escritores.edit", compact("update","title","textButton","route","escritor","user"));

        }

        //CREACIÓN DE LA FUNCIÓN UPDATE
        public function update(Request $request, Escritor $escritor, User $user){

            $this->validate($request,[
            "nombre"=>"required",
            "apellidos"=>"required",
            "direccion"=>"required",
            "name"=>"required",
            "email"=>"required|string|email|max:255",
            "password"=>"required|string|min:8",
            ]);
            $user->fill($request->only("name","email"))->save();
            $escritor->fill($request->only("nombre","apellidos","direccion"))->save();
            return redirect(route("admin.escritores.index"))
            ->width("success",__("Escritor actualizado!"));

        }

        //CREACIÓN DE LA FUNCIÓN DESTROY
        public function destroy(Escritor $escritor){
            $escritor->delete();
            return back()->width("success",__("Escritor dado de baja correctamente"));
        }



        }

    














