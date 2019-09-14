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
					<h4 class="card-title">Liste des Clients</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>Noms</th>
									<th>Emails</th>
									<th>Pays</th>
									<th>Mode de paiement</th>
									<th>Code bancaire</th>
									<th>Montants</th>
									<th>Devises</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($clients as $client)
									<tr>
										<td>{{ $client->nom }}</td>
										<td>{{ $client->email }}</td>
										<td>{{ $client->pays }}</td>
										<td>{{ $client->modePaie }}</td>
										<td>{{ $client->codeBancaire }}</td>
										<td>{{ $client->montantCompte }}</td>
										<td>{{ $client->devise }}</td>
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