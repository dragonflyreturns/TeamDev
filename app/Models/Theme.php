<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'theme',
        'user_id',
    ];
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    use HasFactory;
}
