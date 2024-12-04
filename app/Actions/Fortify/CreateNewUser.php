<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validate the input fields
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'id_number' => ['required', 'string', 'max:255', 'unique:users'],  // Validate id_number
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Create a new user, using id_number
        return User::create([
            'name' => $input['name'],
            'id_number' => $input['id_number'],  // Insert the id_number 
            'password' => Hash::make($input['password']),
        ]);
    }
}
