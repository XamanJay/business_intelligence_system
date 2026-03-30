<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'x_profiles';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'profile',
                            'observations',
                            'active'];

    protected $visible = [ 'profile',
                            'observations',
                            'active'];
}
