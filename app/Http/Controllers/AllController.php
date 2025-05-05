<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Blog;
use App\Models\CaraOrder;
use App\Models\Faq;
use App\Models\Foto;
use App\Models\Harga;
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
            $harga = Harga::take(3)->get()->isEmpty() ? null : Harga::take(3)->get();
            $syarat_ketentuan = SyaratKetentuan::get()->isEmpty() ? null : SyaratKetentuan::get();
            $media_partner = MediaPartner::get()->isEmpty() ? null : MediaPartner::get();
            $cara_order = CaraOrder::get()->isEmpty() ? null : CaraOrder::get();
            $faq = Faq::get()->isEmpty() ? null : Faq::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                // 'beranda' => $beranda,
                'foto' => $foto,
                'info' => $info,
                'manfaat' => $manfaat,
                'keunggulan' => $keunggulan,
                'tentang_kami' => $tentang_kami,
                'harga' => $harga,
                'syarat_ketentuan' => $syarat_ketentuan,
                'media_partner' => $media_partner,
                'cara_order' => $cara_order,
                'faq' => $faq,
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
            $faq = Faq::get()->isEmpty() ? null : Faq::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'tentang_kami' => $tentang_kami,
                'faq' => $faq,
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

    public function paket()
    {
        try {
            $paket = Harga::get()->isEmpty() ? null : Harga::get();
            $syarat_ketentuan = SyaratKetentuan::get()->isEmpty() ? null : SyaratKetentuan::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'paket' => $paket,
                'syarat_ketentuan' => $syarat_ketentuan,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function blog()
    {
        try {
            $blog = Blog::get()->isEmpty() ? null : Blog::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'blog' => $blog,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }

    public function detailBlog($id)
    {
        try {
            // Fetch the blog by ID or return null if not found
            $blog = Blog::find($id);

            // Fetch the latest 3 blogs, or return an empty collection if none exist
            $latest_blog = Blog::latest()->take(3)->get();

            // Fetch all Layanan and Kontak data, or return an empty collection if none exist
            $layanan = Layanan::all();
            $kontak = Kontak::all();

            // Prepare response data
            return response()->json([
                'id' => '1',
                'data' => [
                    'blog' => $blog,
                    'latest_blog' => $latest_blog->isEmpty() ? null : $latest_blog,
                    'layanan' => $layanan->isEmpty() ? null : $layanan,
                    'kontak' => $kontak->isEmpty() ? null : $kontak,
                ],
            ]);
        } catch (\Throwable $th) {
            // Return error message if an exception occurs
            return response()->json([
                'id' => '0',
                'data' => $th->getMessage(),
            ]);
        }
    }
}
