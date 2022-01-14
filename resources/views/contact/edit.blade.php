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
		 <div class="m-b-md"><h3 class="m-b-none">Contact</h3></div>
	<section class="panel panel-default">
	<header class="panel-heading font-bold">Edit Contact <a class="btn btn-sm btn-default pull-right" href="{{ route('contact.index') }}" align="right"> Back</a></header>
     <div class="panel-body">
    <form action="{{ route('contact.update',$contact->id) }}" method="POST">
        @csrf
        @method('PUT')
   
		 
		 <div class="form-group"><label>Phone</label> <input type="text" name="phone" class="form-control" placeholder="Enter Phone number" value="{{ $contact->phone }}"/></div>
         <div class="form-group"><label>Email</label> <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $contact->email }}"/></div>
	     <div class="form-group"><label>SMS</label> <input type="text" name="sms" class="form-control" placeholder="SMS" value="{{ $contact->sms }}"/></div>
	     <div class="form-group"><label>Address</label> <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $contact->address }}"/></div>
		 
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

