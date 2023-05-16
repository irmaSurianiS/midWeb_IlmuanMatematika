<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\GenUid;

class IlmuanMatematika extends Model
{
    use HasFactory, GenUid;

    protected $guarded = ["id"];
}
