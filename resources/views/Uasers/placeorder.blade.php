@extends('Uasers.include.master')

@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="customer_image">
				    <div class="container">
				        <div class="row">
				            <div class="col-md-12">
				                <div class="main-content-user text-center">
				                	<h4>Select type of service</h4>
				                	<p class="user-para">Please select the appropriate service type that match your requirement.</p>
				                	<p class="last-para">If you are unsure about the type of service please contact us.</p>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>	
			</div>
		</div>
		
		
			<div class="row">
				<div class="col-md-12">
					<div class="card">
					  <div class="card-body">
					  	<form action="" method="">
						  	<div class="row  text-center">
						  		<div class="col-md-4">
						  			<img src="{{asset('services/InvisibleMannequin.png')}}" class="selectable">
						  			<p>Invisible Mannequin</p>
						  		</div>
						  		<div class="col-md-4">
						  			<img src="{{asset('services/BGRemoveShadow.png')}}"  class="selectable">
						  			<p>Background Remove</p>
						  		</div>
						  		<div class="col-md-4">
						  			<img src="{{asset('services/ColorCorrection.png')}}"  class="selectable">
						  			<p>Color Correction</p>
						  		</div>
						  		<div class="col-md-4">
						  			<img src="{{asset('services/Masking.png')}}" class="selectable">
						  			<p>Image Masking</p>
						  		</div>
						  		<div class="col-md-4">
						  			<img src="{{asset('services/Retouch.png')}}"  class="selectable">
						  			<p>Image Retouch</p>
						  		</div>
						  		<div class="col-md-4">
						  			<img src="{{asset('services/ClippingPathSilo.png')}}"  class="selectable">
						  			<p>Clipping path</p>
						  		</div>
						  		<div class="col-md-12">
						  			<button class="btn btn-success custom-next-btn">Next</button>
						  		</div>
						  	</div>
					  	</form>
					  </div>
					</div>
				</div>
			</div>
		


@endsection

@section('script')
	<script>
		$("img.selectable").imgCheckbox();
	</script>

@endsection