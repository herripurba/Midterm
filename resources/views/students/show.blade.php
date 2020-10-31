@extends('layout/main')


@section('students', 'active')

@section('isi')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Siswa</h3>
                </div>
            </div>
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->s_nama }}</h5>
                            <br>
                            <p class="card-text">{{ $student->s_email }}</p>
                            <p class="card-text">{{ $student->s_alamat }}</p>
                            <p class="card-text">{{ $student->s_no }}</p>
                            <p class="card-text">{{ $student->s_jenis_kelamin }}</p>
                            
                            <div class="btn">
                                <a href="{{ $student->id }}/edit" type="submit" class="btn btn-primary">Edit</a>
                                <form action="/students/{{ $student->id }}" method="post" class="btn">
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


