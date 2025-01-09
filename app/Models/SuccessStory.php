<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'story',
        'member_id',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
