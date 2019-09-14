@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container">
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Virements</li>
			</ol>
		</nav>
	</section>
	
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Liste des virements en attente</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>Email</th>
									<th>Montant</th>
									<th>Code</th>
									<th>Pourcentage</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($virements as $virement)
								<tr>
									<td>{{ $virement->email }}</td>
									<td>{{ $virement->montant }}</td>
									<td>{{ $virement->code }}</td>
									<td>{{ $virement->percent }}</td>
									<td class="text-right">
										<div class="actions">
											<a href="{{ route('back.virements.edit', $virement->id) }}" class="btn btn-sm bg-success-light mr-2">
												<i class="fe fe-pencil"></i> Editer
											</a>
											<a href="{{ route('back.virements.delete', $virement->id) }}" class="btn btn-sm bg-danger-light">
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