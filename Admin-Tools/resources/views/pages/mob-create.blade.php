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
                        NPC Create
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mob.store') }}" method="post">
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
                                    <input type="text" size="7" name="sSid" placeholder="Sid">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="strName" placeholder="Name">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sPid" placeholder="Pid">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sSize" placeholder="Size">
                                </div>

                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iWeapon1" placeholder="Weapon1">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iWeapon2" placeholder="Weapon2">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byGroup" placeholder="group">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byActType" placeholder="ActType">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byType" placeholder="Type">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byFamily" placeholder="Family">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byRank" placeholder="Rank">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byTitle" placeholder="Title">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iSellingGroup" placeholder="SellingGroup">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sLevel" placeholder="Level">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iExp" placeholder="Exp">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iLoyalty" placeholder="Loyalty">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iHpPoint" placeholder="HpPoint">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sMpPoint" placeholder="MpPoint">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sAtk" placeholder="Atk">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sAc" placeholder="Ac">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sHitRate" placeholder="HitRate">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sEvadeRate" placeholder="EvadeRate">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sDamage" placeholder="Damage">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sAttackDelay" placeholder="AttackDelay">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="bySpeed1" placeholder="Speed1">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="bySpeed2" placeholder="Speed2">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sStandtime" placeholder="Standtime">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iMagic1" placeholder="Magic1">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iMagic2" placeholder="Magic2">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iMagic3" placeholder="Magic3">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byFireR" placeholder="FireR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byColdR" placeholder="ColdR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byLightningR" placeholder="LightningR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byMagicR" placeholder="MagicR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byDiseaseR" placeholder="DiseaseR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byPoisonR" placeholder="PoisonR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byLightR" placeholder="LightR">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sBulk" placeholder="Bulk">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byAttackRange" placeholder="AttackRange">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="bySearchRange" placeholder="SearchRange">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byTracingRange" placeholder="TracingRange">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="iMoney" placeholder="Money">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="sItem" placeholder="Item">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byDirectAttack" placeholder="DirectAttack">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="byMagicAttack" placeholder="MagicAttack">
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <input type="text" size="7" name="SpawnCount" placeholder="SpawnCount">
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