<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Marque;
use App\Models\VehiculePhoto;
use App\Models\CreditVehicule;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules =Vehicule::all();
        return view('admin.vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marques = Marque::all();
        return view('admin.vehicules.create', compact('marques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicule = new Vehicule();
        $vehicule->marque_id = $request->marque_id;
        $vehicule->modelle_id = $request->modelle_id;
        $vehicule->version_id = $request->version_id;
        $vehicule->annee = $request->annee;
        $vehicule->immatriculation = $request->immatriculation;
        $vehicule->couleur = $request->couleur;
        $vehicule->carburant = $request->carburant;
        $vehicule->transmission = $request->transmission;
        $vehicule->nombre_places = $request->nombre_places;
        $vehicule->kilometrage = $request->kilometrage;

        $vehicule->prix_journalier = $request->prix_journalier;
        $vehicule->prix_achat=$request->prix_achat;
        $vehicule->save();
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $index => $file_local) {

                $extension = strtolower($file_local->getClientOriginalExtension());

                if (in_array($extension, ['jpg', 'png', 'jpeg'])) {

                    $name = time() . '_' . uniqid() . '.' . $extension;
                    $file_local->move(public_path('images/vehicules'), $name);

                    $relativePath = 'images/vehicules/' . $name;

                    VehiculePhoto::create([
                        'vehicule_id' => $vehicule->id,
                        'filename' => $name,
                        'is_profile' => $request->is_profile == $index ? true : false,
                        'path' => $relativePath,
                    ]);
                }
            }
        }
        if($request->is_credit == 1){

            CreditVehicule::create([
                'vehicule_id'      => $vehicule->id,
                'montant_total'    => $request->montant_total,
                'apport'           => $request->apport,
                'montant_finance'  => $request->montant_finance,
                'mensualite'       => $request->mensualite,
                'taux_interet'     => $request->taux_interet,
                'nombre_mois'      => $request->nombre_mois,
                'date_debut'       => $request->date_debut,
                'date_fin'         => $request->date_fin,
                'reste_a_payer'    => $request->reste_a_payer,
                'statut'           => $request->statut,
            ]);

        }
        return redirect()->route('vehicules.index')->with('success', 'Véhicule ajouté avec succès.');
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
