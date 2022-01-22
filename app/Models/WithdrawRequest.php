<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class withdrawRequest extends Model
{
    use HasFactory;
    protected $table = 'withdraw_requests';
    protected $guarded = array();
    
    public function instructor()
    {
        return $this->belongsTo('App\Models\Instructor', 'instructor_id', 'id');
    }
}
