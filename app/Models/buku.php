<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $primaryKey = 'kode_buku';

    protected $guarded = [];

    public $incrementing = false;
}
