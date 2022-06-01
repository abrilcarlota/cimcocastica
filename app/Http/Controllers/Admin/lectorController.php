<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lector;
use App\Models\User;

class lectorController extends Controller
{

    //CREACIÓN DE LA FUNCIÓN INDEX
    
    public function index(){
        $lectores= Lector::all();
        return view('admin.lectores.list_lectores',compact("lectores"));
    }
    //CREACIÓN DE LA FUNCIÓN CREATE

    public function create(){
        $lector= new Lector;
        $user= new User;
        $title= __("Alta lector");
        $textButton=__("Añadir");
        $route= route("admin.lectores.store");
        return view("admin.lectores.create", compact("title", "textButton", "route","lector","user"));
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

        $user= User::create($request->only("name","email","password"))->assignRole('lector');
        $user->lector()->create($request->only("nombre","apellidos","direccion"));

        return redirect(route("admin.lectores.index"))
        ->with("success",__("Lector dado de alta correctamente"));
    }
    


        //CREACIÓN DE LA FUNCIÓN SHOW
        public function show($id){

        }

        //CREACIÓN DE LA FUNCIÓN EDIT
        public function edit(Lector $lectore,User $user){
            $update=true;
            $title=__("Editar Lector");
            $textButton=__("Actualizar");
            $route= route("admin.lectores.update",["lectore"=>$lectore,"user"=>$user]);
            return view("admin.lectores.edit", compact("update","title","textButton","route","lectore","user"));

        }

        //CREACIÓN DE LA FUNCIÓN UPDATE
        public function update(Request $request, Lector $lectore, User $user){

            $this->validate($request,[
            "nombre"=>"required",
            "apellidos"=>"required",
            "direccion"=>"required",
            "name"=>"required",
            "email"=>"required|string|email|max:255",
            "password"=>"required|string|min:8",
            ]);
            $lectore->fill($request->only("nombre"))->save();
            return redirect(route("admin.lectores.index"))
            ->with("success",__("Lector actualizado!"));

        }

        //CREACIÓN DE LA FUNCIÓN DESTROY
        public function destroy(Lector $lector){
            $lector->delete();
            return back()->width("success",__("Lector dado de baja correctamente"));
        }



        }


