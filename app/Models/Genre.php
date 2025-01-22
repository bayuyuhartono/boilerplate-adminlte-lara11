<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Genre extends Model
{
    protected $table = 'master_genre';
    protected $fillable = [
        'name',
    ];

    public function scopeGetGenreLists($query)
    {
        $query = DB::table("master_genre as genre")
            ->select('genre.uuid', 'genre.name')
            ->orderBy('genre.created_at','DESC')
            ->get();

        return $query;
    }
}
