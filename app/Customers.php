<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['user_id', 'name', 'phone', 'updated_by', 'email', 'address', 'service_query', 'description', 'remarks', 'date'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
