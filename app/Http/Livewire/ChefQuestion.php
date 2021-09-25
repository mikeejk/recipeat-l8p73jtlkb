<?php

namespace App\Http\Livewire;
use App\Models\Chef_question;
use Livewire\Component;


class ChefQuestion extends Component
{
    // Deceling the varieable in public
    public $currentStep = 1;
    public $f_name;
    public $m_name;
    public $l_name;

    // Function - Render
    public function render()
    {
        // rend the view file
        return view('livewire.chef-question');
    }

    // Function - FirstStepSubmit
    public function firstStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'f_name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required'
        ]);

        // Next Step
        $this->currentStep =2;
    }

    // Function - Back
    public function back($step)
    {
        // Back Step
        $this->currentStep = $step;
    }


}
