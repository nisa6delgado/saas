<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'subject', 'rating'];

    public function student()
    {
    	return $this->belongsTo('Student');
    }
}
