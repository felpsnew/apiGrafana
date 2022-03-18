<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_count extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'status','count'];
}
