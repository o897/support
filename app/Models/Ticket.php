<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['customer_email','title', 'description','label','categories','priority'];

    //
    public $incrementing = false; 

    protected $primaryKey = 'ticket_id';
    

    // public function users()
    // {
    //     return $this->belongsTo(User::class,'useri');
    // }
}
