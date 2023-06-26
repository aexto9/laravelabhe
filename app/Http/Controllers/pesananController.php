<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Produk;
use App\Http\Models\KategoriProduk;
use App\Http\Models\Pesanan;
// use DB;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kategori_produk = KategoriProduk::all();

        // $produk = DB::table('produk')
        //     ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
        //     ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        //     ->get();
        $pesanan = DB::table('pesanan')
            ->select('pesanan.*')
            ->get();
        return view('admin.pesanan.pesanan', compact('pesanan'));
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('kategori_produk')->get();

        return view('admin.pesanan.create', compact('produk', 'pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesanan = new Pesanan;
        $pesanan->date = $request->date;
        $pesanan->nama = $request->nama;
        $pesanan->alamat = $request->alamat;
        $pesanan->nohp = $request->nohp;
        $pesanan->email = $request->email;
        $pesanan->j_pesan = $request->j_pesan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $pesanan = Pesanan::find($id); //select * from pesanan where id=1
        return view('admin.pesanan.view', ['pesanan' => $pesanan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pesanan = Pesanan::find($id); //select * from pesanan where id=1
        $kategori_pesanan = KategoriProduk::find($id);
        return view('admin.pesanan.edit', ['pesanan' => $pesanan, 'kategori_pesanan' => $kategori_pesanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $pesanan = new pesanan;
        $id = $request->id;
        $produk = Produk::find($id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete(); //delete from produk where id=1
        return redirect('/produk');
    }
}