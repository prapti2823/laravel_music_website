<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;

    protected $table = "playlists";
    protected $primarykey = "playlistid";

    public function state()
    {
        return $this->belongsTo(songs::class, 'songid', 'songid');
    }
}
