<?php

namespace App\Http\Livewire;
use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
	public $services, $name, $description, $icon, $service_id;
    public $isOpen = 0;
	
    public function render()
    {
		$this->services = Services::all();
        return view('livewire.services');
    }

	 public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->descripton = '';
		$this->icon = '';
        $this->service_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
			'icon' => 'required',
        ]);
   
        Services::updateOrCreate(['id' => $this->service_id], [
            'name' => $this->name,
            'description' => $this->description,
			'icon' => $this->icon
        ]);
  
        session()->flash('message', 
            $this->service_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $services = Services::findOrFail($id);
        $this->service_id = $id;
        $this->name = $services->name;
        $this->description = $services->description;
		$this->icon = $services->icon;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Services::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }



}

