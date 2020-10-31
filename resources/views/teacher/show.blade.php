@extends('layout/main')


@section('teacher', 'active')

@section('isi')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Guru</h3>
                </div>
            </div>
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $teacher->g_nama }}</h5>
                            <br>
                            <p class="card-text">{{ $teacher->g_email }}</p>
                            <p class="card-text">{{ $teacher->g_alamat }}</p>
                            <p class="card-text">{{ $teacher->g_no }}</p>
                            <p class="card-text">{{ $teacher->g_jenis_kelamin }}</p>
                            
                            <div class="btn">
                                <a href="{{ $teacher->id }}/edit" type="submit" class="btn btn-primary">Edit</a>
                                <form action="{{ $teacher->id }}" method="post" class="btn">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="/students" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

@endsection


