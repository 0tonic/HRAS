<?php

namespace App\Http\Controllers;

use App\Models\superadmin;
use Illuminate\Http\Request;

class superadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->get('search');
        if ($search) {
            $data['superadmin'] = superadmin::where('id', 'like', "%{$search}%")->get();
        } else {
            $data['superadmin'] = superadmin::all();
        }
        return view('layouts.superadmin.index', $data);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(superadmin $superadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $superadmin = superadmin::find($id);
        return view('layouts.superadmin.edit', compact('superadmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, superadmin $superadmin, $id)
    {
        //
        $superadmin = superadmin::find($id);
        $superadmin->role = $request->role;
        $superadmin->save();
        return redirect()->route('superadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(superadmin $superadmin)
    {
        //
        $superadmin->delete();
    }
}
