@extends('layout/main')

@section('students', 'active')

@section('isi')
<!-- MAIN -->
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Form Ubah Daftar Siswa</h3>
						</div>
                    </div>
                    <div class="panel panel-headline">
						<div class="panel-heading">
                            <form method="post" action="/students/{{ $student->id }}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="s_nama">Nama</label>
                                    <input type="text" class="form-control" id="s_nama" 
                                    placeholder="Masukkan Nama" name="s_nama" value="{{ $student->s_nama }}">
                                <div class="form-group">
                                    <label for="s_email">Email</label>
                                    <input type="email" class="form-control" id="s_email" 
                                    placeholder="Masukkan Email" name="s_email" value="{{ $student->s_email }}">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="s_no">No Hp</label>
                                    <input type="text" class="form-control" id="s_no" 
                                    placeholder="Masukkan No Hp" name="s_no" value="{{ $student->s_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="s_alamat">Alamat</label>
                                    <input type="text" class="form-control" id="s_alamat" 
                                    placeholder="Masukkan Alamat" name="s_alamat" value="{{ $student->s_alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="s_jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="s_jenis_kelamin" 
                                    placeholder="Masukkan Jenis Kelamin" name="s_jenis_kelamin" value="{{ $student->s_jenis_kelamin }}">
                                </div>

                                <button type="submit" class="btn-tambah btn-primary">Ubah Data!</button>
                            </form>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
					
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection