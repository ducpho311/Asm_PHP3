<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'content',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
