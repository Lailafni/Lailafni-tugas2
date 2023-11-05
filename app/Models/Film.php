<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'JUDUL','PEMERAN', 'GENRE','TANGGAL_RILIS'];
}
