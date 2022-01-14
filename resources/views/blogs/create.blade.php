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
   

		 <div class="m-b-md"><h3 class="m-b-none">Blog</h3></div>
	<section class="panel panel-default">
	<header class="panel-heading font-bold">Add New blog <a class="btn btn-sm btn-default pull-right" href="{{ route('blogs.index') }}" align="right"> Back</a></header>
     <div class="panel-body">
		<form action="{{ route('blogs.store') }}" method="POST">
		@csrf
         <div class="form-group"><label>Category</label> <input type="text" name="category" class="form-control" placeholder="Enter Category" /></div>
         <div class="form-group"><label>Title</label> <input type="text" name="title" class="form-control" placeholder="title" /></div>
	     <div class="form-group"><label>Added By</label> <input type="text" name="added_by" class="form-control" placeholder="added by" /></div>
		 
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

		