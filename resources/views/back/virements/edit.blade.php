@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container-fluid">
				
					<!-- Page Header -->
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Virements</li>
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
					<form method="post" action="{{ route('back.virements.edit.post', $virement->id) }}">
						@csrf
						<div class="form-row">
							<div class="col-md-6 mb-3">
										<label for="percent">Pourcentage (%)<span style="color:red">*</span></label>
										<input type="number" class="form-control" id="percent" name="percent" value="{{ $virement->percent }}">
										<div class="valid-feedback">
											Looks good!
										</div>
									</div>

									<div class="col-md-6 mb-3">
										<label for="code">Code</label>
										<input type="text" class="form-control" id="code" name="code" value="{{ $virement->code }}" disabled>
										<div class="valid-feedback">
											Looks good!
										</div>
									</div>
						<a href="{{ route('back.virements.index') }}" style="margin-right: 10px" class="btn btn-primary">Annuler</a>
						<button class="btn btn-success" type="submit">Enrégistrer</button>
					</form>
				</div>
			</div>
			
		
		</div>
	</div>
	<!-- /Row -->
				
				</div>	
@endsection