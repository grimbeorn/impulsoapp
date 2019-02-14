<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    // READ
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index')->with(compact('documents')); 
    }

    // CREATE
    public function store(Request $request)
    {
        $messages=[
            'name.required'=>'Es necesario ingresar un nombre',
            'name.min'=>'El nombre debe contener al menos 3 caracteres',
            'life.required'=>'Es necesario ingresar una fecha de vigencia',
        ];
        $rules=[
            'name'=>'required|min:3',
            'life'=>'required'
        ];
        $this->validate($request, $rules, $messages);

        //dd($request->all());
        $document = new Document();
        $document->name = $request->input('name');
        $document->life = $request->input('life');
        $document->description = $request->input('description');
        $document->save();

        // return redirect('/admin/documents');
        return back();
    }

    // UPDATE
    public function update(Request $request)
    {
        $messages=[
            'name2.required'=>'Es necesario ingresar un nombre',
            'name2.min'=>'El nombre debe contener al menos 3 caracteres',
            'life2.required'=>'Es necesario ingresar una fecha de vigencia'
        ];
        $rules=[
            'name2'=>'required|min:3',
            'life2'=>'required'
        ];
        $this->validate($request, $rules, $messages);

        // dd($request->all());
        $document = Document::findOrFail($request->id2);
        $document->name = $request->input('name2');
        $document->life = $request->input('life2');
        $document->description = $request->input('description2');
        $document->save();
        return back();
    }

    // DELETE
    public function delete(Request $request)
    {
        // dd($request->all());
        $document = Document::findOrFail($request->id4);
        $document->delete();
        return back();
    }

}
