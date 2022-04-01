<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\SalesInvoice;

class User extends Model
{
    use HasFactory;
    protected $fillable=[
    	'group_id','name','email','address','phone',
    ];

    public function group(){
    	return $this->belongsTo(Group::class); // see group model
    }

        public function SalesInvoice(){
        return $this->hasMany(SalesInvoice::class);
    }
}
