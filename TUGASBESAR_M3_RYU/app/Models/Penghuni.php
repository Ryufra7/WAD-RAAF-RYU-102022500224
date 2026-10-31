<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';
    public $timestamps = false; 
    protected $fillable = ['nama', 'ktp', 'pekerjaan', 'kontak'];
}