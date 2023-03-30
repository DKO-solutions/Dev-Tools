<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\kNPC;

class PagesController extends Controller
{
    public function kNPC_view()
    {
        $data = [
            'title' => 'Edit kNPC',
            'knpc' => kNPC::all(),
            'column' => Schema::getColumnListing('k_npc'),
        ];

        $column = Schema::Connection('mysql')->getColumnListing('k_npc');

        return view('pages.npc-view', $data);
    }

    public function test()
    {
        return view('pages.test');
    }

}
