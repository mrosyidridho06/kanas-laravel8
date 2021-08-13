@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Bahan') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="bahan_b">
                    <thead>
                        <tr>
                            <!-- <th>No.</th> -->
                            <th scope="row">Nama</th>
                            <th scope="row">Supplier</th>
                            <th scope="row">Jumlah</th>
                            <th scope="row">Satuan</th>
                            <th scope="row">Harga</th>
                            <th scope="row">Tanggal Input</th>
                            <th colspan="2" class="text-center">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
            </div>
    </div>

    <!-- End of Main Content -->
@endsection