<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousDirecteur extends Model
{
    use HasFactory;


        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Matricule_S_D';

     /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    public function permissions()
    {
        return $this->hasMany(Permission::class, 'Matricule_S_D', 'Matricule_S_D');
    }

    public function courriers()
    {
        return $this->hasMany(Courrier::class, 'Matricule_S_D', 'Matricule_S_D');
    }

    public function recevoir2()
    {
        return $this->belongsToMany(Courrier::class, 'recevoir_2', 'Matricule_S_D', 'ID_courrier');
    }
}
