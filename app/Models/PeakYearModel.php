<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeakYearModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'peakYear_id','peakYear_name','peakYear_desc',
    ];
    protected $primaryKey = 'peakYear_id';
    protected $table = 'peak_year';
}
