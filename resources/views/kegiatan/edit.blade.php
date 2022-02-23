@extends('layouts.app')

@section('content')
    <div class="container">>
            <div class="row justify-content-center" style="margin-top: -70px">
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="alert alert-primary" role="alert">
                                <h3>Perhatian !!!</h3>
                                Silahkan isi data dibawah ini dengan benar.
                            </div>
                            <form action="{{route('updated.data.kegiatan', $kegiatan->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="">Nama Kegiatan</label>
                                             <input type="text" name="nama_activity" class="form-control" id="" value="{{$kegiatan->nama_activity}}">
                                         </div>
                                     </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Image</label>
                                                <input type="file" name="image" class="form-control" id="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">IDR</label>
                                                <input type="text" name="idr" class="form-control" id="" value="{{$kegiatan->idr}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="">Pilih Status</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Non-Aktif">Non-Aktif</option>
                                                    <option value="Cooming Soon">Cooming Soon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Keterangan</label>
                                                <textarea name="desc" id="" class="form-control">{{$kegiatan->desc}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Mulai</label>
                                                <input type="date" name="tgl_awal" class="form-control" id="" value="{{$kegiatan->tgl_awal}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Selesai</label>
                                                <input type="date" name="tgl_selesai" class="form-control" id="" value="{{$kegiatan->tgl_selesai}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label for="">Jumlah Peserta</label> 
                                               <input type="number" name="jumlah_peserta" id="" class="form-control" value="{{$kegiatan->jumlah_peserta}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                        </div>
                                 </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection