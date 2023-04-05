<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNpcposRequest extends FormRequest
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
            'ZoneID' => 'required',
            'NpcID' => 'required',
            'ActType' => 'required',
            'LeftX' => 'required',
            'TopZ' => 'required',
            'RightX' => 'required',
            'BottomZ' => 'required',
            'NumNPC' => 'required',
            'RegTime' => 'required',
            'DotCnt' => 'required',
            'path' => 'required',
            'RegenType' => 'required',
            'DungeonFamily' => 'required',
            'SpecialType' => 'required',
            'TrapNumber' => 'required',
            'LimitMinZ' => 'required',
            'LimitMinX' => 'required',
            'LimitMaxZ' => 'required',
            'LimitMaxX' => 'required',
        ];
    }
}
