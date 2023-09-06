<?php

namespace App\Models;

use App\Models\Poster;
use App\Models\Valorant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BerkasPembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function valorant()
    {
        return $this->belongsTo(Valorant::class);
    }

    public function poster()
    {
        return $this->belongsTo(Poster::class);
    }
}
