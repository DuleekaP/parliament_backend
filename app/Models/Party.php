<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'started_date',
    ];

    public function parliaments()
    {
        return $this->belongsToMany(ParliamentSession::class, 'party_parliament')
                    ->withPivot('member_count')
                    ->withTimestamps();
    }
}
