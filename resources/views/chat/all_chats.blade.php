@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', '| All conversations')

@section('content')

		<div class="col-8 offset-3">
			
			<h2 class=""> Conversations with <span class="text-primary"> sir_rajoni </span></h2>
			<br>

			<div class="row">
				<div class="col-8">
					<form>
                  		 <div class = "input-group">
            				<input name ="message" class = "form-control input-lg" type="text" placeholder="Write your messages">
			
				    		<span class = "input-group-append">
					  			<button class="btn btn-success input-lg" type="submit">Send</button>
				    		</span>
        				 </div> {{-- input-group--}}
            		</form>
				</div> {{--col  --}}
			</div> {{-- row --}}
			<br> <br>

			{{-- show chat --}}

			<div class="row">
				<div class="col-3">
					<p class="font-weight-bold"> Admin:</p>
				</div> {{-- col (show name of the person) --}}

				<div class="col-9">
					<p class="lead"> 
						With almost nine months of amazing warmth
					</p>
				</div> {{-- col--}}
			</div> {{-- row --}}

			<div class="row">
				<div class="col-3">
					<p class="font-weight-bold"> Admin:</p>
				</div> {{-- col (show name of the person) --}}

				<div class="col-9">
					<p class="lead"> 
						With almost nine months of amazing warmth
					</p>
				</div> {{-- col--}}
			</div> {{-- row --}}

			<div class="row">
				<div class="col-3">
					<p class="font-weight-bold"> ashik53:</p>
				</div> {{-- col (show name of the person) --}}

				<div class="col-9">
					<p class="lead"> 
						With almost nine months of amazing warmth
					</p>
				</div> {{-- col--}}
			</div> {{-- row --}}
			{{-- All chats --}}
		</div> <!-- col-->
	


@endsection