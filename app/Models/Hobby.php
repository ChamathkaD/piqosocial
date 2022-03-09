<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * The users that belong to the hobby.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function hobbiesCollection(): array
    {
        return array (
            'Sport',
            'Collecting Stamps',
            'Tiktok',
            'Dancing',
            'Hiking',
            'Traveling',
            'Watching TV',
            'Animation',
            'Card games',
            'Craft',
            'Drawing',
            'Listening to podcasts',
        );
    }
}
