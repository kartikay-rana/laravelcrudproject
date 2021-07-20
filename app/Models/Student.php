<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// this is Student Modal
class Student extends Model
{
    protected $table='student';
    public $timestamps='false';
    use HasFactory;

}

