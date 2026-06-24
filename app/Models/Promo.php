<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Promo extends Model {
    protected $fillable = ['title','code','description','discount_percentage','valid_until','is_active'];
}