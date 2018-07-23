<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $table = 'click';
    public $timestamps = false;
    protected $fillable = ['ua', 'ip', 'ref', 'param1', 'param2', 'error', 'bad_domain'];
}
