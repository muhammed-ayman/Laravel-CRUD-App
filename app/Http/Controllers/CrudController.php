<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function store() {
      $crud = new \App\Models\Crud();
      $crud->title = request('title');
      $crud->content = request('description');
      $crud->save();
      return redirect('/')->with('msg', 'Content Added Successfully');
    }
    public function destroy($id)
    {
      $crud = \App\Models\Crud::findOrFail($id);
      $crud->delete();
      return redirect('/')->with('msg', 'Content Deleted Successfully');
    }
    public function update($id)
    {
      $title = request('title');
      $desc = request('description');
      $crud = \App\Models\Crud::findOrFail($id);
      $crud->title = $title;
      $crud->content = $desc;
      $crud->save();
      return redirect('/')->with('msg', 'Content Updated Successfully');
    }
}
