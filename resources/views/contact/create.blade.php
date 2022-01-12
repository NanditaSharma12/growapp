@extends('index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <h2>Add New Contact</h2>
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
   

		<form action="{{ route('contact.store') }}" method="POST">
		@csrf
         <div class="form-group"><label>Phone</label> <input type="number" name="phone" class="form-control" placeholder="Enter Phone number" /></div>
         <div class="form-group"><label>Email</label> <input type="email" name="email" class="form-control" placeholder="Enter email" /></div>
	     <div class="form-group"><label>SMS</label> <input type="number" name="sms" class="form-control" placeholder="SMS" /></div>
	     <div class="form-group"><label>Address</label> <input type="text" name="address" class="form-control" placeholder="Address" /></div>
		 
         <button type="submit" class="btn btn-sm btn-default">Submit</button>
		 <a class="btn btn-sm btn-default " href="{{ route('contact.index') }}" align="right"> Back</a>
		</form>
	
</div>
@endsection

		