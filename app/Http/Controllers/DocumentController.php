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
