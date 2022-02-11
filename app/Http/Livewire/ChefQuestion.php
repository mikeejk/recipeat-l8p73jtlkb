<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Chef_question;
use Livewire\Component;
use App\Models\Follower;
use App\Models\User;
use App\Models\Recipe;

class ChefQuestion extends Component
{
    // Declaring the variable in public
    public $currentStep = 1;
    public $name;
    public $dob;
    public $location;
    public $state;
    public $designation;
    public $company;
    public $cooking_style;
    public $accomplishments;
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
            'name' => 'required'
        ]);

        // Next Step
        $this->currentStep = 2;
    }

    // Function - SecondStepSubmit
    public function secondStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'dob' => 'required'
        ]);

        // Next Step
        $this->currentStep = 3;
    }

    // Function - ThirdStepSubmit
    public function thirdStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'location' => 'required',
            'state' => 'required',
        ]);

        // Next Step
        $this->currentStep = 4;
    }

    // Function - FourthStepSubmit
    public function fourthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'designation' => 'required',
            'company' => 'required',
        ]);

        // Next Step
        $this->currentStep = 5;
    }

    // Function - FifthStepSubmit
    public function fifthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'cooking_style' => 'required',
        ]);

        // Next Step
        $this->currentStep = 6;
    }

    // Function - SixthStepSubmit
    public function sixthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'accomplishments' => 'required',
            'status' => 'required',
        ]);

        // Next Step
        $this->currentStep = 7;
    }

    // Function - SubmitForm
    public function submitForm(Request $request)
    {
        Chef_question::create([
            'name' => $this->name,
            'dob' => $this->dob,
            'location' => $this->location,
            'state' => $this->state,
            'designation' => $this->designation,
            'company' => $this->company,
            'cooking_style' => $this->cooking_style,
            'accomplishments' => $this->accomplishments,
            'status' => $this->status,
            'user_id' => auth()->user()->id,
        ]);

        $this->currentStep = 8;
    }

    // Function - Back
    public function back($step)
    {
        // Back Step
        $this->currentStep = $step;
    }

    // Function - show
    public function show(Request $request)
    {
        $chef_questions = Chef_question::where('user_id', auth()->user()->id)->first();
        $role = auth()->user()->hasRole('Chef');
        if($role){
            $followers = Follower::where('leader_id', auth()->user()->id)->get()->count();
            $following = Follower::where('follower_id',auth()->user()->id)->get()->count();
            $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
            return view('screens.user.profile.portfolio',compact('chef_questions', 'followers','following','recipes'));
        }

    }

    // Function - edit
    public function edit(Chef_question $chef_questions)
    {
        $chef_questions = Chef_question::where('user_id', auth()->user()->id)->first();
        return view('screens.user.profile.portfolio_edit',compact('chef_questions'));
    }

    // Function - Update
    public function update(Chef_question $chef_questions)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'dob' => 'required',
                'location' => 'required',
                'status' => 'required',
                'designation' => 'required',
                'company' => 'required',
                'cooking_style' => 'required',
                'accomplishments' => 'required'
            ]
        );

        $chef_questions->update($data);

        return redirect('/my_portfolio');
    }
}
