@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container-fluid">
				
					<!-- Page Header -->
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Products</li>
			</ol>
		</nav>
	</section>
	<!-- /Page Header -->
	
	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
		
			<!-- Custom Boostrap Validation -->
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Custom Bootstrap Form Validation</h4>
				</div>
				<div class="card-body">
					<form method="post" action="{{ route('back.virements.edit', $data->id) }}">
						@csrf
						<div class="form-row">
							<div class="col-md-6 mb-3">
										<label for="titre">Titre <span style="color:red">*</span></label>
										<input type="text" class="form-control" id="titre" name="titre" placeholder="First name" value="{{ $data->titre }}">
										<div class="valid-feedback">
											Looks good!
										</div>
									</div>

									<div class="col-md-6 mb-3">
										<label for="contenue">Contenu <span style="color:red">*</span></label>
										<input type="text" class="form-control" id="contenue" name="contenue" placeholder="First name" value="{{ $data->contenue }}">
										<div class="valid-feedback">
											Looks good!
										</div>
									</div>

							<div class="custom-file">
								<input type="file" class="custom-file-input" id="photo" name="photo" value="{{ $data->photo }}">
								<label class="custom-file-label" for="photo">Choisir une image...</label>
								<div class="invalid-feedback">Fichier invalide</div>
							</div>
						<a href="#" style="margin-right: 10px" class="btn btn-primary">Annuler</a>
						<button class="btn btn-success" type="submit">Enrégistrer</button>
					</form>
				</div>
			</div>
			
		
		</div>
	</div>
	<!-- /Row -->
				
				</div>	
@endsection