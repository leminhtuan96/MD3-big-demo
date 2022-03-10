<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{

    public function index()
    {
        $notes = DB::table("notes")->get();
        return view("note.list", compact("notes"));
    }


    public function create()
    {
        return view("note.create");
    }


    public function store(Request $request)
    {
        $note = $request->only("title","content","type_id");
        DB::table("notes")->insert($note);
        return redirect()->route("note.index");
    }


    public function show($id)
    {
        $note = DB::table("notes")->where("id",$id)->first();

        return view("note.detail",compact("note"));
    }


    public function edit($id)
    {
        $note = DB::table("notes")->where("id",$id)->first();
        return view("note.update", compact("note"));
    }


    public function update(Request $request, $id)
    {
        $data = $request ->only("title","content","type_id");
        DB::table("notes")->where("id",$id)->update($data);
        return redirect()->route("note.index");
    }


    public function destroy($id)
    {
        DB::table("notes")->where("id",$id)->delete();
        return redirect()->route("note.index");
    }
}
