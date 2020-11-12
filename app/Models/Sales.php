<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primaryKey = 'sales_id';
    public $timestamps = false;
    protected $fillable = [
        'sales_id',
        'user_id',
        'name',
        'status',
        'class',
        'date',
        'price',
        'description',
    ];
}
