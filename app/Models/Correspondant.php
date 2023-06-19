<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correspondant extends Model
{
    use HasFactory;

    protected $table = 'correspondants';
    protected $primaryKey = 'ID_crspd';
    public function courriers()
    {
        return $this->hasMany(Courrier::class, 'ID_crspd', 'ID_crspd');
    }

}
