@extends('layout/main')

@section('teacher', 'active')

@section('isi')
<!-- MAIN -->
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Form Daftar Guru</h3>
                            <form method="post" action="/teacher">
                            @csrf
                                <div class="form-group">
                                    <label for="g_nama">Nama</label>
                                    <input type="text" class="form-control" id="g_nama" 
                                    placeholder="Masukkan Nama" name="g_nama">
                                </div>
                                <div class="form-group">
                                    <label for="g_email">Email</label>
                                    <input type="email" class="form-control" id="g_email" 
                                    placeholder="Masukkan Email" name="g_email">
                                </div>
                                <div class="form-group">
                                    <label for="g_no">No Hp</label>
                                    <input type="text" class="form-control" id="g_no" 
                                    placeholder="Masukkan No Hp" name="g_no">
                                </div>
                                <div class="form-group">
                                    <label for="g_alamat">Alamat</label>
                                    <input type="text" class="form-control" id="g_alamat" 
                                    placeholder="Masukkan Alamat" name="g_alamat">
                                </div>
                                <div class="form-group">
                                    <label for="g_jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="g_jenis_kelamin" 
                                    placeholder="Masukkan Jenis Kelamin" name="g_jenis_kelamin">
                                </div>

                                <button type="submit" class="btn-tambah btn-primary">Tambah Data!</button>
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