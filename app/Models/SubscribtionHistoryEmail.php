<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribtionHistoryEmail extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function subscribtion()
    {
        return $this->belongsTo(Subscribtion::class);
    }
}
