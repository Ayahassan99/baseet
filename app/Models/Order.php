<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'workerid',
        'userid',
        'number_of_hours',
        'price',
        'type',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'userid');
    }
    public function worker() {
        return $this->belongsTo(Worker::class, 'workerid');
    }
}
