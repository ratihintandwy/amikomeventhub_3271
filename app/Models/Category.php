<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mass assignment agar data bisa masuk lewat Seeder
    protected $fillable = ['name', 'slug'];

    // Relasi ke Event (Satu Kategori memiliki banyak Event)
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
