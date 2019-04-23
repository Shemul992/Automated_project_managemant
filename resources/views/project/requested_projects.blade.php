@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Latest project requests from students')


@section('content')

	<div class="row">
		<div class="col-10 offset-1">
			

			<h2> 4 project requests from students</h2>

			<hr>
			
			<!-- all projects-->
            {{-- project1 --}}

            

				<div class="row"> {{-- title--}}

					<div class="col-8">
						<h3> Video blurring</h3>
						

						<p> <span class="font-weight-bold"> Requested By </span> <a href="" style="text-decoration:none"> samir </a></p>
					</div>
					<div class="col-4"> {{-- buttons--}}
						<a href="" class="btn btn-primary text-light btn-block"> View </a>
								


					</div> {{-- col buttons--}}
					
				</div> <!-- row -->
				<div class="row"> {{-- title--}}

					<div class="col-8">
						<h3> Online gd system</h3>
						

						<p> <span class="font-weight-bold"> Requested By </span> <a href="" style="text-decoration:none"> samir </a></p>
					</div>
					<div class="col-4"> {{-- buttons--}}
						<a href="" class="btn btn-primary text-light btn-block"> View </a>
								


					</div> {{-- col buttons--}}
					
				</div> <!-- row -->
				<div class="row"> {{-- title--}}

					<div class="col-8">
						<h3> Web crawler</h3>

						<p> <span class="font-weight-bold"> Requested By </span> <a href="" style="text-decoration:none"> najnin </a></p>
					</div>
					<div class="col-4"> {{-- buttons--}}
						<a href="" class="btn btn-primary text-light btn-block"> View </a>
								


					</div> {{-- col buttons--}}
					
				</div> <!-- row -->
				<div class="row"> {{-- title--}}

					<div class="col-8">
						<h3> Hajj application developing</h3>

						<p> <span class="font-weight-bold"> Requested By </span> <a href="" style="text-decoration:none"> bida </a></p>
					</div>
					<div class="col-4"> {{-- buttons--}}
						<a href="" class="btn btn-primary text-light btn-block"> View </a>
								


					</div> {{-- col buttons--}}
					
				</div> <!-- row -->
				
				

			

		</div> {{-- col--}}
	</div> {{-- row --}}
	
@endsection


