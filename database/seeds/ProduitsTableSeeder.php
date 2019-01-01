<?php

use Illuminate\Database\Seeder;
use App\Model\Produit;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create(
            [
                'marque' => "Audi de Test",
                'description' => "La voiture Audi de test qui servira de modèle de base dans le catalogue tou entier.",
                'image' => "https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/17q2/678295/2017-audi-r8-spyder-instrumented-test-review-car-and-driver-photo-683069-s-original.jpg",
                'prix' => 400,
                'vitesse' => 200,
                'nbJoursReserves' => 7,
                'disponibilite' => 'on'

            ]);

        Produit::create(
            [
                'marque' => "Audi de Test 2",
                'description' => "La voiture Audi de test qui servira de modèle de base dans le catalogue tou entier.",
                'image' => "https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/17q2/678295/2017-audi-r8-spyder-instrumented-test-review-car-and-driver-photo-683069-s-original.jpg",
                'prix' => 500,
                'vitesse' => 300,
                'nbJoursReserves' => 14,
                'disponibilite' => 'off'

            ]);
    }
}
