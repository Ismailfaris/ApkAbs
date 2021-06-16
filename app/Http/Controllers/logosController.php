<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class logosController extends Controller
{
    //
    function create()
    {
        $count = logo::count();
        return view('/dashboard/dashlogos-add',['count'=>$count]);
    }
    function addlogo(Request $req)
    {
        $logo = new logo();
        $count = $logo::count();
        $req->file('logo')->storeAs('public', $req->file('logo')->getClientOriginalName());
        $logo->logo = $req->file('logo')->getClientOriginalName();
        $logo->order = logo::count() + 1;
        $logo->save();
        session()->flash("success", "Ajouté avec succès");
        return view('dashboard/dashlogos-add',['count'=>$count]);
    }
    function showLogos()
    {
        $logo = logo::orderBy('order', 'ASC')->get();
        return view('dashboard/dashlogos-modify', ['logos' => $logo]);
    }
    function showref()
    {
        $logo = logo::orderBy('order', 'ASC')->get();
        return view('références', ['logos' => $logo]);
    }
    function logodelete($id)
    {
        $logo = logo::find($id);
        $logo->delete();
        return redirect('/dashboard/dashlogos-modify');
    }
    function showedit($id)
    {
        $logo = logo::find($id);
        $count = $logo::count();
        return view('/dashboard/dashlogos-modifybyid', ['logo' => $logo,'count'=>$count]);
    }

    function logoshowedit(Request $req, $id)
    {
        $logoToUpdate = logo::find($id);
        $selectedlogo = logo::where('order', $req->order)->first();
        if($selectedlogo)
        {
            $selectedlogo->order = $logoToUpdate->order;
            $selectedlogo->save();
        }
        $logoToUpdate->order = $req->order;
        if ($req->file('logo') == null) {
            $logoToUpdate->logo = $req->oldlogo;
        } else {
            $req->file('logo')->storeAs('public', $req->file('logo')->getClientOriginalName());
            $logoToUpdate->logo = $req->file('logo')->getClientOriginalName();
        }
        $logoToUpdate->save();
        return redirect('dashboard/dashlogos-modify');
    }
    function searchlogo(Request $request)
    {
        $search = $request->search;
        $refs = logo::query()
        ->where('logo', 'LIKE', "%{$search}%")->orWhere('order', 'LIKE', "%{$search}%")->orderBy('order', 'ASC')->get();

        return view('dashboard/dashlogos-modify',compact('refs'));
    }

}
