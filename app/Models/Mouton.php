<?php

namespace App\Models;

use app\Models\Race;
use app\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouton extends Model
{
    use HasFactory;

   protected $fillable = ['nom','prix', 'genealogie', 'photo', 'race_id', 'user_id'];

    
    public function race()
    {
        return $this->belongsTo(\App\Models\Race::class);
    }
        
        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
