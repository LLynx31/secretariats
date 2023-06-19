<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    protected $primaryKey = 'ID_perm';

    public function sousDirecteur()
    {
        return $this->belongsTo(SousDirecteur::class, 'Matricule_S_D', 'Matricule_S_D');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'matricule_agn', 'matricule_agn');
    }
}
