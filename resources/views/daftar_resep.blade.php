@extends('layouts.admin')
@section('main-content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Resep</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover display" id="bahan_b">
                <thead>
                    <tr>
                        <!-- <th>No.</th> -->
                        <th scope="row">Kode Resep</th>
                        <th scope="row">Nama Resep</th>
                        <th scope="row">Total</th>
                        <th scope="row">Tanggal</th>
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