<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNpcRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sSid' => 'required',
            'strName' => 'required',
            'sPid' => 'required',
            'sSize' => 'required',
            'iWeapon1' => 'required',
            'iWeapon2' => 'required',
            'byGroup' => 'required',
            'byActType' => 'required',
            'byType' => 'required',
            'byFamily' => 'required',
            'byRank' => 'required',
            'byTitle' => 'required',
            'iSellingGroup' => 'required',
            'sLevel' => 'required',
            'iExp' => 'required',
            'iLoyalty' => 'required',
            'iHpPoint' => 'required',
            'sMpPoint' => 'required',
            'sAtk' => 'required',
            'sAc' => 'required',
            'sHitRate' => 'required',
            'sEvadeRate' => 'required',
            'sDamage' => 'required',
            'sAttackDelay' => 'required',
            'bySpeed1' => 'required',
            'bySpeed2' => 'required',
            'sStandtime' => 'required',
            'iMagic1' => 'required',
            'iMagic2' => 'required',
            'iMagic3' => 'required',
            'byFireR' => 'required',
            'byColdR' => 'required',
            'byLightningR' => 'required',
            'byMagicR' => 'required',
            'byDiseaseR' => 'required',
            'byPoisonR' => 'required',
            'byLightR' => 'required',
            'sBulk' => 'required',
            'byAttackRange' => 'required',
            'bySearchRange' => 'required',
            'byTracingRange' => 'required',
            'iMoney' => 'required',
            'sItem' => 'required',
            'byDirectAttack' => 'required',
            'byMagicAttack' => 'required',
            'SpawnCount' => 'required',
        ];
    }
}
