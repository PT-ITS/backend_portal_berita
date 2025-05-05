<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{

    public function list()
    {
        try {
            $data = Foto::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'foto_home' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_info' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_manfaat' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_order' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            $fotoHomePath = $request->file('foto_home')->store('foto_homes', 'public');
            $fotoInfoPath = $request->file('foto_info')->store('foto_infos', 'public');
            $fotoManfaatPath = $request->file('foto_manfaat')->store('foto_manfaats', 'public');
            $fotoOrderPath = $request->file('foto_order')->store('foto_orders', 'public');

            $data = Foto::create([
                'foto_home' => $fotoHomePath,
                'foto_info' => $fotoInfoPath,
                'foto_manfaat' => $fotoManfaatPath,
                'foto_order' => $fotoOrderPath,
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
                'foto_home' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_info' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_manfaat' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'foto_order' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            $data = Foto::find($id);
            if (!$data) {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }

            // If a new foto_home is uploaded, delete the old one and upload the new one
            if ($request->hasFile('foto_home')) {
                if ($data->foto_home && Storage::disk('public')->exists($data->foto_home)) {
                    Storage::disk('public')->delete($data->foto_home);
                }
                $fotoHomePath = $request->file('foto_home')->store('foto_homes', 'public');
                $data->foto_home = $fotoHomePath;
            }
            if ($request->hasFile('foto_info')) {
                if ($data->foto_info && Storage::disk('public')->exists($data->foto_info)) {
                    Storage::disk('public')->delete($data->foto_info);
                }
                $fotoInfoPath = $request->file('foto_info')->store('foto_infos', 'public');
                $data->foto_info = $fotoInfoPath;
            }
            if ($request->hasFile('foto_manfaat')) {
                if ($data->foto_manfaat && Storage::disk('public')->exists($data->foto_manfaat)) {
                    Storage::disk('public')->delete($data->foto_manfaat);
                }
                $fotoManfaatPath = $request->file('foto_manfaat')->store('foto_manfaats', 'public');
                $data->foto_manfaat = $fotoManfaatPath;
            }
            if ($request->hasFile('foto_order')) {
                if ($data->foto_order && Storage::disk('public')->exists($data->foto_order)) {
                    Storage::disk('public')->delete($data->foto_order);
                }
                $fotoOrderPath = $request->file('foto_order')->store('foto_orders', 'public');
                $data->foto_order = $fotoOrderPath;
            }

            $data->save();

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Foto::find($id);
            if ($data) {
                if ($data->foto_home && Storage::disk('public')->exists($data->foto_home)) {
                    Storage::disk('public')->delete($data->foto_home);
                }
                if ($data->foto_info && Storage::disk('public')->exists($data->foto_info)) {
                    Storage::disk('public')->delete($data->foto_info);
                }
                if ($data->foto_manfaat && Storage::disk('public')->exists($data->foto_manfaat)) {
                    Storage::disk('public')->delete($data->foto_manfaat);
                }
                if ($data->foto_order && Storage::disk('public')->exists($data->foto_order)) {
                    Storage::disk('public')->delete($data->foto_order);
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
