<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function barangs() {
        $indexall = DB::table('barangs')
                        ->leftJoin(
                            'mereks',
                            'mereks.id',
                            '=',
                            'barangs.merek_id'
                        )
                        ->select(
                            'mereks.id',
                            'mereks.name',
                            'barangs.merek_id',
                            'barangs.name',
                        )
                        ->get();

        return response()->json($indexall);
    }
    
    public function merek() {
        $merek = Merek::with('barangs')->get();

        return response()->json($merek);
    }
    public function store(Request $request) {
        $get_id = Merek::insertGetId(
            ['name' => $request->name]
        );
        $barangs = $request->barangs;
        foreach($barangs as $barang) {
            Barang::create([
                'name' => $barang['name'],
                'merek_id' =>(string) $get_id
            ]);
        }
    }
}
