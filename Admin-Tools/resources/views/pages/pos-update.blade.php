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
                        <form action="/pos/update/{{$Npcpos->id}}" method="post">
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
                                    <label for="">NPC Name</label>
                                    <input type="text" size="7" name="strName" placeholder="strName" value="{{$Npcpos->monstername}}" disabled>
                                </div>
                                <div class="col-sm-2 mb-2">
                                    <label for="">Zone ID</label>
                                    <input type="text" size="7" name="ZoneID" placeholder="ZoneID" value="{{$Npcpos->ZoneID}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">NPC ID</label>
                                    <input type="text" size="7" name="NpcID" placeholder="NpcID" value="{{$Npcpos->NpcID}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">ActType</label>
                                    <input type="text" size="7" name="ActType" placeholder="ActType" value="{{$Npcpos->ActType}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LeftX</label>
                                    <input type="text" size="7" name="LeftX" placeholder="LeftX" value="{{$Npcpos->LeftX}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">TopZ</label>
                                    <input type="text" size="7" name="TopZ" placeholder="TopZ" value="{{$Npcpos->TopZ}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">RightX</label>
                                    <input type="text" size="7" name="RightX" placeholder="RightX" value="{{$Npcpos->RightX}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">BottomZ</label>
                                    <input type="text" size="7" name="BottomZ" placeholder="BottomZ" value="{{$Npcpos->BottomZ}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">NumNPC</label>
                                    <input type="text" size="7" name="NumNPC" placeholder="NumNPC" value="{{$Npcpos->NumNPC}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">RegTime</label>
                                    <input type="text" size="7" name="RegTime" placeholder="RegTime" value="{{$Npcpos->RegTime}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DotCnt</label>
                                    <input type="text" size="7" name="DotCnt" placeholder="DotCnt" value="{{$Npcpos->DotCnt}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">path</label>
                                    <input type="text" size="7" name="path" placeholder="path" value="{{$Npcpos->path}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">RegenType</label>
                                    <input type="text" size="7" name="RegenType" placeholder="RegenType" value="{{$Npcpos->RegenType}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">DungeonFamily</label>
                                    <input type="text" size="7" name="DungeonFamily" placeholder="DungeonFamily" value="{{$Npcpos->DungeonFamily}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">SpecialType</label>
                                    <input type="text" size="7" name="SpecialType" placeholder="SpecialType" value="{{$Npcpos->SpecialType}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">TrapNumber</label>
                                    <input type="text" size="7" name="TrapNumber" placeholder="TrapNumber" value="{{$Npcpos->TrapNumber}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LimitMinZ</label>
                                    <input type="text" size="7" name="LimitMinZ" placeholder="LimitMinZ" value="{{$Npcpos->LimitMinZ}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LimitMinX</label>
                                    <input type="text" size="7" name="LimitMinX" placeholder="LimitMinX" value="{{$Npcpos->LimitMinX}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LimitMaxZ</label>
                                    <input type="text" size="7" name="LimitMaxZ" placeholder="LimitMaxZ" value="{{$Npcpos->LimitMaxZ}}">
                                </div>
                                <div class="col-sm-2 mb-2">
                                <label for="">LimitMaxX</label>
                                    <input type="text" size="7" name="LimitMaxX" placeholder="LimitMaxX" value="{{$Npcpos->LimitMaxX}}">
                                </div>
                            </div>
                            <div>
                                <div><a class="btn btn-primary btn-sm mt-2 float-start" href="/pos">Return</a>
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