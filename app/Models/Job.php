<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'salary', 'id_user'];

    // Define the relationship with the DataUser model
    public function user()
    {
        return $this->belongsTo(DataUser::class, 'id_user');
    }
}