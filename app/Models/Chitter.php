<?php

namespace App\Models;

use App\Events\ChitterCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitter extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    protected $dispatchesEvents = [
        'created' => ChitterCreated::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
