<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = [
        'name',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
