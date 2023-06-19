<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquerir extends Model
{
    protected $table = 'acquerirs';
    use HasFactory;
    public function article()
    {
        return $this->belongsTo(Article::class, 'ID_art', 'ID_art');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'matricule_agn', 'matricule_agn');
    }


}
