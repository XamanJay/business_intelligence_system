<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    use HasFactory;
    protected $table = 'cat_active';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'description'];

    protected $visible = [ 'description'];
}
