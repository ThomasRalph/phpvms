<?php

namespace App\Models;

use App\Interfaces\Model;

/**
 * Class PirepEvent
 *
 * @package App\Models
 */
class PirepComment extends Model
{
    public $table = 'pirep_comments';

    public $fillable = [
        'pirep_id',
        'user_id',
        'comment',
    ];

    public static $rules = [
        'comment' => 'required',
    ];

    public function pirep()
    {
        return $this->belongsTo(Pirep::class, 'pirep_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
