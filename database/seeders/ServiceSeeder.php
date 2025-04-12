<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['title'=>'spa', 'description'=>'bell massaggino NO 18+'],
            ['title'=>'trekking', 'description'=>'camminata sfondapolmoni'],
            ['title'=>'arceria', 'description'=>'occhio a chi prendi'],
            ['title'=>'yoga', 'description'=>'ti rompiamo le articolazioni'],
            ['title'=>'meditazione', 'description'=>'credici di rilassarti']
        ];
        
        foreach($services as $service){
            
            Service::create([
                'title'=>$service['title'],
                'description'=>$service['description'],
            ]);
            }
    }
}
