@extends('index')
   
@section('content')

      
   <section class="vbox">
  <section>
   <section class="hbox stretch">
   <section id="content">
      <section class="vbox">
        <section class="scrollable padder">
		<div class="row">
			<div class="col-md-6">
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

		 <div class="m-b-md"><h3 class="m-b-none">Services</h3></div>
	<section class="panel panel-default">
	<header class="panel-heading font-bold">Edit Service <a class="btn btn-sm btn-default pull-right" href="{{ route('services.index') }}" align="right"> Back</a></header>
     <div class="panel-body">
    <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="form-group"><label>Name</label> <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $service->name }}" /></div>
		 <div class="form-group"><label>Description</label> <textarea type="text" name="description" class="form-control" placeholder="Description" >{{ $service->description }}</textarea></div>
	    
	     <div class="form-group"><label>Icon</label> <input type="file" name="icon" class="form-control" placeholder="Enter icon" value="" />	
		 <img src="/uploads/{{ $service->icon }}" width="300px">
		 </div>
		 
		 <button type="submit" class="btn btn-sm btn-default">Submit</button>
		 
    </form>
	</div>
      </section>
	  </div>
	  </div>
      </section>
      </section>
      </section>
      </section>
      </section>
      </section>

@endsection

