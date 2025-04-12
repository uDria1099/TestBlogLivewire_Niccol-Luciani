<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContinentSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $continents = [
            ['name'=>'europa', 'image'=>'/continenti/europa.avif'],
            ['name'=>'africa', 'image'=>'/continenti/africa.png'],
            ['name'=>'america', 'image'=>'/continenti/america.jpg'],
            ['name'=>'asia', 'image'=>'/continenti/asia.jpg'],
            ['name'=>'oceania', 'image'=>'/continenti/oceania.webp']
        ];
        
        foreach($continents as $continent){
            Continent::create([
                'name'=>$continent['name'],
                'image'=>$continent['image']
            ]);
            }
           
        }
    }
    