@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <h2>Add New Blog</h2>
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
   

		<form action="{{ route('blogs.store') }}" method="POST">
		@csrf
         <div class="form-group"><label>Category</label> <input type="text" name="category" class="form-control" placeholder="Enter Category" /></div>
         <div class="form-group"><label>Title</label> <input type="text" name="title" class="form-control" placeholder="title" /></div>
	     <div class="form-group"><label>Added By</label> <input type="text" name="added_by" class="form-control" placeholder="added by" /></div>
		 
         <button type="submit" class="btn btn-sm btn-default">Submit</button>
		 <a class="btn btn-sm btn-default " href="{{ route('blogs.index') }}" align="right"> Back</a>
		</form>
	
</div>
@endsection

		