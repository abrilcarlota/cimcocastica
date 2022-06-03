<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genero;

 //CREACIÓN DE LA CLASE GENEROCONTROLLER
class generoController extends Controller
{

    //CREACIÓN DE LA FUNCIÓN INDEX
    
    public function index(){
        $generos= Genero::all();
        return view('admin.generos.list_generos',compact("generos"));
    }
    //CREACIÓN DE LA FUNCIÓN CREATE

    public function create(){
        $genero= new Genero;
        $title= __("Alta genero");
        $textButton=__("Añadir");
        $route= route("admin.generos.store");
        return view("admin.generos.create", compact("title", "textButton", "route","genero"));
    }

    //CREACIÓN DE LA FUNCIÓN STORE

    public function store(Request $request){
        $this->validate($request,[
            "nombre"=>"required",
         

        ]);


        return redirect(route("admin.generos.index"))
        ->with("success",__("Género dado de alta correctamente"));
    }
    


        //CREACIÓN DE LA FUNCIÓN SHOW
        public function show($id){

        }

        //CREACIÓN DE LA FUNCIÓN EDIT
        public function edit(Genero $genero){
            $update=true;
            $title=__("Editar Género");
            $textButton=__("Actualizar");
            $route= route("admin.generos.update",["genero"=>$genero]);
            return view("admin.generos.edit", compact("update","title","textButton","route","genero"));

        }

        //CREACIÓN DE LA FUNCIÓN UPDATE
        public function update(Request $request, Genero $genero){

            $this->validate($request,[
            "nombre"=>"required",
            ]);
            $genero->fill($request->only("nombre"))->save();
            return redirect(route("admin.generos.index"))
            ->with("success",__("Género actualizado!"));

        }

        //CREACIÓN DE LA FUNCIÓN DESTROY
        public function destroy(Genero $genero){
            $genero->delete();
            return back()->with("success",__("Género dado de baja correctamente"));
        }



        }

    

