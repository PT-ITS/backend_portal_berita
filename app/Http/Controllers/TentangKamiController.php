<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{

    public function list()
    {
        try {
            $data = TentangKami::get();
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
                'visi' => 'required',
                'misi' => 'required',
                'nilai_perusahaan' => 'required',
                'project_complete' => 'required',
                'happy_client' => 'required',
                'awards_winning' => 'required',
                'success_rate' => 'required',
            ]);

            $data = TentangKami::create([
                'header' => $validatedData['header'],
                'isi' => $validatedData['isi'],
                'visi' => $validatedData['visi'],
                'misi' => $validatedData['misi'],
                'nilai_perusahaan' => $validatedData['nilai_perusahaan'],
                'project_complete' => $validatedData['project_complete'],
                'happy_client' => $validatedData['happy_client'],
                'awards_winning' => $validatedData['awards_winning'],
                'success_rate' => $validatedData['success_rate'],
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
                'visi' => 'required',
                'misi' => 'required',
                'nilai_perusahaan' => 'required',
                'project_complete' => 'required',
                'happy_client' => 'required',
                'awards_winning' => 'required',
                'success_rate' => 'required',
            ]);

            $data = TentangKami::where('id', $id)->update([
                'header' => $validatedData['header'],
                'isi' => $validatedData['isi'],
                'visi' => $validatedData['visi'],
                'misi' => $validatedData['misi'],
                'nilai_perusahaan' => $validatedData['nilai_perusahaan'],
                'project_complete' => $validatedData['project_complete'],
                'happy_client' => $validatedData['happy_client'],
                'awards_winning' => $validatedData['awards_winning'],
                'success_rate' => $validatedData['success_rate'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = TentangKami::find($id);
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
