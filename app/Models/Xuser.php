<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xuser extends Model
{
    use HasFactory;
    protected $table = 'x_users';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'cat_employees_id',
                            'x_profiles_id',
                            'user',
                            'passswwword',
                            'active', 
                            'observations'];

    protected $visible = [  'cat_employees_id',
                            'x_profiles_id',
                            'user',
                            'passswwword',
                            'active', 
                            'observations'];

}
