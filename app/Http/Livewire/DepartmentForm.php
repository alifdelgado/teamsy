<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentForm extends Component
{
    public string $department;
    public bool $success = false;

    public function submit()
    {
        Department::create([
            'name' => $this->department
        ]);
        $this->success = true;
    }

    public function mount($departmentId = null)
    {
        if($departmentId) {
            $this->department = Department::findOrFail($departmentId)->name;
        }
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
