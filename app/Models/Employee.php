<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'cat_employees';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'name',
                            'last_name',
                            'second_last_name',
                            'email',
                            'cat_type_employees_id', 
                            'active',
                            'observations'];

    protected $visible = [  'name',
                            'last_name',
                            'second_last_name',
                            'email',
                            'cat_type_employees_id', 
                            'active',
                            'observations'];
}
