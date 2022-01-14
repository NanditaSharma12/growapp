@extends('index')
   
@section('content')
   
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
  
   <section class="vbox">
  <section>
   <section class="hbox stretch">
   <section id="content">
      <section class="vbox">
        <section class="scrollable padder">
		<div class="row">
			<div class="col-md-6">
		 <div class="m-b-md"><h3 class="m-b-none">Blogs</h3></div>
	<section class="panel panel-default">
	<header class="panel-heading font-bold">Edit blog <a class="btn btn-sm btn-default pull-right" href="{{ route('blogs.index') }}" align="right"> Back</a></header>
     <div class="panel-body">
    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="form-group"><label>Category</label> <input type="text" name="category" class="form-control" placeholder="Enter name" value="{{ $blog->category }}" /></div>
         <div class="form-group"><label>Title</label> <input type="text" name="title" class="form-control" placeholder="Description" value="{{ $blog->title }}"/></div>
	     <div class="form-group"><label>Added By</label> <input type="text" name="added_by" class="form-control" value="{{ $blog->added_by }}" /></div>
		 
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

