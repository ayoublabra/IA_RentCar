<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelle;
use App\Models\Marque;
use App\Models\Version;

class ModelleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelles = Modelle::with('marque')->get();
        return view('admin.modelles.index', compact('modelles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marques = Marque::all();
        return view('admin.modelles.create', compact('marques'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getModelles(Request $request)
    {
        $marque_id = $request->marque;
        $modelles = Modelle::where('marque_id', $marque_id)->get();
        return response()->json($modelles);
    }
    public function getVersions(Request $request)
    {
        $version_id = $request->version;
        $versions = Version::where('modelle_id', $version_id)->get();
        return response()->json($versions);
    }
}
