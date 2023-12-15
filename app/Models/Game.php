<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;    

    protected $guarded = []; //salva os itens dos edit/update

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
