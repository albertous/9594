<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
        Validator::make($input, [
            'first_name' =>   ['required', 'string', 'max:255'],
            'last_name' =>    ['required', 'string', 'max:255'],
            'date_of_birth'=> ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' =>        ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'city' =>         ['sometimes', 'string', 'max:255'],
            'zip_code' =>     ['sometimes', 'string', 'max:255'],
            'street_address'=>['sometimes', 'string', 'max:255'],
            'province' =>     ['sometimes', 'string', 'max:255'],
            'country' =>      ['sometimes', 'string', 'max:255'],
        ])->validate();

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone_number' => $input['phone_number'],
            'date_of_birth' => $input['date_of_birth'],
            'password' => Hash::make($input['password']),
        ]);
        
        $user->assignRole('user');

        $user->addresses()->create([
            'city' => $input['city'],
            'zip_code' =>  $input['zip_code'],
            'street_address' => $input['street_address'],
            'province' =>  $input['province'],
            'country' =>  $input['country'],
        ]);

        return $user;

    }

}
