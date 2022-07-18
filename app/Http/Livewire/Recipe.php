<?php

namespace App\Http\Livewire;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Measurement;
use App\Models\Ingredient;
use App\Models\User;
use App\Models\Pinboard;
use App\Models\Pin_recipe;
use App\Models\Recipe_Step;
use App\Models\Recipe_Ingredient;

use Livewire\Component;

class Recipe extends Component
{
     // Declaring the variable in public
     public $currentStep = 1;
     public $recipe_name;
     public $preparing_time;
     public $cooking_time;
     public $serves_people;
     public $calories_in;
     public $description;
     public $bud_sweet;
     public $bud_sour;
     public $bud_salt;
     public $bud_spicy;
     public $bud_bitter;
     public $bud_astringent;
     public $status;
     public $creator;
     public $cover;
    public function render()
    {
        return view('livewire.recipe');
    }
    public function firstStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'recipe_name' => 'required',
            'preparing_time' => 'required',
            'cooking_time' => 'required',
            'serves_people' => 'required',
            'cuisine' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        // Next Step
        $this->currentStep = 2;
    }
      // Function - SecondStepSubmit
      public function secondStepSubmit()
      {
          // Data - Save
          $validatedData = $this->validate([
              'ingredients' => 'required',
              'quantity' => 'required',
              'units' => 'required',
              
          ]);
  
          // Next Step
          $this->currentStep = 3;
      }
      // Function - ThirdStepSubmit
    public function thirdStepSubmit()
    {
        // Data - Save
        $validatedData = $this->validate([
            'steps' => 'required',
        ]);

        // Next Step
        $this->currentStep = 4;
    }

    // Function - FourthStepSubmit
    public function fourthStepSubmit()
    {
        // Data - Save
        $validateData = $this->validate([
            'bud_sweet ' => 'required',
            'bud_sour' =>'required',
            'bud_spicy' =>'required',]);
           
        // Next Step
        $this->currentStep = 5;
    }
      // Function - SubmitForm
      public function submitForm()
      {
          Recipe::create([
              'recipe_name' => $this->recipe_name,
              'preparing_time' => $this->preparing_time,
              'cooking_time' => $this->cooking_time,
              'serves_people' => $this->serves_people,
              'cuisine' => $this->cuisine,
              'category' => $this->category,
              'description' => $this->description,
            //   'ingredients' => $this->ingredients,
            //   'steps' => $this->steps,
            //   'user_id' => auth()->user()->id,
          ]);
          Ingredient::create([
            'ingredients' => $this->ingredients,
          ]);
  
          $this->currentStep = 8;
      }
  
  
}
