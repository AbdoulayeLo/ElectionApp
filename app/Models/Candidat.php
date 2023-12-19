<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\candidatController;

class Candidat extends Model
{
    use HasFactory;
    //! si on utilise Candidat::create($request->all()) 
    protected $fillable = [
        'prenom',
        'nom',
        'parti',
        'biographie',
        'photo',
    ];
}
