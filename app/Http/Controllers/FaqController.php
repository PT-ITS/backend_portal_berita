<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function list()
    {
        try {
            $data = Faq::get();
            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'pertanyaan' => 'required',
                'jawaban' => 'required',
            ]);

            $data = Faq::create([
                'pertanyaan' => $validatedData['pertanyaan'],
                'jawaban' => $validatedData['jawaban'],
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
                'pertanyaan' => 'required',
                'jawaban' => 'required',
            ]);

            $data = Faq::where('id', $id)->update([
                'pertanyaan' => $validatedData['pertanyaan'],
                'jawaban' => $validatedData['jawaban'],
            ]);

            return response()->json(['id' => '1', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = Faq::find($id);
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
