<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable=[
    	'content','sender','receiver'
    ];
    public function sender()
    {
    	return $this->belongsTo(User::class,'sender','id');
    }
    public function receiver()
    {
    	return $this->belongsTo(User::class,'receiver','id');
    }
  
}
