@extends('layout/main')

@section('kelas', 'active')

@section('isi')
<!-- MAIN -->
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Kelas</h3>
						</div>
                    </div>
                    <div class="panel panel-headline">
						<div class="panel-heading">
							<a href="/kelas/create" class="btn btn-primary pb-3">Tambah Data Mahasiswa</a>
							<table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Id Siswa</th>
                                        <th scope="col">Id Guru</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Tanggal Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $kelas as $kls )
                                    <tr>
                                        <th scope="row">{{ $loop->iteration}}</th>
                                        <td>{{ $kls->id_siswa}}</td>
                                        <td>{{ $kls->id_guru}}</td>
                                        <td>{{ $kls->nama_kelas}}</td>
                                        <td>{{ $kls->tanggal_kelas}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
					
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection