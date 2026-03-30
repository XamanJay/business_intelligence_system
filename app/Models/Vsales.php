<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vsales extends Model
{
    use HasFactory;

    protected $table = 'v__sales';
    
    protected $visible = [  'id',
                            'lead',
                            'cat_employees_id',
                            'cat_employees_2_id',
                            'cat_employees_3_id', 
                            'link_lawruler',
                            'cat_type_process_id',
                            'cat_client_id',
                            'link_payment_receipt',
                            'consultation_cost_id',
                            'sale_date',
                            'day',
                            'month',
                            'year',
                            'ipaddress',
                            'x_users_id',
                            'active',
                            'observations',
                            'created_at',
                            'id_closer',
                            'name_closer',
                            'lastname_closer',
                            'email_closer',
                            'id_leader',
                            'name_leader',
                            'lastname_leader',
                            'email_leader',
                            'id_messenger',
                            'name_messenger',
                            'lastname_messenger',
                            'email_messenger',
                            'process',
                            'name_client',
                            'lastname_client',
                            'secondlastname_client',
                            'phone_client',
                            'consultation_cost'];
}
