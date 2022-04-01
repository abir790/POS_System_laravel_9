<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Admin;


class SalesInvoice extends Model
{
    use HasFactory;
    protected $table = 'sales_invoices';
    protected $fillable = [
        'admin_id','user_id','challan_no','date',
    ];

        public function user(){
        return $this->belongsTo(User::class); // see group model
    }

        public function admin(){
        return $this->belongsTo(Admin::class);
    }

}
