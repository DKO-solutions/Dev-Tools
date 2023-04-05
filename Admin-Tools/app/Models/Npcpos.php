<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Npcpos extends Model
{
    use HasFactory;

    protected $table = 'k_npcpos';

    public $timestamps = false;

    protected $fillable = [
        'ZoneID',
        'NpcID',
        'ActType',
        'LeftX',
        'TopZ',
        'RightX',
        'BottomZ',
        'NumNPC',
        'RegTime',
        'DotCnt',
        'path',
        'RegenType',
        'DungeonFamily',
        'SpecialType',
        'TrapNumber',
        'LimitMinZ',
        'LimitMinX',
        'LimitMaxZ'
        
    ];
}
