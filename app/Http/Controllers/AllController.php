<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Foto;
use App\Models\Info;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Manfaat;
use App\Models\MediaPartner;
use App\Models\SyaratKetentuan;
use App\Models\SyaratKetentuan2;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class AllController extends Controller
{

    public function home()
    {
        try {
            // $beranda = Beranda::first() ?? null;
            $foto = Foto::first() ?? null;
            $info = Info::first() ?? null;
            $manfaat = Manfaat::get()->isEmpty() ? null : Manfaat::get();
            $keunggulan = Keunggulan::get()->isEmpty() ? null : Keunggulan::get();
            $tentang_kami = TentangKami::first() ?? null;
            $syarat_ketentuan = SyaratKetentuan::get()->isEmpty() ? null : SyaratKetentuan::get();
            $media_partner = MediaPartner::get()->isEmpty() ? null : MediaPartner::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                // 'beranda' => $beranda,
                'foto' => $foto,
                'info' => $info,
                'manfaat' => $manfaat,
                'keunggulan' => $keunggulan,
                'tentang_kami' => $tentang_kami,
                'syarat_ketentuan' => $syarat_ketentuan,
                'media_partner' => $media_partner,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function about()
    {
        try {
            $tentang_kami = TentangKami::first() ?? null;
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'tentang_kami' => $tentang_kami,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function syarat()
    {
        try {
            $syarat = SyaratKetentuan2::get()->isEmpty() ? null : SyaratKetentuan2::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'syarat' => $syarat,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function berita()
    {
        try {
            $berita = Berita::get()->isEmpty() ? null : Berita::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'berita' => $berita,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function detailBerita($id)
    {
        try {
            $berita = Berita::find($id);

            $berita->jumlah_lihat += 1;
            $berita->save();

            $latest_berita = Berita::latest()->take(3)->get();

            $layanan = Layanan::all();
            $kontak = Kontak::all();

            return response()->json([
                'id' => '1',
                'data' => [
                    'berita' => $berita,
                    'latest_berita' => $latest_berita->isEmpty() ? null : $latest_berita,
                    'layanan' => $layanan->isEmpty() ? null : $layanan,
                    'kontak' => $kontak->isEmpty() ? null : $kontak,
                ],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'id' => '0',
                'data' => $th->getMessage(),
            ]);
        }
    }
}
