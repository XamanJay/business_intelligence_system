<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeemployees extends Model
{
    use HasFactory;

    protected $table = 'cat_type_employees';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'description',
                            'observations',
                            'active',];

    protected $visible = [  'description',
                            'observations',
                            'active',];
}
