<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    // Method GET
    public function getSetoran()
    {
        return response()->json([
            'message' => 'berhasil',
            'id_setoran' => 58,
            'id_user' => 3441,
            'id_juz' => 30
        ]);
    }

    // Method POST (create)
    public function createData(Request $request)
    {
        return response()->json([
            'data' => 100,
            'status' => 'berhasil'
        ]);
    }

    // Method POST (delete)
    public function deleteData(Request $request)
    {
        return response()->json([
            'data' => 0,
            'status' => 'berhasil hapus'
        ]);
    }
}