<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubscribtionHistoryEmail;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscribtion extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'email'
            ]
        ];
    }

    public function history()
    {
        return $this->hasMany(SubscribtionHistoryEmail::class);
    }
}
