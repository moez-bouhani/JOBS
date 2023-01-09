<?php

use App\User;
use App\Role;
use App\Categorie;

use App\FirstCatImage;
use App\SecondeImage;
use App\ThirdImage;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        //categorie des services
         
        Categorie::create([
            'id' => '1',
            'titreCategorie' => 'serrurier',
            'imageCat' =>'ser/serrurier-t2-panne.tn.jpg', 
        ]);
       /*  Categorie::create([
            'id' => '2',
            'titreCategorie' => 'plombier',

        ]);
        Categorie::create([
            'id' => '3',
            'titreCategorie' => 'electricien',
        ]);
        Categorie::create([
            'id' => '4',
            'titreCategorie' => 'vitrier',
        ]); */
    
  //sous_categorie des services id_categorie 1
       
  FirstCatImage::create([
    'id' => '1',
    'cat_id' => '1',
    'firstImage' => 'ser/ouverture-de-porte/serrurier-ouverture-de-porte1-panne.tn.jpg',
]); 

SecondeImage::create([
    'id' => '1',
    'scond_id' => '1',
    'secondImage' => 'ser/ouverture-de-porte/ouverture-de-porte-simple/porte-simple-panne.jpg',
]); 


      

    } 
}