<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Linkedin_token;
use App\Models\Linkedin_account;
use Illuminate\Support\Facades\Http;
class linkedin_account_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all registred accounts 
        $accounts = Linkedin_account::all();
        return view('social-media.linkedin.accounts.index')->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //return "Account will be added from here";
        $token = Linkedin_token::find($id);
        $account = new Linkedin_account;
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token->access_token
        ])->get('https://api.linkedin.com/v2/me');
        $response = (array) json_decode($response->body());
        if(isset($response['error'])){
            return view('error', ['response', $response]);
        }
        else{
            $account->first_name = $response['localizedFirstName'];
            $account->last_name = $response['localizedLastName'];
            $account->URN = $response['id'];
            $account->token_id = $token->id;
            $account->save();
            
            return view('social-media.linkedin.accounts.logout');
        }

        
    }
    public function logout()
    { 
        return view('social-media.linkedin.accounts.logout');      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
