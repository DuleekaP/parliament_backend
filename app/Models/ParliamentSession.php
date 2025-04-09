<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParliamentSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    public function parties()
    {
        return $this->belongsToMany(Party::class, 'party_parliament')
                    ->withPivot('member_count')
                    ->withTimestamps();
    }
}
