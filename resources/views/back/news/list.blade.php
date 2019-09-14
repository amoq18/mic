@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container">
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Products</li>
			</ol>
		</nav>
	</section>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Liste des Evènements</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>Titres</th>
									<th>Contenus</th>
									<th>Photos</th>
									{{-- <th>Créer le</th> --}}
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($news as $new)
								<tr>
									<td>{{ $new->titre }}</td>
									<td>
										@if(strlen($new->contenue) <= 50)
											{{ $new->contenue }} 
										@else {{ substr($new->contenue, 100) }} ...
										@endif
									</td>
									<td>
										<a href="profile.html" class="avatar avatar-sm mr-2">
											<img class="avatar-img rounded-circle" src="{{ asset('assets/back/img/profiles/avatar-03.jpg') }}" alt="User Image">
										</a>
									</td>
									{{-- <td>1 Jan 2019</td> --}}
									<td class="text-right">
										<div class="actions">
											<a href="{{ route('back.news.edit', $new->id) }}" class="btn btn-sm bg-success-light mr-2">
												<i class="fe fe-pencil"></i> Editer
											</a>
											<a href="{{ route('back.news.delete', $new->id) }}" class="btn btn-sm bg-danger-light">
												<i class="fe fe-trash"></i> Supprimer
											</a>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection