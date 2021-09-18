<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Check the email is exists with the name and password as empty.
        $email_exists = User::where('email', $input['email'])
            ->where('name', false)
            ->where('password', false);

        // If that is not empty it's store the new row of enterd data.
        if (!$email_exists) {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();

            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
        } else { // If the email is present the name and password hase be update
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();

            // If the user emailid is exists use the Carbon packege to udate the email_verified_at field
            // If use an Carbon packege the verification email can not be sended to the the invited user.
            $update_user =  User::where('email', $input['email'])
                ->update(
                    [
                        'email_verified_at' => Carbon::now()
                    ]
                );

            // Update the exixting invite user data
            return User::updateOrCreate(
                ['email' => $input['email']],
                [
                    'name' => $input['name'],
                    'password' => Hash::make($input['password']),
                ]
            );
        }
    }
}
