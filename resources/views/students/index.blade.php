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
							<h1 class="panel-title">Daftar Siswa</h3>
							
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<a href="/students/create" class="btn btn-primary pb-3">Tambah Data Mahasiswa</a>										
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							
							<ul class="list-group my-5 py-5">
								@foreach( $students as $stdn )  
								<li class="list-group-item d-flex justify-content-between align-items-center">
									{{ $stdn->s_nama}}
									<a href="/students/{{ $stdn->id}}" class="badge badge-info">detail</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection