<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    use HasFactory;
    protected $table = 'tiket';
    protected $fillable = ['nama', 'no_hp', 'email', 'status', 'checkin'];
}
