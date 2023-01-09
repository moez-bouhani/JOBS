<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titreCategorie' => $this->titreCategorie,
         /*    'descriptionCategorie' => $this->descriptionCategorie, */

            
            'annonce_count' => $this->annonce_count
        ];
    }
}
