<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class galeri extends Model
{
    use HasFactory,Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'image'
            ]
        ];
    }
}
