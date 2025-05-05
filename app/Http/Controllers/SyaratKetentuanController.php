<?php

namespace App\Http\Controllers;

use App\Models\SyaratKetentuan;
use Illuminate\Http\Request;

class SyaratKetentuanController extends Controller
{

    public function list()
    {
        try {
            $data = SyaratKetentuan::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'syarat' => 'required',
            ]);

            $data = SyaratKetentuan::create([
                'syarat' => $validatedData['syarat'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'syarat' => 'required',
            ]);

            $data = SyaratKetentuan::where('id', $id)->update([
                'syarat' => $validatedData['syarat'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = SyaratKetentuan::find($id);
            if ($data) {
                $data->delete();
                return response()->json(['id' => '1', 'data' => $data]);
            } else {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }
}
