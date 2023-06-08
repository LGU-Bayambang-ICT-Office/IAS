<?php

namespace App\Http\Controllers;

use App\Models\Audit_Clause;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AuditClauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clauses = Audit_Clause::orderBy('clause_no')->paginate(5);
        return view('clauses.index', compact('clauses') );
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

        $clause = $this->validate($request, [

            'clause_no' => 'required',
            'clause_sub_no' => 'required',
            'clause_desc' => 'required',
            'clause_status' => 'required',


        ]);

        $validated_data = [
            'clause_no' => $clause['clause_no'],
            'clause_sub_no' => $clause['clause_sub_no'],
            'clause_desc' => $clause['clause_desc'],
            'clause_status' => $clause['clause_status'],
  

        ];

        Audit_Clause::create($validated_data);
        Toastr::success('Clause Successfully Added', 'Clause Type');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Audit_Clause $audit_Clause)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Audit_Clause $audit_Clause)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Audit_Clause $audit_Clause)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audit_Clause $audit_Clause)
    {
        //
    }
}
