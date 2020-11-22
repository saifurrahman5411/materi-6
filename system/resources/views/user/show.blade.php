@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data user
					</div>
					<div class="card-body">
						<h4>{{$user->nama}}</h4><hr>
						<p>Rp. {{number_format($user->harga)}} |
							Stok : {{$user->stok}} |
							Berat : {{$user->berat}} gr |
							Warna : {{$user->warna}} 
						</p>
						{!! nl2br($user->deskripsi) !!}
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection