<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SochudaoModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'sochudao_id','sochudao_name','sochudao_desc',
    ];
    protected $primaryKey = 'sochudao_id';
    protected $table = 'sochudao';
}
