<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // eURBAIN
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU939', 'name' => 'eC01 Powetube D9', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU959', 'name' => 'eC01 D9 Plus', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU917', 'name' => 'eC01 N7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU919', 'name' => 'eC01 D9', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU918', 'name' => 'eC02 Bosch', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU9B7', 'name' => 'eC03 N7 ', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU538', 'name' => 'eLC01 26\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU518', 'name' => 'eLC01 24\'\'', 'brand_id' => 1]);

        //eTREKKING
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU760', 'name' => 'eT01 FS CrossOver Equipé PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU360', 'name' => 'eT01 FS CrossOver PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU700', 'name' => 'eT01 CrossOver Equipé D9 PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU710', 'name' => 'eT01 CrossOver Equipé Mixte D9 PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU309', 'name' => 'eT01 CrossOver D9 PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU319', 'name' => 'eT01 CrossOver D9 Mixte PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU728', 'name' => 'eT01 Belt PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU738', 'name' => 'eT01 Belt Mixte PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU709', 'name' => 'eT01 D9 PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU719', 'name' => 'eT01 D9 Mixte PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU708', 'name' => 'eT01 D8', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPU718', 'name' => 'eT01 D8 Mixte', 'brand_id' => 1]);

        //eMOUTAIN
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPU100', 'name' => 'eM02 FS Performance', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPU149', 'name' => 'eM02 Performance', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPU189', 'name' => 'eM02 Performance', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPU129', 'name' => 'eM02 Active', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPU169', 'name' => 'eM02 Active', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YOU164', 'name' => 'eM03 27.5', 'brand_id' => 1]);

        //eROAD
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YOU621', 'name' => 'eR02 Ultegra PowerTube', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPU609', 'name' => 'eR02 FlatBar PowerTube', 'brand_id' => 1]);

        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPU957', 'name' => 'C02 N7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPU977', 'name' => 'C02 D7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YLU576', 'name' => 'LC21', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPU957', 'name' => 'C02 N7', 'brand_id' => 1]);

        //LEGEND
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YMU907', 'name' => 'LC01 N7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YMU901', 'name' => 'LC01 D7+', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YMU9A7', 'name' => 'LC01 D7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YMU620', 'name' => 'LR01 Road', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YMU640', 'name' => 'LU01 Fixie', 'brand_id' => 1]);

        //TREKKING
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPU748', 'name' => 'T01 N8 Belt', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPU707', 'name' => 'T01 D9', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPU711', 'name' => 'T02 D7 Mixte', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPU701', 'name' => 'T02 D7', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPU731', 'name' => 'T03 D7 Wave', 'brand_id' => 1]);

        //MOUTAIN
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU142', 'name' => 'M02 SLX 12 29\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU140', 'name' => 'M02 Deore 20 29\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU148', 'name' => 'M02 Alivio 18 29\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU144', 'name' => 'M02 Acera 24 27,5\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU121', 'name' => 'M02 Altus 21 27,5\'\'', 'brand_id' => 1]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPU181', 'name' => 'M03 27.5 Vbrake', 'brand_id' => 1]);
        //JUNIOR

        // Gitane 2020
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG915', 'name' => 'e-CITY STEPS', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG518', 'name' => 'e-SALSA Yamaha D8 26\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG918', 'name' => 'e-SALSA Yamaha D8 28\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG758', 'name' => 'ORGAN\'e-Central', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG558', 'name' => 'ORGAN\'e-Central XS', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG798', 'name' => 'ORGAN\'e-Bike', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG598', 'name' => 'ORGAN\'e-Bike XS', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 1, 'reference' => 'YPG538', 'name' => 'e-NOMAD', 'brand_id' => 2]);

        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPG718', 'name' => 'e-VERSO Yamaha Mixte Equipé', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPG708', 'name' => 'e-VERSO Yamaha Equipé', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPG338', 'name' => 'e-VERSO Cross Yamaha Mixte', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPG328', 'name' => 'e-VERSO Cross Yamaha', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YOG317', 'name' => 'e-VERSO E-Going Mixte Equipé', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'Y0G307', 'name' => 'e-VERSO E-Going Equipé', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 2, 'reference' => 'YPG107', 'name' => 'e-VERSO E-Going Tandem DT12', 'brand_id' => 2]);

        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPG149', 'name' => 'e-KOBALT 27.5+ STEPS', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPG129', 'name' => 'e-KOBALT 27.5 Yamaha', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YPG109', 'name' => 'e-KOBALT XS Yamaha', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 3, 'reference' => 'YOG144', 'name' => 'TITAN 1', 'brand_id' => 2]);

        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG911', 'name' => 'SALSA 21S 28\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG917', 'name' => 'SALSA 7S 28\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG517', 'name' => 'SALSA 7S 26\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG956', 'name' => 'SALSA City 28\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG556', 'name' => 'SALSA City 26\'\'', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 4, 'reference' => 'YPG576', 'name' => '1930', 'brand_id' => 2]);

        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YNG337', 'name' => 'VERSO Tandem', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG707', 'name' => 'VERSO Tour', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG308', 'name' => 'VERSO Sport 2 x 9', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG364', 'name' => 'VERSO Sport 24 Disc', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG374', 'name' => 'VERSO Sport 24 Disc Mixte', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG721', 'name' => 'VERSO Equipé 21', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG731', 'name' => 'VERSO Equipe 21 Mixte', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG368', 'name' => 'VERSO Sport 18', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 5, 'reference' => 'YPG378', 'name' => 'VERSO Sport 18 Mixte', 'brand_id' => 2]);

        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPG148', 'name' => 'KOBALT Alivio 2 x 9', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPG128', 'name' => 'KOBALT Acera 2 x 9', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPG108', 'name' => 'KOBALT Altus 2 x 9 Hydro', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPG121', 'name' => 'KOBALT Altus 21 Disc', 'brand_id' => 2]);
        Product::create(['season_id' => 1, 'family_id' => 6, 'reference' => 'YPG141', 'name' => 'KOBALT 21', 'brand_id' => 2]);
    }
}
