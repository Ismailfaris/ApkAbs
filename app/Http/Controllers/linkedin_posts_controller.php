<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Linkedin_post;
use App\Models\Linkedin_token;
use App\Models\Linkedin_account;
use Illuminate\Support\Facades\Http;

class linkedin_posts_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Linkedin_post::where('account_id',Linkedin_account::first()->id )->get();
        return view('social-media.linkedin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social-media.linkedin.posts.add');
    }


    public function get_response_info(Object $resp)
    {
        if(isset($resp["value"]))
        {
            $resp = (array) json_decode($resp);
            $um = (array) $resp["value"]->uploadMechanism;
            $asset = $a["value"]->asset;
            $uploadUrl = $um["com.linkedin.digitalmedia.uploading.MediaUploadHttpRequest"]->uploadUrl;
            $arr = [
                'imgUrn' => $asset,
                'uploadUrl' => $uploadUrl
            ];
            return $arr;
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
        $response = "";
        $accounts = Linkedin_account::all();
        $post_group = Linkedin_post::orderBy('created_at', 'desc')->first();
        $post_group = ($post_group)?$post_group->post_group + 1:1;
        if($request->rb_post == "text")
        {
            foreach($accounts as $account)
            {
                $token = Linkedin_token::find($account->token_id)->access_token;
                $body = 
                        '{
                            "author": "urn:li:person:'.$account->URN.'",
                            "lifecycleState": "PUBLISHED",
                            "specificContent": {
                                "com.linkedin.ugc.ShareContent": {
                                    "shareCommentary": {
                                        "text": "'.$request->txt_text.'"
                                    },
                                    "shareMediaCategory": "NONE"
                                }
                            },
                            "visibility": {
                                "com.linkedin.ugc.MemberNetworkVisibility": "'.$request->visibility.'"
                            }
                        }';
                $response = Http::withToken($token)
                            ->withBody($body, 'text/plain')
                            ->post('https://api.linkedin.com/v2/ugcPosts');
                $response = (array) json_decode($response->body());
                if(isset($response['id']))
                {
                    $post = new Linkedin_post;
                    $post->share_id = $response['id'];
                    $post->share_text = $request->txt_text;
                    $post->share_visibility = $request->visibility;
                    $post->account_id = $account->id;
                    $post->post_group = $post_group;
                    $post->save();
                }
                else
                {
                    /**
                     * >>> Erros To be handled Later 
                     **/
                    //var_dump($response);
                    foreach($response as $key => $val)
                    {
                        if($key == 'message')
                        {
                            return redirect('dashboard/social-media/linkedin/post/add')->with('fail', $val);
                        }
                    }
                }
            }
        }
        else if ($request->rb_post == "article")
        {
            foreach($accounts as $account)
            {
                $token = Linkedin_token::find($account->token_id)->access_token;
                $body = 
                        '{
                            "author": "urn:li:person:'.$account->URN.'",
                            "lifecycleState": "PUBLISHED",
                            "specificContent": {
                                "com.linkedin.ugc.ShareContent": {
                                    "shareCommentary": {
                                        "text": "'.$request->commentary.'"
                                    },
                                    "shareMediaCategory": "ARTICLE",
                                    "media": [
                                        {
                                            "status": "READY",
                                            "description": {
                                                "text": "'.$request->description.'"
                                            },
                                            "originalUrl": "'.$request->link.'",
                                            "title": {
                                                "text": "'.$request->text.'"
                                            }
                                        }
                                    ]
                                }
                            },
                            "visibility": {
                                "com.linkedin.ugc.MemberNetworkVisibility": "'.$request->visibility.'"
                            }
                        }';
                $response = Http::withToken($token)
                            ->withBody($body, 'text/plain')
                            ->post('https://api.linkedin.com/v2/ugcPosts');
                $response = (array) json_decode($response->body());
                if(isset($response['id']))
                {
                    $post = new Linkedin_post;
                    $post->share_id = $response['id'];
                    $post->share_text = $request->text;
                    $post->share_visibility = $request->visibility;
                    $post->account_id = $account->id;
                    $post->post_group = $post_group;
                    $post->save();
                }
                else
                {
                    /**
                     * >>> Erros To be handled Later 
                     **/
                    //var_dump($response);
                    foreach($response as $key => $val)
                    {
                        if($key == 'message')
                        {
                            return redirect('dashboard/social-media/linkedin/post/add')->with('fail', $val);
                        }
                    }
                }
            }
        }
        /*else if ($request->rb_post == "image")
        {
            foreach($accounts as $account)
            {
                $token = Linkedin_token::find($account->token_id)->access_token;
                
                $body1 = 
                '
                {
                    "registerUploadRequest": {
                        "recipes": [
                            "urn:li:digitalmediaRecipe:feedshare-image"
                        ],
                        "owner": "urn:li:person:'.$account->URN.'",
                        "serviceRelationships": [
                            {
                                "relationshipType": "OWNER",
                                "identifier": "urn:li:userGeneratedContent"
                            }
                        ]
                    }
                }';
                $response1 = Http::withToken($token)
                            ->withBody($body1, 'text/plain')
                            ->post('https://api.linkedin.com/v2/assets?action=registerUpload');
                //dd($response1->body());

                $response1 = (array) json_decode($response1->body());
                $um = (array) $response1["value"]->uploadMechanism;
                $asset = $response1["value"]->asset;
                $uploadUrl = $um["com.linkedin.digitalmedia.uploading.MediaUploadHttpRequest"]->uploadUrl;
                $info = [
                    'imgUrn' => $asset,
                    'uploadUrl' => $uploadUrl
                ];

                
                $filePath = $request->path;
                

                
                $post = Http::withBody($filePath, 'image/jpeg')
                        ->withToken($token)
                        ->post($info["uploadUrl"]);
                dd($info);
                $body = 
                '{
                    "author": "urn:li:person:'.$account->URN.'",
                    "lifecycleState": "PUBLISHED",
                    "specificContent": {
                        "com.linkedin.ugc.ShareContent": {
                            "shareCommentary": {
                                "text": "'.$request->img_commentary.'"
                            },
                            "shareMediaCategory": "IMAGE",
                            "media": [
                                {
                                    "status": "READY",
                                    "description": {
                                        "text": "'.$request->img_description.'"
                                    },
                                    "media": "'.$info["imgUrn"].'",
                                    "title": {
                                        "text": "'.$request->img_text.'"
                                    }
                                }
                            ]
                        }
                    },
                    "visibility": {
                        "com.linkedin.ugc.MemberNetworkVisibility": "'.$request->visibility.'"
                    }
                }';
                $response = Http::withToken($token)
                            ->withBody($body, 'text/plain')
                            ->post('https://api.linkedin.com/v2/ugcPosts');
                $response = (array) json_decode($response->body());
                
                if(isset($response['id']))
                {
                    $post = new Linkedin_post;
                    $post->share_id = $response['id'];
                    $post->share_text = $request->img_text;
                    $post->image_asset = $info["imgUrn"];
                    $post->share_visibility = $request->visibility;
                    $post->account_id = $account->id;
                    $post->post_group = $post_group;
                    $post->save();
                }
                else
                {
                    //Erros To be handled Later 
                    //var_dump($response);
                    foreach($response as $key => $val)
                    {
                        if($key == 'message')
                        {
                            return redirect('dashboard/social-media/linkedin/post/add')->with('fail', $val);
                        }
                    }
                }
            }
        }*/
        else
        {
            //Add a 404 not found error page redirection
        }
        
        

        return redirect('dashboard/social-media/linkedin/posts')->with('success', 'Post ajouter avec succees');    
        
        
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linkedin_post  $Linkedin_post
     * @return \Illuminate\Http\Response
     */
    public function show(Linkedin_post $Linkedin_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linkedin_post  $Linkedin_post
     * @return \Illuminate\Http\Response
     */
    public function edit(Linkedin_post $Linkedin_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linkedin_post  $Linkedin_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linkedin_post $Linkedin_post)
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
        //$post_to_delete = Linkedin_post::find($id);
        $posts = Linkedin_post::where('post_group', $id)->get();
        foreach($posts as $post)
        {
            $share_id = str_getcsv($post->share_id, ":")[3];
            $token = (Linkedin_token::find((Linkedin_account::find($post->account_id))->token_id))->access_token;
            Http::withToken($token)
                    ->delete('https://api.linkedin.com/v2/shares/'.$share_id);
            $post->delete();
        }
        
        return redirect('dashboard/social-media/linkedin/posts')->with('success', 'Post supprimer avec succees');
    }
    public function custom_share_delete()
    {
        $share_id = "6824877700214267904";
        $token = "AQUWj9wkDt9DAk1zU8CQyC3wM4Xo7TKBrx0Z9xeDYTn7sSbFNvGucNeigW54eHM2th9kbag-4YyJho6DeaFz9ErVXKkg_LmTOV9pvGDZxZx2FOWVGX0CeS2fdHnZyI3YALtzCxKqydpzA3AV-taZbuKp0n-xPYIFWVadgzgj9uQiA6FbDcUKg7QwUed02vXOJBfps5ax4_0Y4MqQMOSFXJgIde4eNyKze6DGNB-2oY8hD_bUE2z5JTZLHBB8Tl_-OypLp-n1lMIEn92pecEKiUebxA_Q8cYa9vlVH4uOzkTnNmQfWuZ7fLZZEOyTfwvzWPVHh1a1DG4BYaI2qVvt5eSy67Aeag";
        $resp = Http::withToken($token)
                ->delete('https://api.linkedin.com/v2/shares/'.$share_id);
        
        var_dump($resp->body());
    }

    
}
