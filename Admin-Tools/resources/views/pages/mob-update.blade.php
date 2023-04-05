@extends('App')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <img style="margin-left:40%;" src="https://picsum.photos/200/200" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header text-center">
                        NPC Edit
                    </div>
                    <div class="card-body">
                        <form action="/mob/update/{{$findMob->id}}" method="post">
                            @csrf
                            @if ($message = Session::get('test'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            @error('sSid')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row" style="margin-left: -1.5em;">
                                <div class="col-sm-2 mb-2">
                                <label for="">sSid</label>
                                    <input type="text" size="7" name="sSid" placeholder="Sid" value="{{$findMob->sSid}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Name</label>
                                    <input type="text" size="7" name="strName" placeholder="Name" value="{{$findMob-> strName}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">sPid</label>
                                    <input type="text" size="7" name="sPid" placeholder="Pid" value="{{$findMob->sPid }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Size</label>
                                    <input type="text" size="7" name="sSize" placeholder="Size" value="{{$findMob->sSize }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Weapon1</label>
                                    <input type="text" size="7" name="iWeapon1" placeholder="Weapon1" value="{{$findMob->iWeapon1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Weapon2</label>
                                    <input type="text" size="7" name="iWeapon2" placeholder="Weapon2" value="{{$findMob-> iWeapon2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Group</label>
                                    <input type="text" size="7" name="byGroup" placeholder="group" value="{{$findMob->byGroup }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">ActType</label>
                                    <input type="text" size="7" name="byActType" placeholder="ActType" value="{{$findMob->byActType }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Type</label>
                                    <input type="text" size="7" name="byType" placeholder="Type" value="{{$findMob->byType }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Family</label>
                                    <input type="text" size="7" name="byFamily" placeholder="Family" value="{{$findMob->byFamily }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Rank</label>
                                    <input type="text" size="7" name="byRank" placeholder="Rank" value="{{$findMob->byRank }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Title</label>
                                    <input type="text" size="7" name="byTitle" placeholder="Title" value="{{$findMob->byTitle }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SellingGroup</label>
                                    <input type="text" size="7" name="iSellingGroup" placeholder="SellingGroup" value="{{$findMob->iSellingGroup }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Level</label>
                                    <input type="text" size="7" name="sLevel" placeholder="Level" value="{{$findMob->sLevel }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Exp</label>
                                    <input type="text" size="7" name="iExp" placeholder="Exp" value="{{$findMob->iExp }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Loyalty</label>
                                    <input type="text" size="7" name="iLoyalty" placeholder="Loyalty" value="{{$findMob->iLoyalty }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">HpPoint</label>
                                    <input type="text" size="7" name="iHpPoint" placeholder="HpPoint" value="{{$findMob->iHpPoint }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MpPoint</label>
                                    <input type="text" size="7" name="sMpPoint" placeholder="MpPoint" value="{{$findMob->sMpPoint }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Atk</label>
                                    <input type="text" size="7" name="sAtk" placeholder="Atk" value="{{$findMob->sAtk }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Ac</label>
                                    <input type="text" size="7" name="sAc" placeholder="Ac" value="{{$findMob->sAc }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">HitRate</label>
                                    <input type="text" size="7" name="sHitRate" placeholder="HitRate" value="{{$findMob->sHitRate }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">EvadeRate</label>
                                    <input type="text" size="7" name="sEvadeRate" placeholder="EvadeRate" value="{{$findMob->sEvadeRate }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Damage</label>
                                    <input type="text" size="7" name="sDamage" placeholder="Damage" value="{{$findMob->sDamage }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">AttackDelay</label>
                                    <input type="text" size="7" name="sAttackDelay" placeholder="AttackDelay" value="{{$findMob->sAttackDelay }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Speed1</label>
                                    <input type="text" size="7" name="bySpeed1" placeholder="Speed1" value="{{$findMob->bySpeed1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Speed2</label>
                                    <input type="text" size="7" name="bySpeed2" placeholder="Speed2" value="{{$findMob->bySpeed2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Standtime</label>
                                    <input type="text" size="7" name="sStandtime" placeholder="Standtime" value="{{$findMob->sStandtime }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic1</label>
                                    <input type="text" size="7" name="iMagic1" placeholder="Magic1" value="{{$findMob->iMagic1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic2</label>
                                    <input type="text" size="7" name="iMagic2" placeholder="Magic2" value="{{$findMob->iMagic2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic3</label>
                                    <input type="text" size="7" name="iMagic3" placeholder="Magic3" value="{{$findMob->iMagic3 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">FireR</label>
                                    <input type="text" size="7" name="byFireR" placeholder="FireR" value="{{$findMob->byFireR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">ColdR</label>
                                    <input type="text" size="7" name="byColdR" placeholder="ColdR" value="{{$findMob->byColdR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LightningR</label>
                                    <input type="text" size="7" name="byLightningR" placeholder="LightningR" value="{{$findMob->byLightningR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MagicR</label>
                                    <input type="text" size="7" name="byMagicR" placeholder="MagicR" value="{{$findMob->byMagicR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DiseaseR</label>
                                    <input type="text" size="7" name="byDiseaseR" placeholder="DiseaseR" value="{{$findMob->byDiseaseR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">PoisonR</label>
                                    <input type="text" size="7" name="byPoisonR" placeholder="PoisonR" value="{{$findMob->byPoisonR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LightR</label>
                                    <input type="text" size="7" name="byLightR" placeholder="LightR" value="{{$findMob->byLightR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Bulk</label>
                                    <input type="text" size="7" name="sBulk" placeholder="Bulk" value="{{$findMob->sBulk }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">AttackRange</label>
                                    <input type="text" size="7" name="byAttackRange" placeholder="AttackRange" value="{{$findMob->byAttackRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SearchRange</label>
                                    <input type="text" size="7" name="bySearchRange" placeholder="SearchRange" value="{{$findMob->bySearchRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">TracingRange</label>
                                    <input type="text" size="7" name="byTracingRange" placeholder="TracingRange" value="{{$findMob->byTracingRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Money</label>
                                    <input type="text" size="7" name="iMoney" placeholder="Money" value="{{$findMob->iMoney }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Item</label>
                                    <input type="text" size="7" name="sItem" placeholder="Item" value="{{$findMob->sItem }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DirectAttack</label>
                                    <input type="text" size="7" name="byDirectAttack" placeholder="DirectAttack" value="{{$findMob->byDirectAttack }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MagicAttack</label>
                                    <input type="text" size="7" name="byMagicAttack" placeholder="MagicAttack" value="{{$findMob->byMagicAttack }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SpawnCount</label>
                                    <input type="text" size="7" name="SpawnCount" placeholder="SpawnCount" value="{{$findMob->SpawnCount }}">
                                </div>
                            </div>
                            <div>
                                <div><a class="btn btn-primary btn-sm mt-2 float-start" href="/mob">Return</a>
                                <button class="btn btn-primary btn-sm mt-2 float-end" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop