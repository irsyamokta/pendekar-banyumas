<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstrumenSRQ extends Model
{
    use HasFactory;

    protected $table = 'instrumen_srq';

    protected $primaryKey = 'id_srq';

    protected $fillable = [
        'pertanyaan', 'urutan'
    ];
}
