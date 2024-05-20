<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    public function fileUpload()
{
    return view('file-upload', [
        'filename' => null,
    ]);
}
    public function prosesFileUpload(Request $request){
        $request->validate([
            'nama_gambar' => 'required',
            'berkas' => 'required|file|image|max:500',]);


        $extFile = $request->berkas->extension();
        $namaFile = $request->nama_gambar.".".$extFile;
        // $path = request()->berkas->store('uploads');
        
        $path = $request->berkas->move('gambar',$namaFile);
        // $path = str_replace("\\", "//", $path);
        // echo "variabel path berisi : $path <br>";
    
        // $path = request()->berkas->storeAs('public',$namaFile);
        // echo "proses upload berhasil, file berada di : $path";
        // echo $request->berkas->getClientOriginalName()."lolos validasi";
    
        $pathBaru = asset('gambar/'.$namaFile);
    
        echo "proses upload berhasil, data disimpan pada : <a href='$pathBaru'>$namaFile</a>";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$namaFile</a>";
        echo "<img src='$pathBaru' alt='gambar'>";
    
        // dump($request->berkas);
        // dump($request->file('file'));
        // return "Pemrosesan file upload disini";
    
        // if($request->hasFile('berkas'))
        // {
        //     echo "path() : ".$request->berkas->path();
        //     echo "<br>";
        //     echo "extension() : ".$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension() : ".$request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType() : ".$request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getSize() : ".$request->berkas->getSize();
        // }else{
        //     echo "Tidak ada berkas yang diupload";
        // }
    }
}
