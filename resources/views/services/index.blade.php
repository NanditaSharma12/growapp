@extends('index')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   
  <section class="panel panel-default">
	<h2 align="center">Services </h2>
		<div class="row wrapper">
             <div class="col-sm-5 m-b-xs"> <select class="input-sm form-control input-s-sm inline v-middle"> <option value="0">Bulk action</option> <option value="1">Delete selected</option> <option value="2">Bulk edit</option> <option value="3">Export</option> </select>                                        
				<button class="btn btn-sm btn-default">Apply</button> 
			 </div>
             <div class="col-sm-3">
                 <div class="input-group"> 
					<input type="text" class="input-sm form-control" placeholder="Search">
					<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button> </span>
				 </div>
             </div>
          </div>
		<div class="table-responsive">
			<table class="table table-striped b-t b-light">
				<thead>
                           <tr>
                               <th width="20"><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox"><i></i></label></th>
                               <th class="th-sortable" data-toggle="class">No <span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> </th>
                               <th>Name</th>
                               <th>Description</th>
                               <th>Icon</th>
							   <th width="280px">Action</th>
                           </tr>
                 </thead>
                 <tbody>
					@foreach ($services as $service)
                     <tr>
                         <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                         <td>{{ ++$i }}</td>
                         <td>{{ $service->name }}</td>
                         <td>{{ $service->description }}</td>
						 <td>{{ $service->icon }}</td>
                         <td>
						<form action="{{ route('services.destroy',$service->id) }}" method="POST">

                                    <!--   <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a> -->
                         
                                       <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
                         
                                       @csrf
                                       @method('DELETE')
                         
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
						</td>
                      </tr>
					  @endforeach
                 </tbody>
               </table>
		</div>
		<footer class="panel-footer">
			<div class="row">
                 <div class="col-sm-4 hidden-xs"> <select class="input-sm form-control input-s-sm inline v-middle"> <option value="0">Bulk action</option> <option value="1">Delete selected</option> <option value="2">Bulk edit</option> <option value="3">Export</option> </select>                                            <button class="btn btn-sm btn-default">Apply</button> </div>
					<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> </div>
						<div class="col-sm-4 text-right text-center-xs">
							<ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
						</div>
			</div>
           </footer>
</section>

    {!! $services->links() !!}
      
@endsection


					