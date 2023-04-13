<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'description' => 'No description for this',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
