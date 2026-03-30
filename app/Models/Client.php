<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'cat_clients';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'name',
                            'last_name',
                            'second_last_name',
                            'email',
                            'email2',
                            'phone',
                            'cellular_phone',
                            'cat_type_clients_id,',
                            'regions_id',
                            'observations',
                            'active'];

    protected $visible = [  'name',
                            'last_name',
                            'second_last_name',
                            'email',
                            'email2',
                            'phone',
                            'cellular_phone',
                            'cat_type_clients_id,',
                            'regions_id',
                            'observations',
                            'active'];
}
