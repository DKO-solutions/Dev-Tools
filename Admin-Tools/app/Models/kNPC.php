<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kNPC extends Model
{
    use HasFactory;

    protected $table = 'k_npc';

    public $timestamps = false;

    protected $fillable = ['sSid',
    'strName',
    'sPid',
    'sSize',
    'iWeapon1',
    'iWeapon2',
    'byGroup',
    'byActType',
    'byType',
    'byFamily',
    'byRank',
    'byTitle',
    'iSellingGroup',
    'sLevel',
    'iExp',
    'iLoyalty',
    'iHpPoint',
    'sMpPoint',
    'sAtk',
    'sAc',
    'sHitRate',
    'sEvadeRate',
    'sDamage',
    'sAttackDelay',
    'bySpeed1',
    'bySpeed2',
    'sStandtime',
    'iMagic1',
    'iMagic2',
    'iMagic3',
    'byFireR',
    'byColdR',
    'byLightningR',
    'byMagicR',
    'byDiseaseR',
    'byPoisonR',
    'byLightR',
    'sBulk',
    'byAttackRange',
    'bySearchRange',
    'byTracingRange',
    'iMoney',
    'sItem',
    'byDirectAttack',
    'byMagicAttack',
    'SpawnCount'];
}
