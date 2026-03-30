<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vemployees extends Model
{
    use HasFactory;

    protected $table = 'v__employees';
    
    protected $visible = [  'id',
                            'name',
                            'last_name',
                            'second_last_name',
                            'email', 
                            'active',
                            'observations',
                            'cat_type_employees_id',
                            'cat_type_employees_description'];

}
