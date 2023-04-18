<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNpcRequest;
use App\Http\Requests\StoreNpcposRequest;
use App\Models\kNPC;
use App\Models\Mob;
use App\Models\Npcpos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PagesController extends Controller
{

    # NPC CRUD SYSTEM
    public function npc_view()
    {
        $data = [
            'title' => 'Edit kNPC',
            'knpc' => kNPC::all(),
            'column' => Schema::getColumnListing('k_npc'),

        ];

        $column = Schema::Connection('mysql')->getColumnListing('k_npc');

        return view('pages.npc-view', $data);
    }

    public function npc_create()
    {
        return view('pages.npc-create');
    }

    public function npc_store(StoreNpcRequest $request)
    {
        $data = $request->validated();

        kNPC::create($data);

        return redirect('/npc')->with('test', 'NPC has been created!');
    }

    public function npc_edit($id)
    {
        $data = [
            'findNPC' => kNPC::find($id),

        ];
        return view('pages.npc-update', $data);
    }

    public function npc_update(StoreNpcRequest $request, $id)
    {
        $data = $request->validated();

        DB::table('k_npc')
            ->where('id', $id)
            ->update($data);

        return redirect("/npc/edit/{$id}")->with('test', 'NPC has been updated!');
    }

    public function npc_delete($id)
    {
        DB::table('k_npc')->where('id', $id)->delete();

        return redirect('/npc')->with('test', 'NPC ' . $id . ' has been deleted!');
    }

    #MOB CRUD SYSTEM

    public function mob_view()
    {
        $data = [
            'title' => 'Edit kMob',
            'kmob' => Mob::all(),

        ];

        return view('pages.mob-view', $data);
    }

    public function mob_create()
    {
        return view('pages.mob-create');
    }

    public function mob_store(StoreNpcRequest $request)
    {
        $data = $request->validated();

        Mob::create($data);

        return redirect('/mob')->with('test', 'Mob has been created!');
    }

    public function mob_edit($id)
    {
        $data = [
            'findMob' => Mob::find($id),

        ];
        return view('pages.mob-update', $data);
    }

    public function mob_update(StoreNpcRequest $request, $id)
    {
        $data = $request->validated();

        DB::table('k_monster')
            ->where('id', $id)
            ->update($data);

        return redirect("/mob/edit/{$id}")->with('test', 'Mob has been updated!');
    }

    public function mob_delete($id)
    {
        DB::table('k_monster')->where('id', $id)->delete();

        return redirect('/mob')->with('test', 'Mob ' . $id . 'has been deleted!');
    }

    #NPC POS CRUD SYSTEM

    public function npcpos_view()
    {
        $data = [
            'npcpos' => DB::table('k_npcpos')
                ->leftJoin('k_monster', function ($join) {
                    $join->on('k_npcpos.npcid', '=', 'k_monster.ssid')
                        ->where('k_npcpos.ActType', '<', 100);
                })
                ->leftJoin('k_npc', function ($join) {
                    $join->on('k_npcpos.npcid', '=', 'k_npc.ssid')
                        ->where('k_npcpos.ActType', '>=', 100);
                })
                ->select('k_npcpos.*', DB::raw('COALESCE(k_monster.strName, k_npc.strName) AS npcname'))
                ->addSelect(DB::raw('CASE
                            WHEN k_npcpos.ActType < 100 THEN k_monster.strName
                            ELSE k_npc.strName
                            END AS monstername'))
                ->get(),
        ];

        return view('pages.pos-view', $data);
    }

    public function npcpos_create()
    {
        return view('pages.pos-create');
    }

    public function npcpos_store(StoreNpcposRequest $request)
    {
        $data = $request->validated();

        Npcpos::create($data);

        return redirect('/pos')->with('test', 'NPC has been created!');
    }

    public function npcpos_edit($id)
    {
        $data = [
            'Npcpos' => Npcpos::leftJoin('k_monster', function ($join) {
                $join->on('k_npcpos.npcid', '=', 'k_monster.ssid')
                    ->where('k_npcpos.ActType', '<', 100);
            })
                ->leftJoin('k_npc', function ($join) {
                    $join->on('k_npcpos.npcid', '=', 'k_npc.ssid')
                        ->where('k_npcpos.ActType', '>=', 100);
                })
                ->select('k_npcpos.*', DB::raw('COALESCE(k_monster.strName, k_npc.strName) AS npcname'))
                ->addSelect(DB::raw('CASE
                                WHEN k_npcpos.ActType < 100 THEN k_monster.strName
                                ELSE k_npc.strName
                                END AS monstername'))
                ->find($id),
            'title' => 'Edit kNPC',
        ];
        return view('pages.pos-update', $data);
    }

    public function npcpos_update(StoreNpcposRequest $request, $id)
    {
        $data = $request->validated();

        DB::table('k_npcpos')
            ->where('id', $id)
            ->update($data);

        return redirect("/pos/edit/{$id}")->with('test', 'NPC has been updated!');
    }

    public function npcpos_delete($id)
    {
        DB::table('k_npcpos')->where('id', $id)->delete();

        return redirect('/pos')->with('test', 'NPC ' . $id . ' has been deleted!');
    }

    ##Testing below##
    public function test()
    {
        $strUserId = "elmorog"; // The character name that we want to get inventory
        $query = "SELECT strItem FROM userdata WHERE strUserId=?"; // SQL query for get strItem Field
        $results = DB::select($query, [$strUserId]); // Run the SQL command using Laravel DB Facade
        if (!empty($results)) {
            $obj = $results[0];
            for ($i = 0; $i < 50; $i++) {
                $hexVal = bin2hex($obj->strItem); // First we have to convert binary to hexadecimal
                $itemHex = substr($hexVal, $i * 16, 8); // In this line we get 8 char Item Hexes for every slot. $i*24 is 0,24,48.. etc.
                $durabilityHex = substr($hexVal, $i * 16 + 8, 4); // In this line we get 8 char Durability Hexes for every slot. $i*24+8 is 8,32,54.. etc.
                $countHex = substr($hexVal, $i * 16 + 12, 4); // In this line we get 8 char Durability Hexes for every slot. $i*24+12 is 12,36,58.. etc.
                $itemNum = hexdec(implode(array_reverse(str_split($itemHex, 2)))); // Here, first split every hex-bytes in itemHex variable, reverse it and implode it again. Lasly we should convert hex value to decimal value because in KO database item numbers is stored as int32(decimal)
                $durability = hexdec(implode(array_reverse(str_split($durabilityHex, 2))));
                $count = hexdec(implode(array_reverse(str_split($countHex, 2))));
                echo "Slot: " . $i;
                echo "  Item Number: " . $itemNum; // Print item number
                echo "  Durability: " . $durability; //Print durability
                echo "  Count: " . $count; //Print count
                $query2 = "SELECT strName FROM item WHERE Num=?"; // SQL query for get strName Field for given Item Number
                $results2 = DB::select($query2, [$itemNum]);
                echo ' Item Name: ';
                if (!empty($results2)) {
                    $obj2 = $results2[0];
                    echo $obj2->strName; //Print strName in Item Table
                } else {
                    echo 'EMPTY SLOT'; //If item is not found or slot is empty, print EMPTY SLOT
                }
                echo '<br/>';
            }
        }
    }
    

    public function test_edit()
    {
        return view('pages.test');
    }
}
