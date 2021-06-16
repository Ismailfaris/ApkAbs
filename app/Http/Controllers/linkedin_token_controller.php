<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Linkedin_token;
use Illuminate\Support\Facades\Http;

class linkedin_token_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return "Token Will be Generated from here";
        if(isset($request->query()['code']))
        {
            $token = new Linkedin_token;
            $response = Http::asForm()->post('https://www.linkedin.com/oauth/v2/accessToken', [
                'grant_type'    => 'authorization_code',
                'code'          => $request->query()['code'],
                'redirect_uri'  => env('REDIRECT_LINKEDIN_URI'),
                'client_id'     => env('CLIENT_ID'),
                'client_secret' => env('CLIENT_SECRET')
            ]);
            $response = (array) json_decode($response->body());
            if(isset($response['error'])){
                return view('error', ['response', $response]);
            }
            else
            {
                //$accessToken = $response["access_token"];
                //session(['access_token'=>$accessToken]);
                $token->access_token             = $response["access_token"];
                $token->expires_in               = $response["expires_in"];
                $token->refresh_token            = $response["refresh_token"];
                $token->refresh_token_expires_in = $response["refresh_token_expires_in"];
                $token->save();
                $token = Linkedin_token::where('access_token', $response["access_token"])->first();
                return redirect('/dashboard/social-media/linkedin/account/add/'.$token->id);
            }
        }
        else if(isset($request->query()['error']))
        {
            return view('social-media.linkedin.accounts.errors.login-error')->with([
                'error' => "! ".$request->query()['error_description']
            ]);
        }

        
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
        //
        $token = Linkedin_token::find($id);
        $token->delete();
        return redirect('/dashboard/social-media/linkedin');
    }
}
