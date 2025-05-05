<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use Illuminate\Http\Request;

class HargaController extends Controller
{

    public function list()
    {
        try {
            $data = Harga::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_paket' => 'required',
                'isi_paket' => 'required',
                'harga' => 'required',
            ]);

            $data = Harga::create([
                'nama_paket' => $validatedData['nama_paket'],
                'isi_paket' => $validatedData['isi_paket'],
                'harga' => $validatedData['harga'],
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
                'nama_paket' => 'required',
                'isi_paket' => 'required',
                'harga' => 'required',
            ]);

            $data = Harga::where('id', $id)->update([
                'nama_paket' => $validatedData['nama_paket'],
                'isi_paket' => $validatedData['isi_paket'],
                'harga' => $validatedData['harga'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Harga::find($id);
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
