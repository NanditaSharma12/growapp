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
		 <div class="m-b-md"><h3 class="m-b-none">Policy</h3></div>
	<section class="panel panel-default">
	<header class="panel-heading font-bold">Edit Policy <a class="btn btn-sm btn-default pull-right" href="{{ route('policy.index') }}" align="right"> Back</a></header>
     <div class="panel-body">
    <form action="{{ route('policy.update',$policy->id) }}" method="POST">
        @csrf
        @method('PUT')
   
          <div class="form-group"><label>Policy</label> <textarea type="text" name="text" class="form-control" placeholder="Policy" >{{ $policy->text }}</textarea></div>
	    
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

