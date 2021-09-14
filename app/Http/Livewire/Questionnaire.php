<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class Questionnaire extends Component
{
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

    public function render()
    {
        return view('livewire.questionnaire');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'gender' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'mail' => 'required',
        ]);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'cookinglevel' => 'required',
        ]);

        $this->currentStep = 5;
    }

    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'allergies' => 'required',
        ]);

        $this->currentStep = 6;
    }

    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'lifestyle' => 'required',
        ]);

        $this->currentStep = 7;
    }

    public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'ingredient' => 'required',
        ]);

        $this->currentStep = 8;
    }

    public function eighthStepSubmit()
    {
        $validatedData = $this->validate([
            'pref_cuisine' => 'required',
        ]);

        $this->currentStep = 9;
    }

    public function ninthStepSubmit()
    {
        $validatedData = $this->validate([
            'goals' => 'required',
        ]);

        $this->currentStep = 10;
    }

    public function tenthStepSubmit()
    {
        $validatedData = $this->validate([
            'serving_time' => 'required',
        ]);

        $this->currentStep = 11;
    }

    public function eleventhStepSubmit()
    {
        $validatedData = $this->validate([
            'cho_cook' => 'required',
        ]);

        $this->currentStep = 12;
    }

    public function twelfthStepSubmit()
    {
        $validatedData = $this->validate([
            'fav_ingr' => 'required',
        ]);

        $this->currentStep = 13;
    }

    public function thirteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'level_spici' => 'required',
        ]);

        $this->currentStep = 14;
    }

    public function fourteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'time_spend' => 'required',
        ]);

        $this->currentStep = 15;
    }

    public function submitForm()
    {
        // Create New Object
        $questionnaire = new Questionnaire();

        // User_id Form User Model
        $user_id = auth()->user()->id;

        // Recipe-Data Storeing - Foreign Keys
        $questionnaire->user_id = $user_id;

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
        ]);

        $this->currentStep = 15;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }
}
