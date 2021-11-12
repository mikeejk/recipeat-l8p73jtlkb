<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Follower;
use App\Models\Recipe;

class Questionnaire extends Component
{
    // Deceling the varieable in public
    public $currentStep = 1;
    public $name;
    public $gender;
    public $mail;
    public $cookinglevel;
    public $allergies;
    public $lifestyle;
    public $ingredient;
    public $pref_cuisine;
    public $goals;
    public $serving_time;
    public $cho_cook;
    public $fav_ingr;
    public $level_spici;
    public $time_spend;
    public $status = 1;

    // Function - Render
    public function render()
    {
        // rend the view file
        return view('livewire.questionnaire');
    }

    // Function - FirstStepSubmit
    public function firstStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        // Next Step
        $this->currentStep = 2;
    }

    // Function - SecondStepSubmit
    public function secondStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'gender' => 'required',
        ]);

        // Next Step
        $this->currentStep = 3;
    }

    // Function - ThirdStepSubmit
    public function thirdStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'mail' => 'required',
        ]);

        // Next Step
        $this->currentStep = 4;
    }

    // Function - FourthStepSubmit
    public function fourthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'cookinglevel' => 'required',
        ]);

        // Next Step
        $this->currentStep = 5;
    }

    // Function - FifthStepSubmit
    public function fifthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'allergies' => 'required',
        ]);

        // Next Step
        $this->currentStep = 6;
    }

    // Function - SixthStepSubmit
    public function sixthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'lifestyle' => 'required',
        ]);

        // Next Step
        $this->currentStep = 7;
    }

    // Function - SeventhStepSubmit
    public function seventhStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'ingredient' => 'required',
        ]);

        // Next Step
        $this->currentStep = 8;
    }

    // Function - EighthStepSubmit
    public function eighthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'pref_cuisine' => 'required',
        ]);

        // Next Step
        $this->currentStep = 9;
    }

    // Function - NinthStepSubmit
    public function ninthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'goals' => 'required',
        ]);

        // Next Step
        $this->currentStep = 10;
    }

    // Function - TenthStepSubmit
    public function tenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'serving_time' => 'required',
        ]);

        // Next Step
        $this->currentStep = 11;
    }

    // Function - EleventhStepSubmit
    public function eleventhStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'cho_cook' => 'required',
        ]);

        // Next Step
        $this->currentStep = 12;
    }

    // Function - TwelfthStepSubmit
    public function twelfthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'fav_ingr' => 'required',
        ]);

        // Next Step
        $this->currentStep = 13;
    }

    // Function - ThirteenthStepSubmit
    public function thirteenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'level_spici' => 'required',
        ]);

        // Next Step
        $this->currentStep = 14;
    }

    // Function - FourteenthStepSubmit
    public function fourteenthStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'time_spend' => 'required',
            'status' => 'required',
        ]);

        // Next Step
        $this->currentStep = 15;
    }

    // Function - SubmitForm
    public function submitForm()
    {
        Question::create([
            'name' => $this->name,
            'gender' => $this->gender,
            'mail' => $this->mail,
            'cookinglevel' => $this->cookinglevel,
            'allergies' => $this->allergies,
            'lifestyle' => $this->lifestyle,
            'ingredient' => $this->ingredient,
            'pref_cuisine' => $this->pref_cuisine,
            'goals' => $this->goals,
            'serving_time' => $this->serving_time,
            'cho_cook' => $this->cho_cook,
            'fav_ingr' => $this->fav_ingr,
            'level_spici' => $this->level_spici,
            'time_spend' => $this->time_spend,
            'status' => $this->status,
            'user_id' => auth()->user()->id,
        ]);

        // Next Step
        $this->currentStep = 15;
    }

    // Function - Back
    public function back($step)
    {
        // Back Step
        $this->currentStep = $step;
    }

    public function show(Question $questions,Follower $followers)
    {
        $questions = Question::where('user_id', auth()->user()->id)->first();
        $followers = Follower::where('leader_id', auth()->user()->id)->get()->count();
        $following = Follower::where('follower_id',auth()->user()->id)->get()->count();
        $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
        return view('screens.user.profile.profile',compact('questions','followers','following','recipes'));
    }

    public function edit(Question $questions)
    {
        $questions = Question::where('user_id', auth()->user()->id)->first();
        return view('screens.user.profile.profile_edit',compact('questions'));
    }

    public function update(Question $questions)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'gender' => 'required',
                'mail' => 'required',
                'allergies' => 'required',
                'lifestyle' => 'required',
                'ingredient' => 'required',
                'pref_cuisine' => 'required',
                'goals' => 'required',
                'serving_time' => 'required',
                'cho_cook' => 'required',
                'fav_ingr' => 'required',
                'level_spici' => 'required',
                'time_spend' => 'required',
            ]
        );

        $questions->update($data);

        return redirect('/my_profile');
    }
}
