<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Chef_question;
use Livewire\Component;

class ChefQuestion extends Component
{
    // Deceling the varieable in public
    public $currentStep = 1;
    public $f_name;
    public $m_name;
    public $l_name;
    public $dob;
    public $month;
    public $year;
    public $current_des;
    public $specialisation;
    public $company_name;
    public $experience_year;
    public $state;
    public $location;
    public $job_describe;
    public $job_responsibilities;
    public $profile_image;
    public $college_name;
    public $college_degree;
    public $college_from;
    public $college_to;
    public $exp_job_employeer;
    public $exp_job_title;
    public $exp_from;
    public $exp_to;
    public $exp_job_description;
    public $resume;
    public $skills;
    public $accomplishment_title;
    public $accomplishment_description;
    public $accomplishment_upload;
    public $degree_name;
    public $degree_description;
    public $about_my_profile;
    public $status = 1;

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
        $this->currentStep = 2;
    }

    // Function - SecondStepSubmit
    public function secondStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'dob' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);

        // Next Step
        $this->currentStep = 3;
    }

    // Function - ThirdStepSubmit
    public function thirdStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'current_des' => 'required',
        ]);

        // Next Step
        $this->currentStep = 4;
    }

    // Function - FourthStepSubmit
    public function fourthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'specialisation' => 'required',
        ]);

        // Next Step
        $this->currentStep = 5;
    }

    // Function - FifthStepSubmit
    public function fifthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'company_name' => 'required',
        ]);

        // Next Step
        $this->currentStep = 6;
    }

    // Function - SixthStepSubmit
    public function sixthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'experience_year' => 'required',
        ]);

        // Next Step
        $this->currentStep = 7;
    }

    // Function - SeventhStepSubmit
    public function seventhStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'state' => 'required',
        ]);

        // Next Step
        $this->currentStep = 8;
    }

    // Function - EighthStepSubmit
    public function eighthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'location' => 'required',
        ]);

        // Next Step
        $this->currentStep = 9;
    }

    // Function - NinthStepSubmit
    public function ninthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'job_describe' => 'required',
        ]);

        // Next Step
        $this->currentStep = 10;
    }

    // Function - TenthStepSubmit
    public function tenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'job_responsibilities' => 'required',
        ]);

        // Next Step
        $this->currentStep = 11;
    }

    // Function - EleventhStepSubmit
    public function eleventhStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'profile_image' => 'required',
        ]);

        // Next Step
        $this->currentStep = 12;
    }

    // Function - TwelfthStepSubmit
    public function twelfthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'college_name' => 'required',
            'college_degree' => 'required',
            'college_from' => 'required',
            'college_to' => 'required',
        ]);

        // Next Step
        $this->currentStep = 13;
    }

    // Function - ThirteenthStepSubmit
    public function thirteenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'exp_job_employeer' => 'required',
            'exp_job_title' => 'required',
            'exp_from' => 'required',
            'exp_to' => 'required',
            'exp_job_description' => 'required',
        ]);

        // Next Step
        $this->currentStep = 14;
    }

    // Function - FourteenthStepSubmit
    public function fourteenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'resume' => 'required',
        ]);

        // Next Step
        $this->currentStep = 15;
    }

    // Function - fifteenStepSubmit
    public function fifteenStepSubmit()
    {
        //Data - Save
        $validatedData = $this->validate([
            'skills' => 'required',
        ]);

        // Next Step
        $this->currentStep = 16;
    }

    // Function - sixteenStepSubmit
    public function sixteenStepSubmit()
    {
        // Data- Step
        $validatedData = $this->validate([
            'accomplishment_title' => 'required',
            'accomplishment_description' => 'required',
            'accomplishment_upload' => 'required',
        ]);

        // Next Step
        $this->currentStep = 17;
    }

    // Function - seventeenStepSubmit
    public function seventeenStepSubmit()
    {
        $validatedData = $this->validate([
            'degree_name' =>'required',
            'degree_description' =>'required',
        ]);

        // Next Step
        $this->currentStep = 18;
    }

    // Function - eighteenStepSubmit
    public function eighteenStepSubmit()
    {
        $validatedData = $this->validate([
            'about_my_profile' => 'required',
            'status' => 'required',
        ]);

        // Next Step
        $this->currentStep = 19;
    }

    // Function - SubmitForm
    public function submitForm(Request $request)
    {
        Chef_question::create([
            'f_name' => $this->f_name,
            'm_name' => $this->m_name,
            'l_name' => $this->l_name,
            'dob' => $this->dob,
            'month' => $this->month,
            'year' => $this->year,
            'current_des' => $this->current_des,
            'specialisation' => $this->specialisation,
            'company_name' => $this->company_name,
            'experience_year' => $this->experience_year,
            'state' => $this->state,
            'location' => $this->location,
            'job_describe' => $this->job_describe,
            'job_responsibilities' => $this->job_responsibilities,
            'profile_image' => $this->profile_image,
            'college_name' => $this->college_name,
            'college_degree' => $this->college_degree,
            'college_from' => $this->college_from,
            'college_to' => $this->college_to,
            'exp_job_employeer' => $this->exp_job_employeer,
            'exp_job_title' => $this->exp_job_title,
            'exp_from' => $this->exp_from,
            'exp_to' => $this->exp_to,
            'exp_job_description' => $this->exp_job_description,
            'resume' => $this->resume,
            'skills' => $this->skills,
            'accomplishment_title' => $this->accomplishment_title,
            'accomplishment_description' => $this->accomplishment_description,
            'accomplishment_upload' => $this->accomplishment_upload,
            'degree_name' => $this->degree_name,
            'degree_description' => $this->degree_description,
            'about_my_profile' => $this->about_my_profile,
            'status' => $this->status,
            'user_id' => auth()->user()->id,
        ]);

        $this->currentStep = 20;
    }

    // Function - Back
    public function back($step)
    {
        // Back Step
        $this->currentStep = $step;
    }
}
