<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    
    public function resources(){

            return $this->hasMany(resources::class,'article_id' , 'id');

    }



}
