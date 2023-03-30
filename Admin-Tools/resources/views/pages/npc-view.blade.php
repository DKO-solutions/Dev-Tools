@extends('App')
@section('content')
  
<main>
    <div class="container-fluid">
        <table id="myTable" class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>sSid</th>
                    <th>strName</th>
                    <th>sPid</th>
                    <th>sSize</th>
                    <th>iWeapon1</th>
                    <th>iWeapon2</th>
                    <th>byGroup</th>
                    <th>byActType</th>
                    <th>byType</th>
                    <th>byFamily</th>
                    <th>byRank</th>
                    <th>byTitle</th>
                    <th>iSellingGroup</th>
                    <th>sLevel</th>
                    <th>iExp</th>
                    <th>iLoyalty</th>
                    <th>iHpPoint</th>
                    <th>sMpPoint</th>
                    <th>sAtk</th>
                    <th>sAc</th>
                    <th>sHitRate</th>
                    <th>sEvadeRate</th>
                    <th>sDamage</th>
                    <th>sAttackDelay</th>
                    <th>bySpeed1</th>
                    <th>bySpeed2</th>
                    <th>sStandtime</th>
                    <th>iMagic1</th>
                    <th>iMagic2</th>
                    <th>iMagic3</th>
                    <th>byFireR</th>
                    <th>byColdR</th>
                    <th>byLightningR</th>
                    <th>byMagicR</th>
                    <th>byDiseaseR</th>
                    <th>byPoisonR</th>
                    <th>byLightR</th>
                    <th>sBulk</th>
                    <th>byAttackRange</th>
                    <th>bySearchRange</th>
                    <th>byTracingRange</th>
                    <th>iMoney</th>
                    <th>sItem</th>
                    <th>byDirectAttack</th>
                    <th>byMagicAttack</th>
                    <th>SpawnCount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($knpc as $npc)
                <tr>
                    <td>{{ $npc->sSid }}</td>
                    <td>{{ $npc->strName }}</td>
                    <td>{{ $npc->sPid }}</td>
                    <td>{{ $npc->sSize }}</td>
                    <td>{{ $npc->iWeapon1 }}</td>
                    <td>{{ $npc->iWeapon2 }}</td>
                    <td>{{ $npc->byGroup }}</td>
                    <td>{{ $npc->byActType }}</td>
                    <td>{{ $npc->byType }}</td>
                    <td>{{ $npc->byFamily }}</td>
                    <td>{{ $npc->byRank }}</td>
                    <td>{{ $npc->byTitle }}</td>
                    <td>{{ $npc->iSellingGroup }}</td>
                    <td>{{ $npc->sLevel }}</td>
                    <td>{{ $npc->iExp }}</td>
                    <td>{{ $npc->iLoyalty }}</td>
                    <td>{{ $npc->iHpPoint }}</td>
                    <td>{{ $npc->sMpPoint }}</td>
                    <td>{{ $npc->sAtk }}</td>
                    <td>{{ $npc->sAc }}</td>
                    <td>{{ $npc->sHitRate }}</td>
                    <td>{{ $npc->sEvadeRate }}</td>
                    <td>{{ $npc->sDamage }}</td>
                    <td>{{ $npc->sAttackDelay }}</td>
                    <td>{{ $npc->bySpeed1 }}</td>
                    <td>{{ $npc->bySpeed2 }}</td>
                    <td>{{ $npc->sStandtime }}</td>
                    <td>{{ $npc->iMagic1 }}</td>
                    <td>{{ $npc->iMagic2 }}</td>
                    <td>{{ $npc->iMagic3 }}</td>
                    <td>{{ $npc->byFireR }}</td>
                    <td>{{ $npc->byColdR }}</td>
                    <td>{{ $npc->byLightningR }}</td>
                    <td>{{ $npc->byMagicR }}</td>
                    <td>{{ $npc->byDiseaseR }}</td>
                    <td>{{ $npc->byPoisonR }}</td>
                    <td>{{ $npc->byLightR }}</td>
                    <td>{{ $npc->sBulk }}</td>
                    <td>{{ $npc->byAttackRange }}</td>
                    <td>{{ $npc->bySearchRange }}</td>
                    <td>{{ $npc->byTracingRange }}</td>
                    <td>{{ $npc->iMoney }}</td>
                    <td>{{ $npc->sItem }}</td>
                    <td>{{ $npc->byDirectAttack }}</td>
                    <td>{{ $npc->byMagicAttack }}</td>
                    <td>{{ $npc->SpawnCount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</main>

@stop