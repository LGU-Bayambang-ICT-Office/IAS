<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Audit_Plan;
use App\Models\Audit_Clause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class AuditPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('plans.create', );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd($request);

        $plan = $this->validate($request, [

            'audit_type' => 'required',
            'audit_objective' => 'required',
            'audit_criteria' => 'required',
            'audit_resources' => 'required',
            'audit_risks' => 'required',
            'audit_scope' => 'required',
            'audit_date_from' => 'required',
            'audit_date_to' => 'required',
            'audit_qmr' => 'required',

        ]);

        $validated_data = [
            'audit_type' => $plan['audit_type'],
            'audit_objective' => $plan['audit_objective'],
            'audit_criteria' => $plan['audit_criteria'],
            'audit_resources' => $plan['audit_resources'],
            'audit_risks' => $plan['audit_risks'],
            'audit_scope' => $plan['audit_scope'],
            'audit_date_from' => $plan['audit_date_from'],
            'audit_date_to' => $plan['audit_date_to'],
            'audit_qmr' => $plan['audit_qmr'],

        ];

        
        $request->user()->audit_plans()->create($validated_data);
        Toastr::success('Plan Successfully Submitter', 'Plan Status');
        return view('plans.create',);
    }
   
    /**
     * Display the specified resource.
     */
    public function show(Audit_Plan $audit_Plan)
    {
        //list of plan

        $audit_Plan = Audit_Plan::all();

        return view('plans.list', compact('audit_Plan') );
    }

    /**
     * Display the specified resource.
     */

    public function selected_plan($id)
    {
        //assigning of auditors on the selected plan

        $record = DB::table('audit__plans')->where('id', $id)->get();
        $clauses = Audit_Clause::all();

        return view('plans.assign', ['record' => $record, 'clauses' => $clauses]);
       }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Audit_Plan $audit_Plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Audit_Plan $audit_Plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audit_Plan $audit_Plan)
    {
        //
    }
}
