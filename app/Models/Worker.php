<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Worker extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'city',
        'region',
        'gender',
        'service',
        'hour',
        'photo',
        'about',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   public function orders() {
       return $this->hasMany(Order::class, 'workerid', 'id');
   }
   public function reviews() {
       $orders_ids = $this->orders()->where('status', '=','done')->select('id')->get()->pluck("id")->toArray();
       return Review::whereIn("id", $orders_ids)->with('order')->get();
   }
   public function rating() {
       $reviews = $this->reviews();
       $rating_value = 0;
       $reviews_count = $reviews->count();
       if ($reviews_count === 0) {
           return 0;
       }
       foreach($reviews as $review) {
           $rating_value += $review->rating;
       }
       return $rating_value / $reviews_count;

   }
}
