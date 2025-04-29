<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'no';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['no', 'name', 'gender', 'phone', 'email'];
}