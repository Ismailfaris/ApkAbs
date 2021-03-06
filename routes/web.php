<?php

use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\linkedin_token_controller;
use App\Http\Controllers\linkedin_account_controller;
use App\Http\Controllers\linkedin_posts_controller;
use App\Http\Controllers\logosController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\subscriptionController;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Stripe\Plan;
use Laravel\Cashier\Cashier;

require __DIR__ . '/auth.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__ . '/auth.php';
/* --------------- CLIENT ZONE HERE !!! --------------- */

Route::get('/', function () {
    return view('index');
});
Route::get('/acceuil', function () {
    return view('index');
});

Route::get('services', [PlanController::class, 'index_services'])->name('services');


Route::get('about', function () {
    return view('services');
});

Route::get('/contact', [ContactUsFormController::class, 'createForm']);


Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



Route::get('/partenaires', function () {
    return view('portfolio');
});

Route::get('/News-details', function () {
    return view('News-details');
});

Route::get('/News-details/{id}', [NewsController::class, 'shownews'])->name('News-details');

/********************************************************* */
Route::get('/BERD-details', function () {
    return view('portfolio-details.BERD-details');
});
Route::get('/CAISE-CENTRAL-details', function () {
    return view('portfolio-details.CAISE-CENTRAL-details');
});
Route::get('/GIAC-details', function () {
    return view('portfolio-details.GIAC-details');
});
Route::get('/IDMAJ-details', function () {
    return view('portfolio-details.IDMAJ-details');
});
Route::get('/MCE-details', function () {
    return view('portfolio-details.MCE-details');
});
Route::get('/MCE-EXPORT-details', function () {
    return view('portfolio-details.MCE-EXPORT-details');
});
Route::get('/MOUKAWLATI-details', function () {
    return view('portfolio-details.MOUKAWLATI-details');
});
Route::get('/OFPPT-details', function () {
    return view('portfolio-details.OFPPT-details');
});
Route::get('/TAEHIL-details', function () {
    return view('portfolio-details.TAEHIL-details');
});
Route::get('/IMTIAZ-details', function () {
    return view('portfolio-details.IMTIAZ-details');
});
Route::get('/ISTITMAR-details', function () {
    return view('portfolio-details.ISTITMAR-details');
});
Route::get('/PRESTATIONS-details', function () {
    return view('portfolio-details.PRESTATIONS-details');
});
/*********************************************************** */

Route::get('/Actualit??s', function () {
    return view('Actualit??s');
});
Route::get('/Actualit??s', [NewsController::class, 'showActualit??s']);


Route::get('/Calendrier', function () {
    return view('Calendrier');
});

Route::get('/locaux', function () {
    return view('locaux');
});

Route::get('/r??f??rences', [logosController::class, 'showref']);


Route::get('/dashboard/home', function () {
    return view('dashboard/dashhome');
})->middleware(['auth', 'role'])->name('dashboard/dashhome');


Route::get('blog-single/{id}', [NewsController::class, 'showBlogsingle']);


/* --------------- DASHBOARD ZONE HERE !!! --------------- */


/* --------------- ISMAIL ZONE --------------- */

/* >>>>>> DASH-ABS <<<<<< */

Route::get('/dashboard/dashhome', function () {
    return view('dashboard/dashhome');
})->middleware(['auth', 'role'])->name('dashboard/dashhome');


/* ooo Actualit??s ooo */

Route::view('dashboard/dashnews', 'dashboard/dashnews')->middleware(['auth', 'role']);
Route::post('dashboard/dashnews', [NewsController::class, 'adddata'])->middleware(['auth', 'role']);
Route::get('/dashboard/dashnewsmodify', function () {
    return view('/dashboard/dashnewsmodify');
})->middleware(['auth', 'role']);
Route::get('/dashboard/dashnewsmodify', [NewsController::class, 'show'])->middleware(['auth', 'role']);
Route::get('dashboard/dashnewsmodify/delete/{id}', [NewsController::class, 'delete'])->middleware(['auth', 'role']);
Route::view('dashboard/dashmodifybyid', 'dashboard/dashmodifybyid')->middleware(['auth', 'role']);
Route::get('/dashboard/dashmodifybyid/edit/{id}', [NewsController::class, 'showedit'])->middleware(['auth', 'role'])->name('dashboard/dashhome');
Route::post('/dashboard/dashmodifybyid/edit', [NewsController::class, 'update']);

/* ooo Logos ooo */
Route::get('/dashboard/dashlogos-add', [logosController::class, 'create'])->middleware(['auth'])->name('dashboard/dashlogos-add');
Route::post('dashboard/dashlogos-add', [logosController::class, 'addlogo'])->middleware(['auth', 'role']);


Route::get('/dashboard/dashlogos-modify', function () {
    return view('dashboard/dashlogos-modify');
})->middleware(['auth', 'role'])->name('dashboard/dashlogos-modify');

Route::get('/dashboard/dashlogos-modify', [logosController::class, 'searchlogo'])->middleware(['auth', 'role']);

Route::get('dashboard/delete/{id}', [logosController::class, 'logodelete'])->middleware(['auth', 'role']);
Route::view('dashboard/dashlogos-modifybyid', 'dashboard/dashlogos-modifybyid')->middleware(['auth', 'role']);
Route::get('/dashboard/dashlogos-modifybyid/edit/{id}', [logosController::class, 'showedit'])->middleware(['auth', 'role'])->name('dashboard/dashhome');
Route::post('/dashboard/dashlogos-modifybyid/edit/{id}', [logosController::class, 'logoshowedit'])->middleware(['auth', 'role']);/**/

/* --------------- MOUAD ZONE --------------- */

/* >>>>>> SOCIAL-MEDIA <<<<<< */
// Linkedin 
/*
*   Account
*/
Route::get('/dashboard/social-media/linkedin', [linkedin_account_controller::class, 'index'])->middleware(['auth', 'role']);
Route::get('/dashboard/social-media/linkedin/get-teken', [linkedin_token_controller::class, 'create'])->middleware(['auth', 'role']);
Route::get('/dashboard/social-media/linkedin/account/add/{id}', [linkedin_account_controller::class, 'create'])->middleware(['auth', 'role']);
Route::get('/dashboard/social-media/linkedin/account/clear', [linkedin_account_controller::class, 'logout'])->middleware(['auth', 'role']);
Route::delete('/social-media/linkedin/account/delete/{id}', [linkedin_token_controller::class, 'destroy'])->middleware(['auth', 'role']);
/*
*   Posts
*/
Route::get('dashboard/social-media/linkedin/posts', [linkedin_posts_controller::class, 'index'])->middleware(['auth', 'role']);
Route::get('dashboard/social-media/linkedin/post/add', [linkedin_posts_controller::class, 'create'])->middleware(['auth', 'role']);
Route::post('dashboard/social-media/linkedin/post/add', [linkedin_posts_controller::class, 'store'])->middleware(['auth', 'role']);
Route::delete('dashboard/social-media/linkedin/posts/delete/{id}', [linkedin_posts_controller::class, 'destroy'])->middleware(['auth', 'role']);
//This rout is just for testing purpose, delete it later if I forget to do that :)
Route::get('dashboard/social-media/linkedin/posts/delete', [linkedin_posts_controller::class, 'custom_share_delete'])->middleware(['auth', 'role']);
Route::get('/test', [linkedin_posts_controller::class, 'test'])->middleware(['auth', 'role']);
//Routes for create Plan

Route::group(['middleware' => ['auth', 'role']], function () {
    Route::get('create/plan', 'SubscriptionController@createPlan')->name('create.plan');
    Route::post('store/plan', [subscriptionController::class, 'storePlan'])->name('store.plan');

    Route::get('dashboard/plans', [PlanController::class, 'index']);
    Route::get('dashboard/plans/create', function () {
        return view('plans.add');
    });
    Route::get('plans/show/{id}', [PlanController::class, 'show'])->name('plans.show');
    Route::post('/subscription', [subscriptionController::class, 'create'])->name('subscription.create');
    Route::get('dashboard/clients', function () {
        $users = User::all();
        // $user = $users[0];
        // dd( $user->subscriptions()->first());

        return view('clients.index', compact('users'));
    });
});
