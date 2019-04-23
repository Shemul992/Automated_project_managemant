@extends('main') {{-- extends the structure of the main.blade.php--}}

@section('title', 'Individual Project Page')

@section('content')
     <div class = "row">

       <div class= "col-8 offset-2">

            <h3 class= "text-center" style ="margin-bottom:10px">  {{ $project->title }}</h3> {{-- job title php --}}
            

            <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Description</span>
              </div> 
              <div class="col-8">
                <p class="lead ">  {{ $project->description }}</p>

              </div>
            </div> <!-- row-->

           

            <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Skills</span>
              </div> 
              <div class="col-8">
                <p class="lead "> {{ $project->skills}} </p>
              </div>
            </div> <!-- row-->

            <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Deadline</span>
              </div> 
              <div class="col-8">
                <p class="lead "> {{ $project->deadline }}</p>

              </div>
            </div> <!-- row-->

             <div class="row">
              <div class="col-2">
                <span class="font-weight-bold text-center"> Posted By</span>
              </div> 
              <div class="col-8">
                <p class="lead "> 
                  <a href= "/profiles/{{$owner->id}}" class="text-muted text-info"> {{ $owner->first_name. ' ' }} {{ $owner->last_name}} </a>
                </p>

              </div>
            </div> <!-- row-->

            @if(Auth::check() == true && Auth::user()->role == 2 && is_null($application) == true)
                <!-- apply for a project (modal with form) -->
                
                   <button class = "btn btn-success btn-block" data-toggle ="modal" data-target ="#applyModal" type="submit"> Apply in this project</button>
      
                   <div class = "modal" id ="applyModal">
                      <div class = "modal-dialog modal-lg">
                        <div class = "modal-content">
                          <div class = "modal-header">
                            
                            <h5 class = "modal-title">Apply in this project</h5>
                          
                          </div> 
                          
                          <form method="POST" action="/apply-project/{{ $project->id}}">
                            @csrf
                            <div class = "modal-body">
                              

                                <div class = "form-group">
                                  <label for = "message_body">Write your message</label>
                                  <textarea class = "form-control input-lg" name ="message_body" type="text" required > </textarea>
                                </div>
                                
                              
                            </div> <!-- div = modal-body -->
                            <div class = "modal-footer">
                              <button class = "btn btn-secondary input-lg" data-dismiss="modal" > 
                              Close</button>
                              <button class = "btn btn-warning input-lg" type="submit"> Apply
                              </button>
                            </div> <!-- modal-footer -->
                          </form>
                        </div> <!-- modal-content -->
                        </div> <!--modal-dialog -->
                      
                      </div> <!--modal -->

           {{-- check if already applied a student --}}

           @elseif(Auth::check() == true && Auth::user()->role == 2 && is_null($application) == false)

             <a  href ="/delete-application/{{$project->id}}/{{ Auth::user()->id}}" class="btn btn-danger text-light btn-block"> Cancel application for this  project</a> 
            
            {{--DELETE a project by its owner--}}
            @elseif(Auth::check() == true && $owner->id == Auth::user()->id)

              <form method="POST" action="/projects/{{$project->id}}">
                
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <button class="btn btn-danger text-light btn-lg" type="submit"> Delete this project post</button>
                
              </form>
            @endif

            @if (Auth::check() == true && Auth::user()->role == 1 && Auth::user()->id == $owner->id)

              <a style ="margin-top:10px" class="btn btn-info btn-lg" href="/all-applicants/{{ $project->id }}"> See all applicants for this job </a>
            
            @endif



      </div> <!-- col -->

    </div> <!-- row-->


@endsection
  
