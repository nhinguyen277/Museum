<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'address',
        'type',
        'summary',
        'phone',
        'url',
        'postalcode',
        'ward',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
