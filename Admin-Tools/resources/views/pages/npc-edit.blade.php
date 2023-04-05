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
                        <form action="/knpc/update/{{$findNPC->id}}" method="post">
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
                                    <input type="text" size="7" name="sSid" placeholder="Sid" value="{{$findNPC->sSid}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Name</label>
                                    <input type="text" size="7" name="strName" placeholder="Name" value="{{$findNPC-> strName}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">sPid</label>
                                    <input type="text" size="7" name="sPid" placeholder="Pid" value="{{$findNPC->sPid }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Size</label>
                                    <input type="text" size="7" name="sSize" placeholder="Size" value="{{$findNPC->sSize }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Weapon1</label>
                                    <input type="text" size="7" name="iWeapon1" placeholder="Weapon1" value="{{$findNPC->iWeapon1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Weapon2</label>
                                    <input type="text" size="7" name="iWeapon2" placeholder="Weapon2" value="{{$findNPC-> iWeapon2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Group</label>
                                    <input type="text" size="7" name="byGroup" placeholder="group" value="{{$findNPC->byGroup }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">ActType</label>
                                    <input type="text" size="7" name="byActType" placeholder="ActType" value="{{$findNPC->byActType }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Type</label>
                                    <input type="text" size="7" name="byType" placeholder="Type" value="{{$findNPC->byType }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Family</label>
                                    <input type="text" size="7" name="byFamily" placeholder="Family" value="{{$findNPC->byFamily }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Rank</label>
                                    <input type="text" size="7" name="byRank" placeholder="Rank" value="{{$findNPC->byRank }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Title</label>
                                    <input type="text" size="7" name="byTitle" placeholder="Title" value="{{$findNPC->byTitle }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SellingGroup</label>
                                    <input type="text" size="7" name="iSellingGroup" placeholder="SellingGroup" value="{{$findNPC->iSellingGroup }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Level</label>
                                    <input type="text" size="7" name="sLevel" placeholder="Level" value="{{$findNPC->sLevel }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Exp</label>
                                    <input type="text" size="7" name="iExp" placeholder="Exp" value="{{$findNPC->iExp }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Loyalty</label>
                                    <input type="text" size="7" name="iLoyalty" placeholder="Loyalty" value="{{$findNPC->iLoyalty }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">HpPoint</label>
                                    <input type="text" size="7" name="iHpPoint" placeholder="HpPoint" value="{{$findNPC->iHpPoint }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MpPoint</label>
                                    <input type="text" size="7" name="sMpPoint" placeholder="MpPoint" value="{{$findNPC->sMpPoint }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Atk</label>
                                    <input type="text" size="7" name="sAtk" placeholder="Atk" value="{{$findNPC->sAtk }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Ac</label>
                                    <input type="text" size="7" name="sAc" placeholder="Ac" value="{{$findNPC->sAc }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">HitRate</label>
                                    <input type="text" size="7" name="sHitRate" placeholder="HitRate" value="{{$findNPC->sHitRate }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">EvadeRate</label>
                                    <input type="text" size="7" name="sEvadeRate" placeholder="EvadeRate" value="{{$findNPC->sEvadeRate }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Damage</label>
                                    <input type="text" size="7" name="sDamage" placeholder="Damage" value="{{$findNPC->sDamage }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">AttackDelay</label>
                                    <input type="text" size="7" name="sAttackDelay" placeholder="AttackDelay" value="{{$findNPC->sAttackDelay }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Speed1</label>
                                    <input type="text" size="7" name="bySpeed1" placeholder="Speed1" value="{{$findNPC->bySpeed1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Speed2</label>
                                    <input type="text" size="7" name="bySpeed2" placeholder="Speed2" value="{{$findNPC->bySpeed2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Standtime</label>
                                    <input type="text" size="7" name="sStandtime" placeholder="Standtime" value="{{$findNPC->sStandtime }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic1</label>
                                    <input type="text" size="7" name="iMagic1" placeholder="Magic1" value="{{$findNPC->iMagic1 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic2</label>
                                    <input type="text" size="7" name="iMagic2" placeholder="Magic2" value="{{$findNPC->iMagic2 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Magic3</label>
                                    <input type="text" size="7" name="iMagic3" placeholder="Magic3" value="{{$findNPC->iMagic3 }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">FireR</label>
                                    <input type="text" size="7" name="byFireR" placeholder="FireR" value="{{$findNPC->byFireR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">ColdR</label>
                                    <input type="text" size="7" name="byColdR" placeholder="ColdR" value="{{$findNPC->byColdR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LightningR</label>
                                    <input type="text" size="7" name="byLightningR" placeholder="LightningR" value="{{$findNPC->byLightningR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MagicR</label>
                                    <input type="text" size="7" name="byMagicR" placeholder="MagicR" value="{{$findNPC->byMagicR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DiseaseR</label>
                                    <input type="text" size="7" name="byDiseaseR" placeholder="DiseaseR" value="{{$findNPC->byDiseaseR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">PoisonR</label>
                                    <input type="text" size="7" name="byPoisonR" placeholder="PoisonR" value="{{$findNPC->byPoisonR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LightR</label>
                                    <input type="text" size="7" name="byLightR" placeholder="LightR" value="{{$findNPC->byLightR }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Bulk</label>
                                    <input type="text" size="7" name="sBulk" placeholder="Bulk" value="{{$findNPC->sBulk }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">AttackRange</label>
                                    <input type="text" size="7" name="byAttackRange" placeholder="AttackRange" value="{{$findNPC->byAttackRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SearchRange</label>
                                    <input type="text" size="7" name="bySearchRange" placeholder="SearchRange" value="{{$findNPC->bySearchRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">TracingRange</label>
                                    <input type="text" size="7" name="byTracingRange" placeholder="TracingRange" value="{{$findNPC->byTracingRange }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Money</label>
                                    <input type="text" size="7" name="iMoney" placeholder="Money" value="{{$findNPC->iMoney }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">Item</label>
                                    <input type="text" size="7" name="sItem" placeholder="Item" value="{{$findNPC->sItem }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DirectAttack</label>
                                    <input type="text" size="7" name="byDirectAttack" placeholder="DirectAttack" value="{{$findNPC->byDirectAttack }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">MagicAttack</label>
                                    <input type="text" size="7" name="byMagicAttack" placeholder="MagicAttack" value="{{$findNPC->byMagicAttack }}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SpawnCount</label>
                                    <input type="text" size="7" name="SpawnCount" placeholder="SpawnCount" value="{{$findNPC->SpawnCount }}">
                                </div>
                            </div>
                            <div>
                                <div><a class="btn btn-primary btn-sm mt-2 float-start" href="/knpc">Return</a>
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