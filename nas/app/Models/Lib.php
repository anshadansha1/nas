<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    use HasFactory;

    protected $table='libs';

    protected $fillable =['bname','uname','price'];
}
