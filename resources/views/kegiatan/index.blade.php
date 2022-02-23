@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3" style="margin-top: -70px">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                        <a href="{{route('manage-kegiatan.add-form')}}" class="btn btn-success mr-2">Tambah Kegiatan</a>
                            <a href="{{route('cetak.semua-data.activity')}}" class="btn btn-outline-secondary">Cetak semua data</a>
                        </div>

                        <form action="{{route('cetak.activity')}}" method="get">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" name="awal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" name="akhir" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Cari Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="mt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Kegiatan</th>
                                            <th>Nama Kegiatan</th>
                                            <th>IDR</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kegiatans as $activity)
                                        <tr>
                                                <td>{{$activity->kode_activity}}</td>
                                                <td>{{$activity->nama_activity}}</td>
                                                <td>{{$activity->idr}}</td>
                                                <td>{{$activity->status}}</td> 
                                                <td>{{$activity->created_at->format('m-d-Y')}}</td> 
                                                
                                            <td>
                                                <form action="{{route('destroy.data.activity', $activity->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="{{route('manage-kegiatan.add-form.edit-kegiatan', $activity->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="submit" class=" btn btn-danger btn-sm">Delete</button>
                                            </form>
                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                       </div>
                  </div>
             </div>
         </div>
    </div>
@endsection