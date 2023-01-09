<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;

class OffreController extends Controller
{
    public function ajoutOffre(Request $request) 
    {
         $offre= Offre::create([
           
            'titre'=>$request['titre'],
            'description'=>$request['description'],
        ]);  
    
            return response()->json(['offre'=>$offre]);

    }

    public function showOffre ($id)
                {
                
                $showOffre=Offre::where('id',$id)->get();
                return response()->json(['succes' => $showOffre], 200);
                
                }


                public function updateOffre(request $request ,$id ){ 
                
                
                   $info = Offre::where('id',$id)
                        ->update( [
                        'titre'=>$request['titre'],
                        'description'=>$request['description'],
                        ]);
                
                        return response()->json('info modifier');
                }
  



                public function DeleteOffre(Request $request, $id)
    {
        $agence = Offre::find($id);
               
               if (!$agence) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, agence with id ' . $id . ' cannot be found'
                ], 400);
            }
         
            if ($agence->delete()) {
                return response()->json([
                    'success' => true ,
                    'message' => 'agence with id ' . $id . ' is deleted ',
                    'agence' => $agence
                    ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'agence could not be deleted'
                ], 500);
            }

    }

}
