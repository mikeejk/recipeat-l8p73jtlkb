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
        ]);

        // Next Step
        $this->currentStep = 19;
    }

    // // Function - SubmitForm
    // public function submitForm()
    // {
    //     Chef_question::create([
    //         'name' => $this->name,
    //         'gender' => $this->gender,
    //         'mail' => $this->mail,
    //         'cookinglevel' => $this->cookinglevel,
    //         'allergies' => $this->allergies,
    //         'lifestyle' => $this->lifestyle,
    //         'ingredient' => $this->ingredient,
    //         'pref_cuisine' => $this->pref_cuisine,
    //         'goals' => $this->goals,
    //         'serving_time' => $this->serving_time,
    //         'cho_cook' => $this->cho_cook,
    //         'fav_ingr' => $this->fav_ingr,
    //         'level_spici' => $this->level_spici,
    //         'time_spend' => $this->time_spend,
    //         // 'user_id' => $this->user_id,
    //     ]);

    //     // Next Step
    //     $this->currentStep = 20;
    // }

    // Function - Back
    public function back($step)
    {
        // Back Step
        $this->currentStep = $step;
    }
}
