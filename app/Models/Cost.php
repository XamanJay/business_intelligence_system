<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $table = 'cat_consultation_cost';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'consultation_cost',
                            'commissions',
                            'observations',
                            'active'];

    protected $visible = [  'consultation_cost',
                            'commissions',
                            'observations',
                            'active'];
}
