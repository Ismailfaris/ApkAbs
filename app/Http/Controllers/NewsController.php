<?php

namespace App\Http\Controllers;

use App\Models\actualite;
use App\Models\logo;
use App\Models\logos;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Create Contact Form
    public function vieww()
    {
        return view('dashboard/dashnews');
    }
    //
    function adddata(Request $req)
    {

        $actualite = new actualite;
        $actualite->titre = $req->titre;
        $req->file('image')->storeAs('public', $req->file('image')->getClientOriginalName());
        $actualite->image = $req->file('image')->getClientOriginalName();
        $actualite->description = $req->description;
        $actualite->save();
        return view('dashboard/dashnews');
    }
    function showActualités()
    {
        $data = actualite::orderBy('id', 'DESC')->get();
        return view('/Actualités', ['actualites' => $data]);
    }

    function showBlogsingle($id)
    {
        $actualite = actualite::find($id);
        return view('/blog-single', ['actualite' => $actualite]);
    }
    function show()
    {
        $data = actualite::orderBy('id', 'DESC')->get();
        return view('dashboard/dashnewsmodify', ['actualites' => $data]);
    }
    
    function delete($id)
    {
        $actualite = actualite::find($id);
        $actualite->delete();
        return redirect('/dashboard/dashnewsmodify');
    }
    function showedit($id)
    {
        $actualite = actualite::find($id);
        return view('/dashboard/dashmodifybyid', ['actualite' => $actualite]);
    }
    function shownews($id)
    {
        $actualite = actualite::find($id);
        return view('/News-details', ['actualite' => $actualite]);
    }
    function update(Request $req)
    {
        $actualite = actualite::find($req->id);
        $actualite->titre = $req->titre;
        if ($req->file('image') == null) {
            $actualite->image = $req->oldimage;
        } else {
            $req->file('image')->storeAs('public', $req->file('image')->getClientOriginalName());
            $actualite->image = $req->file('image')->getClientOriginalName();
        }

        $actualite->description = $req->description;
        $actualite->save();
        return redirect('dashboard/dashnewsmodify');
    }
    
}