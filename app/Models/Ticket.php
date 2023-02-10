<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;



class Ticket extends Model
{
    use HasFactory, HasUuids;
    

    protected $fillable = ['name', 'status' ,'ticket_id','user_id','title', 'description','label','categories','priority'];

    //
    public $incrementing = false; 

    protected $primaryKey = 'ticket_id';
    

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
