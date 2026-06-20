<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marque;


class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques =Marque::all();
        return view('admin.marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.marques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marque = new Marque();
        $marque->nom_marque = $request->nom_marque;


        $file_local = $request->file('logo');

        $nom_marque = $request->nom_marque;

        if ($file_local) {

            $extension = strtolower($file_local->getClientOriginalExtension());

            if (in_array($extension, ['jpg', 'png', 'jpeg'])) {

                $name = time().'_'.$nom_marque.'.'.$extension;

                // upload image
                $file_local->move(
                    public_path('images/marques'),
                    $name
                );

                // chemin DB
                $relativePath = 'images/marques/' . $name;

                $marque->filename = $name;
                $marque->path = $relativePath;
            }
        }

        $marque->save();

        return redirect()->route('marques.index')->with('success', 'Marque créée avec succès.');
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
}
