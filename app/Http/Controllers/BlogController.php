<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function list()
    {
        try {
            $data = Blog::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'header' => 'required',
                'tanggal' => 'required',
                'kategori' => 'required',
                'isi' => 'required',
            ]);

            // Upload the foto
            $fotoPath = $request->file('foto')->store('fotos', 'public');

            $data = Blog::create([
                'foto' => $fotoPath,
                'header' => $validatedData['header'],
                'tanggal' => $validatedData['tanggal'],
                'kategori' => $validatedData['kategori'],
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
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'header' => 'required',
                'tanggal' => 'required',
                'kategori' => 'required',
                'isi' => 'required',
            ]);

            $data = Blog::find($id);
            if (!$data) {
                return response()->json(['id' => '0', 'data' => 'Data Tidak Ditemukan']);
            }

            // If a new foto is uploaded, delete the old one and upload the new one
            if ($request->hasFile('foto')) {
                if ($data->foto && Storage::disk('public')->exists($data->foto)) {
                    Storage::disk('public')->delete($data->foto);
                }
                $fotoPath = $request->file('foto')->store('fotos', 'public');
                $data->foto = $fotoPath;
            }

            $data->header = $validatedData['header'];
            $data->tanggal = $validatedData['tanggal'];
            $data->kategori = $validatedData['kategori'];
            $data->isi = $validatedData['isi'];
            $data->save();

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Blog::find($id);
            if ($data) {
                // Delete the foto from storage
                if ($data->foto && Storage::disk('public')->exists($data->foto)) {
                    Storage::disk('public')->delete($data->foto);
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
