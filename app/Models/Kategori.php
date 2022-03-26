<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "kategoris";
    protected $primarykey = "id";
    protected $fillable = ['id','kategori','file'];

}
