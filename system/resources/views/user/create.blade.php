@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						DATA USER
						<form action="{{url('user')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">username</label>
						<input type="text" name="usernane" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">password</label>
						<input type="text" name="password" class="form-control">
					</div>
					
					</div>
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
				</div>
			</div>
		</div>		
	</div>

@endsection