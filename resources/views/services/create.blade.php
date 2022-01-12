@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <h2>Add New service</h2>
            </div>
           
        </div>
    </div>
   
  
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
   

		<form action="{{ route('services.store') }}" method="POST">
		@csrf
         <div class="form-group"><label>Name</label> <input type="text" name="name" class="form-control" placeholder="Enter name" /></div>
         <div class="form-group"><label>Description</label> <input type="text" name="description" class="form-control" placeholder="Description" /></div>
	     <div class="form-group"><label>Icon</label> <input type="text" name="icon" class="form-control"  /></div>
		 
         <button type="submit" class="btn btn-sm btn-default">Submit</button>
		 <a class="btn btn-sm btn-default " href="{{ route('services.index') }}" align="right"> Back</a>
		</form>
	
</div>
@endsection

		