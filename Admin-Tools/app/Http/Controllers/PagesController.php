<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreNpcRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\kNPC;

class PagesController extends Controller
{
    public function knpc_view()
    {
        $data = [
            'title' => 'Edit kNPC',
            'knpc' => kNPC::all(),
            'column' => Schema::getColumnListing('k_npc'),

        ];

        $column = Schema::Connection('mysql')->getColumnListing('k_npc');

        return view('pages.npc-view', $data);
    }

    public function knpc_edit($id)
    {
        $data = [
            'findNPC' => kNPC::find($id),

        ];
        return view('pages.npc-edit', $data);
    }

    public function knpc_update(StoreNpcRequest $request, $id)
    {
        $data = $request->validated();

        DB::table('k_npc')
            ->where('id', $id)
            ->update($data);
    
        return redirect("/knpc/edit/{$id}")->with('test', 'NPC has been updated!');
    }

}
