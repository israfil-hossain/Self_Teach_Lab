<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructionLevel extends Model
{
    use HasFactory;
    protected $table = 'instruction_levels';
    public $timestamps = false;
    protected $guarded = array();
}
