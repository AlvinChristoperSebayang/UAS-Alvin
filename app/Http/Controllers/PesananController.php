<?php

namespace App\Http\Controllers;
use App\Http\Requests\PesananFormRequest;
use Illuminate\Http\Request;
use App\Models\Pesanan;
class PesananController extends Controller
{

    public function index(){
        $pesanans = Pesanan::all();
        return view('pesanan.index',compact('pesanans'));
    }
    public function lihat(){
        $pesanans = Pesanan::all();
        return view('pesanan.lihat',compact('pesanans'));
    }
    public function create(){
        return view('pesanan.create');
    }
    public function store(PesananFormRequest $request){

        $data = $request->validated();

        $pesanan = Pesanan::create($data);
        return redirect('/add-pesanan')->with('message', 'Pesanan Added Succesfully');
    }
    public function edit($pesanan_id){
        $pesanan = Pesanan::find($pesanan_id);
        return view('pesanan.edit',compact('pesanan'));
    }
    public function editUser($pesanan_id){
        $pesanan = Pesanan::find($pesanan_id);
        return view('pesanan.editUser',compact('pesanan'));
    }

    public function update(PesananFormRequest $request,$pesanan_id){
        $data = $request->validated();

        $customer = Pesanan::where('id', $pesanan_id)->update([
            'nama' => $data['nama'],
            'namaMakanan' => $data['namaMakanan'],
            'porsi' => $data['porsi'],
            'alamat' => $data['alamat'],
            'jenisPembayaran' => $data['jenisPembayaran'],
            'keterangan' => $data['keterangan']

        ]);
        
        return redirect('/pesanans')->with('message', 'Pesanan Update Succesfully');
    }
    public function updateUser(PesananFormRequest $request,$pesanan_id){
        $data = $request->validated();

        $customer = Pesanan::where('id', $pesanan_id)->update([
            'nama' => $data['nama'],
            'namaMakanan' => $data['namaMakanan'],
            'porsi' => $data['porsi'],
            'alamat' => $data['alamat'],
            'jenisPembayaran' => $data['jenisPembayaran'],
            'keterangan' => $data['keterangan']

        ]);
        
        return redirect('/daftar-pesanan')->with('message', 'Pesanan Update Succesfully');
    }
    public function destroy($pesanan_id){

        $pesanan = Pesanan::find($pesanan_id)->delete();

        return redirect('/pesanans')->with('message', 'Pesanan Delete Succesfully');
    }
}
