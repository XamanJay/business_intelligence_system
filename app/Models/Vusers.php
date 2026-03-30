<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vusers extends Model
{
    use HasFactory;

    protected $table = 'v__xusers';
    
    protected $visible = [  'id',
                            'cat_employees_id',
                            'x_profiles_id',
                            'user',
                            'passswwword', 
                            'active',
                            'observations',
                            'created_at',
                            'name',
                            'last_name',
                            'profile'];
}
