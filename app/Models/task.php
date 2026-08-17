<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'title',
        'description',
    ];

}
