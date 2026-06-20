<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Version;
use App\Models\Modelle;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $versions = [

            // ================= AUDI =================
            'A1' => ['Base', 'Sport', 'S line'],
            'A3' => ['Base', 'Sport', 'S line', 'S3'],
            'A4' => ['Base', 'Advanced', 'S line', 'S4'],
            'A5' => ['Base', 'S line', 'Sportback'],
            'A6' => ['Base', 'S line', 'Quattro'],
            'A7' => ['S line', 'Sportback'],
            'A8' => ['Luxury', 'Quattro'],
            'Q2' => ['Base', 'S line'],
            'Q3' => ['Base', 'S line', 'Sportback'],
            'Q5' => ['Base', 'S line', 'Quattro'],
            'Q7' => ['Base', 'S line', 'Quattro'],
            'Q8' => ['S line', 'Quattro'],
            'TT' => ['Coupe', 'Roadster'],
            'R8' => ['V10', 'Performance'],
            'e-tron GT' => ['Standard', 'RS'],
            'Q4 e-tron' => ['Standard', 'S line'],

            // ================= BMW =================
            'Série 1' => ['118i', '120i', 'M Sport'],
            'Série 2' => ['218i', '220i', 'M235i'],
            'Série 3' => ['318i', '320i', '330i', 'M3'],
            'Série 4' => ['420i', '430i', 'M4'],
            'Série 5' => ['520i', '530i', '540i', 'M5'],
            'Série 7' => ['730i', '740i', '750i'],
            'X1' => ['sDrive18i', 'xDrive20i'],
            'X2' => ['sDrive18i', 'M35i'],
            'X3' => ['xDrive20i', 'xDrive30i', 'M40i'],
            'X4' => ['xDrive20i', 'M40i'],
            'X5' => ['xDrive40i', 'M50i'],
            'X6' => ['xDrive40i', 'M50i'],
            'X7' => ['xDrive40i', 'M60i'],
            'Z4' => ['sDrive20i', 'M40i'],
            'i4' => ['eDrive40', 'M50'],
            'iX' => ['xDrive40', 'xDrive50'],

            // ================= MERCEDES =================
            'Classe A' => ['A180', 'A200', 'A250', 'AMG A35'],
            'Classe B' => ['B180', 'B200'],
            'Classe C' => ['C180', 'C200', 'C300', 'AMG C63'],
            'Classe CLA' => ['CLA180', 'CLA200', 'AMG CLA35'],
            'Classe CLS' => ['CLS300', 'CLS450'],
            'Classe E' => ['E200', 'E300', 'E350', 'AMG E53'],
            'Classe S' => ['S350', 'S500', 'S580', 'Maybach'],
            'GLA' => ['GLA180', 'GLA200', 'AMG GLA35'],
            'GLB' => ['GLB180', 'GLB200'],
            'GLC' => ['GLC200', 'GLC300', 'AMG GLC43'],
            'GLE' => ['GLE300', 'GLE450', 'AMG GLE53'],
            'GLS' => ['GLS400', 'GLS580', 'Maybach GLS'],
            'Classe G' => ['G350', 'G500', 'AMG G63'],
            'EQA' => ['EQA250'],
            'EQB' => ['EQB300'],
            'EQE' => ['EQE350'],
            'EQS' => ['EQS450', 'EQS580'],

            // ================= VOLKSWAGEN =================
            'Polo' => ['Trendline', 'Comfortline', 'Highline'],
            'Golf' => ['Golf 7', 'Golf 8', 'GTI', 'R'],
            'Passat' => ['Trendline', 'Highline'],
            'Arteon' => ['Elegance', 'R-Line'],
            'Jetta' => ['Comfortline', 'Highline'],
            'T-Cross' => ['Life', 'Style'],
            'T-Roc' => ['Life', 'R-Line'],
            'Tiguan' => ['Life', 'Elegance', 'R-Line'],
            'Touareg' => ['V6', 'R-Line'],
            'ID.3' => ['Pure', 'Pro', 'Pro S'],
            'ID.4' => ['Pure', 'Pro', 'GTX'],
            'Caddy' => ['Cargo', 'Life'],
            'Transporter' => ['Van', 'Combi'],

            // ================= RENAULT =================
            'Clio' => ['Clio 4','Clio 5','Authentique', 'Zen', 'RS Line'],
            'Megane' => ['Life', 'Zen', 'RS'],
            'Talisman' => ['Zen', 'Initiale Paris'],
            'Captur' => ['Life', 'Zen', 'RS Line'],
            'Kadjar' => ['Life', 'Zen'],
            'Austral' => ['Evolution', 'Techno'],
            'Arkana' => ['Zen', 'RS Line'],
            'Koleos' => ['Zen', 'Initiale Paris'],
            'Trafic' => ['Passager', 'Business'],
            'Master' => ['Chassis', 'Fourgon'],

            // ================= PEUGEOT =================
            '208' => ['Active', 'Allure', 'GT'],
            '308' => ['Active', 'Allure', 'GT'],
            '408' => ['Allure', 'GT'],
            '508' => ['Allure', 'GT', 'PSE'],
            '2008' => ['Active', 'Allure', 'GT'],
            '3008' => ['Active', 'Allure', 'GT'],
            '5008' => ['Active', 'Allure', 'GT'],
            'Partner' => ['Pro', 'Premium'],
            'Expert' => ['Standard', 'Long'],
            'Boxer' => ['Chassis', 'Van'],

            // ================= CITROËN =================
            'C3' => ['Live', 'Feel', 'Shine'],
            'C4' => ['Feel', 'Shine', 'C-Series'],
            'C5 Aircross' => ['Feel', 'Shine'],
            'Berlingo' => ['Live', 'Feel'],
            'Jumpy' => ['Control', 'Driver'],
            'Jumper' => ['Base', 'Heavy'],

            // ================= OPEL =================
            'Corsa' => ['Edition', 'GS Line'],
            'Astra' => ['Edition', 'Elegance', 'GS'],
            'Insignia' => ['Edition', 'GS'],
            'Mokka' => ['Edition', 'GS Line'],
            'Grandland' => ['Edition', 'Ultimate'],

            // ================= FIAT =================
            '500' => ['Pop', 'Lounge', 'Sport'],
            'Panda' => ['Easy', 'City Cross'],
            'Tipo' => ['Life', 'Cross'],

            // ================= PORSCHE =================
            '911' => ['Carrera', 'Turbo', 'GT3'],
            'Cayenne' => ['Base', 'S', 'Turbo'],
            'Macan' => ['Base', 'S', 'GTS'],
            'Taycan' => ['4S', 'Turbo', 'Turbo S'],

            // ================= RANGE ROVER =================
            'Evoque' => ['S', 'SE', 'R-Dynamic'],
            'Velar' => ['S', 'SE', 'R-Dynamic'],
            'Sport' => ['SE', 'HSE', 'SVR'],
            'Range Rover' => ['SE', 'HSE', 'Autobiography'],
            'Defender' => ['110', '130', 'X'],
            'Discovery' => ['S', 'SE', 'HSE'],

            // ================= ALFA ROMEO =================
            'Giulia' => ['Base', 'Super', 'Quadrifoglio'],
            'Stelvio' => ['Base', 'Ti', 'Quadrifoglio'],
            'Tonale' => ['Sprint', 'Ti', 'Veloce'],
        ];

        foreach ($versions as $modeleNom => $listVersions) {

            $modele = Modelle::where('nom_model', $modeleNom)->first();

            if (!$modele) {
                continue;
            }

            foreach ($listVersions as $versionNom) {
                Version::updateOrCreate(
                    [
                        'modelle_id' => $modele->id,
                        'nom' => $versionNom,
                    ],
                    []
                );
            }
        }
    }
}
