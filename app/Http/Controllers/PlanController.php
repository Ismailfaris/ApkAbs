<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }


    public function index_services()

    {

        $plans = Plan::all();
        return view('services', compact('plans'));
    }
    /**
     * Show the Plan.
     *
     * @return mixed
     */
    public function show(int $id, Request $request)
    {
        $plan = Plan::findOrFail($id);
        // $paymentMethods = \Auth::user()->paymentMethods();

        $intent = \Auth::user()->createSetupIntent();

        return view('plans.show', compact('plan', 'intent'));
    }
}
