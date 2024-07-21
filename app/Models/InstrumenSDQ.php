<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstrumenSDQ extends Model
{
    use HasFactory;

    protected $table = 'instrumen_sdq';

    protected $primaryKey = 'id_sdq';

    protected $fillable = [
        'pertanyaan', 'urutan'
    ];
}
