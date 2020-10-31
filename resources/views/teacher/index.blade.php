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
							<h3 class="panel-title">Daftar Guru</h3>
							<!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
                            
                        </div>
                    </div>
                    <div class="panel panel-headline">
						<div class="panel-heading">
                        <a href="/teacher/create" class="btn btn-primary pb-3">Tambah Data Guru</a>		
                            @if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							
							<ul class="list-group">
								@foreach( $teachers as $thr )  
								<li class="list-group-item d-flex justify-content-between align-items-center">
									{{ $thr->g_nama}}
									<a href="/teacher/{{ $thr->id}}" class="badge badge-info">detail</a>
								</li>
								@endforeach
							</ul>
                        </div>
					</div>
					<!-- END OVERVIEW -->
					
					
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection