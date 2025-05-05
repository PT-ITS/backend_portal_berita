<?php

namespace App\Http\Controllers;

use App\Models\Manfaat;
use Illuminate\Http\Request;

class ManfaatController extends Controller
{

    public function list()
    {
        try {
            $data = Manfaat::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'header' => 'required',
                'isi' => 'required',
            ]);

            $data = Manfaat::create([
                'header' => $validatedData['header'],
                'isi' => $validatedData['isi'],
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
                'header' => 'required',
                'isi' => 'required',
            ]);

            $data = Manfaat::where('id', $id)->update([
                'header' => $validatedData['header'],
                'isi' => $validatedData['isi'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Manfaat::find($id);
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
