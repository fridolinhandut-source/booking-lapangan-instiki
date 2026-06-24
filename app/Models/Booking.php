<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model {
    protected $fillable = ['user_id','field_id','status','booking_date','duration','total_price','notes'];
    public function user() { return $this->belongsTo(User::class); }
    public function field() { return $this->belongsTo(Field::class); }
}