@extends('layouts.admin')
@section('main-content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penggajian</h1>
        <div align="right" class="pt-1">
            <a href="" class="btn btn-success btn-xs"><i class="fa fa-sync"></i></a>
            <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary"><i class="fa fa-plus"> Tambah Gaji</i></button>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover display" id="tb_gaji">
                <thead>
                    <tr>
                        <!-- <th>No.</th> -->
                        <th scope="row">Nama</th>
                        <th scope="row">Tanggal Priode</th>
                        <th scope="row">Jumlah Kehadiran</th>
                        <th scope="row">BPJS</th>
                        <th scope="row">Bonus</th>
                        <th scope="row">Lembur</th>
                        <th scope="row">Gaji Pokok</th>
                        <th scope="row">Potongan</th>
                        <th scope="row">Total Gaji</th>
                        <th colspan="2" class="text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection