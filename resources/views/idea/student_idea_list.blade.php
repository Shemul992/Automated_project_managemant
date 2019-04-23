@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Latest project requests from students')


@section('content')

	<div class="row">
		<div class="col-10 offset-1">
			

			<h2> 3 project ideas from students</h2>

			<div class = "card border-success"> 

              <div class = "card-body"> 
                  <p> Automated vehicle system. </p>
                  <p> Submitted by   <span class="text-success"> riju </span>   </p>
                  <form>
                      <button class="btn btn-info"> view</button>
                  </form>
              </div>
            </div>
			<div class = "card border-success"> 

              <div class = "card-body"> 
                  <p> Automated vehicle system. </p>
                  <p> Submitted by   <span class="text-success"> riju </span>   </p>
                  <form>
                      <button class="btn btn-info"> view</button>
                  </form>
              </div>
            </div>
            <div class = "card border-success"> 

              <div class = "card-body"> 
                  <p> CAutomated vehicle system </p>
                  <p> Submitted by   <span class="text-success"> riju </span>   </p>
                  <form>
                      <button class="btn btn-info"> view</button>
                  </form>
              </div>
            </div>
			
				

			

		</div> {{-- col--}}
	</div> {{-- row --}}
	
@endsection


