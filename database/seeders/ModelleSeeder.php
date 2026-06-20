<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marque;
use App\Models\Modelle;

class ModelleSeeder extends Seeder
{
    public function run(): void
    {
        $marques = [

            'Audi' => [
                'A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8',
                'Q2', 'Q3', 'Q5', 'Q7', 'Q8',
                'TT', 'R8',
                'e-tron GT', 'Q4 e-tron'
            ],

            'Bmw' => [
                'Série 1',
                'Série 2',
                'Série 3',
                'Série 4',
                'Série 5',
                'Série 7',
                'X1',
                'X2',
                'X3',
                'X4',
                'X5',
                'X6',
                'X7',
                'Z4',
                'i4',
                'iX'
            ],

            'Mercedes Benz' => [
                'Classe A',
                'Classe B',
                'Classe C',
                'Classe CLA',
                'Classe CLS',
                'Classe E',
                'Classe S',
                'GLA',
                'GLB',
                'GLC',
                'GLE',
                'GLS',
                'Classe G',
                'EQA',
                'EQB',
                'EQE',
                'EQS'
            ],

            'Volkswagen' => [
                'Polo',
                'Golf',
                'Passat',
                'Arteon',
                'Jetta',
                'T-Cross',
                'T-Roc',
                'Tiguan',
                'Touareg',
                'ID.3',
                'ID.4',
                'Caddy',
                'Transporter'
            ],

            'Renault' => [
                'Clio',
                'Megane',
                'Talisman',
                'Captur',
                'Kadjar',
                'Austral',
                'Arkana',
                'Koleos',
                'Trafic',
                'Master'
            ],

            'Peugeot' => [
                '108',
                '208',
                '308',
                '408',
                '508',
                '2008',
                '3008',
                '5008',
                'Partner',
                'Expert',
                'Boxer'
            ],

            'Citroën' => [
                'C1',
                'C3',
                'C3 Aircross',
                'C4',
                'C4 X',
                'C5 Aircross',
                'Berlingo',
                'Jumpy',
                'Jumper'
            ],

            'Opel' => [
                'Corsa',
                'Astra',
                'Insignia',
                'Crossland',
                'Mokka',
                'Grandland',
                'Combo',
                'Vivaro',
                'Movano'
            ],

            'Fiat' => [
                '500',
                '500X',
                'Tipo',
                'Panda',
                'Doblo',
                'Scudo',
                'Ducato'
            ],

            'Porsche' => [
                '718 Cayman',
                '718 Boxster',
                '911',
                'Macan',
                'Cayenne',
                'Panamera',
                'Taycan'
            ],

            'Range Rover' => [
                'Evoque',
                'Velar',
                'Sport',
                'Range Rover',
                'Defender',
                'Discovery',
                'Discovery Sport'
            ],

            'Alfa Romeo' => [
                'Giulia',
                'Stelvio',
                'Tonale',
                'Giulietta',
                'MiTo'
            ],
        ];

        foreach ($marques as $marqueNom => $modeles) {

            $marque = Marque::where('nom_marque', $marqueNom)->first();

            if (!$marque) {
                continue;
            }

            foreach ($modeles as $modeleNom) {

                Modelle::updateOrCreate(
                    [
                        'marque_id' => $marque->id,
                        'nom_model' => $modeleNom,
                    ],
                    []
                );
            }
        }
    }
}
