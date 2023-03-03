<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class berita extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'beritas';
    public $fillable = ['image', 'title', 'body', 'bodysingkat', 'id_kategori'];
    public $timestamps = true;
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
