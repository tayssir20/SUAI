<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\formData;

class FormData extends Model
{
protected $fillable=[
    'typeClient',
    'email',
    'nom',
    'prenom',
    'adresse',
    'service'
    ];
}
