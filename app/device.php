<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    protected $fillable['name','dept','id_card','IP','Mac_Address','Config'];   
    
}
