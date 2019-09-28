<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class resources extends Model
{
    public function article() {
        return $this->belongsTo(articles::class,'article_od' , 'id');
    }
}
