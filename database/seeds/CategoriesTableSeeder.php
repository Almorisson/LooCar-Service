<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
           'intitule' => "Voitures de Sport",
           'description' => "La catégorie des voitures de Sport",
            'image' => "http://www.web-automobile.com/wp-content/uploads/2013/10/aston-martin-one-77-a-vendre.jpg",
        ]);

        Category::create([
            'intitule' => "Voitures de Luxe",
            'description' => "La catégorie des voitures de Luxe",
            'image' => "https://www.dewidehem.fr/theme/Coral/img/slider/dewidehem-vente-auto-prestige-lamborghini-ferrari.jpg",
        ]);

        Category::create([
            'intitule' => "Voitures à la mode",
            'description' => "La catégorie des voitures à la mode",
            'image' => "http://www.guide-autosport.com/wp-content/uploads/2016/10/ferrari-car-488-spider-488-gtb-2016-sport-auto-awards-1024x768.jpg",
        ]);
    }
}
