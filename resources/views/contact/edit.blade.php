@extends('index')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Contact</h2>
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
  
    <form action="{{ route('contact.update',$contact->id) }}" method="POST">
        @csrf
        @method('PUT')
   
		 
		 <div class="form-group"><label>Phone</label> <input type="text" name="phone" class="form-control" placeholder="Enter Phone number" value="{{ $contact->phone }}"/></div>
         <div class="form-group"><label>Email</label> <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $contact->email }}"/></div>
	     <div class="form-group"><label>SMS</label> <input type="text" name="sms" class="form-control" placeholder="SMS" value="{{ $contact->sms }}"/></div>
	     <div class="form-group"><label>Address</label> <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $contact->address }}"/></div>
		 
		 <button type="submit" class="btn btn-sm btn-default">Submit</button>
		 <a class="btn btn-sm btn-default " href="{{ route('contact.index') }}" align="right"> Back</a>
    </form>
</div>
@endsection

