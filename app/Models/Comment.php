<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Comment extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'user_id',
        'museum_id',
        'comment',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function museum()
    {
        return $this->belongTo(Museum::class);
    }

}
