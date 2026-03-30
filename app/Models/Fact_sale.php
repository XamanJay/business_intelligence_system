<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact_sale extends Model
{
    use HasFactory;
    protected $table = 'fact_sales';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'lead',
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
                            'observations'];

    protected $visible = [  'lead',
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
                            'observations'];
}
