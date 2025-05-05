<?php

namespace App\Http\Controllers;

use App\Models\MediaPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaPartnerController extends Controller
{

    public function list()
    {
        try {
            $data = MediaPartner::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Upload the logo
            $logoPath = $request->file('logo')->store('logos', 'public');

            $data = MediaPartner::create([
                'nama' => $validatedData['nama'],
                'logo' => $logoPath,
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
                'nama' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data = MediaPartner::find($id);
            if (!$data) {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }

            // If a new logo is uploaded, delete the old one and upload the new one
            if ($request->hasFile('logo')) {
                if ($data->logo && Storage::disk('public')->exists($data->logo)) {
                    Storage::disk('public')->delete($data->logo);
                }
                $logoPath = $request->file('logo')->store('logos', 'public');
                $data->logo = $logoPath;
            }

            $data->nama = $validatedData['nama'];
            $data->save();

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = MediaPartner::find($id);
            if ($data) {
                // Delete the logo from storage
                if ($data->logo && Storage::disk('public')->exists($data->logo)) {
                    Storage::disk('public')->delete($data->logo);
                }

                $data->delete();
                return response()->json(['id' => '1', 'data' => 'Data deleted successfully']);
            } else {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }
}
