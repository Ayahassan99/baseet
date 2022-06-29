<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'workerid',
        'userid',
        'number of hours',
        'price for hour',
    ];
    public function worker()
    {
        return $this->belongsto(Worker::class);
    }
    
}
