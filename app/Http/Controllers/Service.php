<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class Service extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::latest()->cursorPaginate(5);
		
        return view('services.index',compact('services'))
			->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
        $request->validate([
            'name' => 'required',
            'description' => 'required',
			//'icon' => 'required',
			'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			
        ]);
		
		$input = $request->all();
  
        if ($image = $request->file('icon')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['icon'] = "$profileImage";
        }
  
        Services::create($input);
     
        return redirect()->route('services.index')
                        ->with('success','service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    {
        return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
         return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
          $request->validate([
            'name' => 'required',
            'description' => 'required',
			//'icon' => 'required',
			
        ]);
    
		$input = $request->all();
  
        if ($image = $request->file('icon')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['icon'] = "$profileImage";
        }else{
            unset($input['icon']);
        }
	
        $service->update($input);
    
        return redirect()->route('services.index')
                        ->with('success','service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
         $service->delete();
    
        return redirect()->route('services.index')
                        ->with('success','service deleted successfully');
    }
}
