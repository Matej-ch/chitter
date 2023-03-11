<?php

namespace App\Models;

use App\Events\ChitterCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chitter extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    protected $dispatchesEvents = [
        'created' => ChitterCreated::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
