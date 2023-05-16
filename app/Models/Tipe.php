<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $table = "tipe",
        $primaryKey = "id",
        $fillable = ["id", "nama", "deskripsi", "kolom"];
    public $timestamps = false;
}
