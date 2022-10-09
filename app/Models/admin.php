<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admininfo';
    protected $primaryKey = 'id';
    protected $fillable = ['uname', 'fname', 'lname', 'email'];
}
