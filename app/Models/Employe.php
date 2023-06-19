<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    //     $table->string('prenom');
        //     $table->string('adresse');
        //     $table->date('date_naissance');
        //     $table->string('email');
        //     $table->string('telephone');

        protected $fillable=[
            'nom',
            'prenom',
            'adresse',
            'date_naissance',
            'email',
            'telephone',
        ];
}
