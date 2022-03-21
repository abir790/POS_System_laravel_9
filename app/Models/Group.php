<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Group extends Model
{
    use HasFactory;
    
    protected $table = 'groups';
    protected $fillable=[
    	'title',
    ];

    //public $timestamps = false;
        public function users(){
    	return $this->hasMany(User::class);  // akta group er akadhik user thakte pare
    }



}