<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\Chef_question;
use Livewire\Component;
use App\Models\Follower;
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
    public $image;
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
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Next Step
        $this->currentStep = 7;
    }

    // Function - SubmitForm
    public function submitForm()
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
            'image' =>$this->image,
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
        // if($role){
        $followers = Follower::where('leader_id', auth()->user()->id)->get()->count();
        $following = Follower::where('follower_id', auth()->user()->id)->get()->count();
        $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
        // $feednotifications = auth()->user()->notifications->where('type', 'App\Notifications\FeedRecipeNotification')->first();
        $user_id = auth()->user()->id;
        $feednote = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
            ->where('notifiable_id', $user_id)->count();
        //  $feednotifications =DB::table('notifications')->where('type','App\Notifications\FeedRecipeNotification' )->where('notifiable_id',$user_id)->get();
        $notification = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
            ->where('notifiable_id', $user_id)->count();
        // $feednotifications->where('type','App\Notifications\FeedRecipeNotification')->all();
        return view('screens.user.profile.portfolio', compact('chef_questions', 'followers', 'following', 'recipes', 'feednote', 'notification'));
        //  dd($chef_questions);
        // }

    }

    // Function - edit
    public function edit(Chef_question $chef_questions)
    {
        $chef_questions = Chef_question::where('user_id', auth()->user()->id)->first();
        return view('screens.user.profile.portfolio_edit', compact('chef_questions'));
    }
    // Function - Update
    public function update(Request $request)
    {

        $followers = Follower::where('leader_id', auth()->user()->id)->get()->count();
        $following = Follower::where('follower_id', auth()->user()->id)->get()->count();
        $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
        // $chef_questions = Chef_Question::where('user_id', auth()->user()->id)->first();
        // $chef_questions->name = Request::input('name');
        // $chef_questions->dob = Request::input('dob');
        // $chef_questions->location = Request::input('location');
        // $chef_questions->designation = Request::input('designation');
        // $chef_questions->company = Request::input('company');
        // $chef_questions->cooking_style = Request::input('cooking_style');
        // $chef_questions->accomplishments = Request::input('accomplishments');
        // $chef_questions->image = Request::input('image');

        $chef_questions = Chef_Question::where('user_id', auth()->user()->id)->first();
        $chef_questions->name = $request->get('name');
        $chef_questions->dob =  $request->get('dob');
        $chef_questions->location = $request->get('location');
        $chef_questions->designation =  $request->get('designation');
        $chef_questions->company =  $request->get('company');
        $chef_questions->cooking_style =  $request->get('cooking_style');
        $chef_questions->accomplishments = $request->get('accomplishments');
         $chef_questions->image = $request->get('image');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $filename =  $name;
            $file->store('storage/app/public', $filename);
            $chef_questions->image = $filename;
        }
       
        $chef_questions->update();
        //    dd($chef_questions);
        return view('screens.user.profile.portfolio', compact('chef_questions', 'followers', 'following', 'recipes'))->with('status', "Success");
    }
}
 //         $data = request()->validate(
        //             [
        //         'name' => 'required',
        //         'dob' => 'required',
        //         'location' => 'required',
        //         'status' => 'required',
        //         'designation' => 'required',
        //         'company' => 'required',
        //         'cooking_style' => 'required',
        //         'accomplishments' => 'required'
        //     ]
        // );

        // $chef_questions->update($data);
