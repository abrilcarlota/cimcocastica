<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class libroController extends Controller
{
    
    //CREACIÓN DE LA FUNCIÓN INDEX
    
    public function index(){
        $libros= Libro::all();
        return view('admin.libros.list_generos',compact("libros"));
    }
    //CREACIÓN DE LA FUNCIÓN CREATE

    public function create(){
        $libro= new Libro;
        $title= __("Alta libro");
        $textButton=__("Añadir");
        $route= route("admin.libros.store");
        return view("admin.libros.create", compact("title", "textButton", "route","libro"));
    }

    //CREACIÓN DE LA FUNCIÓN STORE

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required",
            "descripcion"=>"required",
            "idescritor"=>"required",
            "idgenero"=>"required",
         

        ]);


        return redirect(route("admin.libros.index"))
        ->width("success",__("Libro dado de alta correctamente"));
    }
    


        //CREACIÓN DE LA FUNCIÓN SHOW
        public function show($id){

        }

        //CREACIÓN DE LA FUNCIÓN EDIT
        public function edit(Libro $libro){
            $update=true;
            $title=__("Editar Libro");
            $textButton=__("Actualizar");
            $route= route("admin.libros.update",["libro"=>$libro]);
            return view("admin.libros.edit", compact("update","title","textButton","route","libro"));

        }

        //CREACIÓN DE LA FUNCIÓN UPDATE
        public function update(Request $request, Libro $libro){

            $this->validate($request,[
            "name"=>"required",
            "descripcion"=>"required",
            "idgenero"=>"required",
            ]);
            $libro->fill($request->only("name"))->save();
            return redirect(route("admin.libros.index"))
            ->width("success",__("Libro actualizado!"));

        }

        //CREACIÓN DE LA FUNCIÓN DESTROY
        public function destroy(Libro $libro){
            $libro->delete();
            return back()->width("success",__("Libro dado de baja correctamente"));
        }



        }

