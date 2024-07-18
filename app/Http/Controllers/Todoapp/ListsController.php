<?php

namespace App\Http\Controllers\Todoapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tasks;

class ListsController extends Controller
{

    public function create()
    {
        return view("todoapp.lists.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "baslik" => "required|max:30",
            "gorev" => "required|max:255"
        ]);

        $taskInsert = tasks::insert([
            "tasks_title" => $request->baslik,
            "tasks_description" => $request->gorev
        ]);

        if($taskInsert):
            return redirect(route("home"))->with("success" , "Ekleme İşlemi  Başarılı");
        else:
            return back()->with("error" , "Ekleme İşlemi Başarısız");
        endif;
    }

    public function edit($id)
    {
        $taskEdit = tasks::where("id" , $id)->first();
        return view("todoapp.lists.edit")->with("taskEdit" , $taskEdit);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "baslik" => "required|max:30",
            "gorev" => "required|max:255"
        ]);

        $taskUpdate = tasks::where("id" , $id)->update([
            "tasks_title" => $request->baslik,
            "tasks_description" => $request->gorev
        ]);

        if($taskUpdate):
            return redirect(route('home'))->with("success" , "Düzenleme İşlemi Başarılı");
        else:
            return back()->with("error" , "Düzenleme İşlemi Başarısız");
        endif;
    }
    
    public function destroy($id)
    {
        $taskDelete = tasks::find($id);
        if($taskDelete->delete()):
            return back()->with("success" , "Silme İşlemi Başarılı");
        else:
            return back()->with("error" , "Silme İşlemi Başarısız");
        endif;
    }




}


