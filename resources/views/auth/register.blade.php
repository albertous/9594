@extends('layouts.master')
{{-- @section('css')
    <style>
    [x-cloak] {
      display: none;
    }
  </style>
@endsection --}}
@section('content')

<div class=" w-full mx-auto max-w-xl pt-4">
<form class="bg-white shadow-md rounded px-8 mt-6 pt-8 pb-8 mb-4 mt-8 bg-opacity-75" 
 method="POST" action="{{ route('register') }}">
 @csrf
        
        <p class="font-bold text-lg pl-2 text-center">Registration</p>
        <p class="font-bold pl-2">
        <button class="bg-green-500 rounded-full h-6 w-6 text-white items-center justify-center">1 </button> Profile</p>
        
        <div class="flex flex-wrap -mx-3 mb-6 pt-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="first-name">
                First Name
              </label>
              <input name="first_name" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 
              border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-first-name" type="text" placeholder="Jane">
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="last-name">
                Last Name
              </label>
              <input name="last_name" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 
              border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-last-name" type="text" placeholder="Doe">
            </div>
          </div>


          <div class="flex flex-wrap -mx-3 mb-6 pt-1">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Personal Phone Number
              </label>
              <input name="phone_number" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 
              border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="number" placeholder="762606060">
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Date Of Birth
              </label>
              <input name="date_of_birth" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 border 
              border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-last-name" type="text" placeholder="10/10/1990">
            </div>
          </div>


          <div class="flex flex-wrap -mx-3 mb-6 pt-1">
            <div class="w-full md:w-1/2 px-3">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Email
              </label>
              <input name="email" required autocomplete class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 border 
              border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-last-name" type="email" placeholder="alberto@gmail.com">
            </div>
          </div>


          <p class="font-bold pl-2">
            <button class="bg-green-500 rounded-full h-6 w-6 text-white items-center justify-center">2 </button> Address</p>
            <div class="flex flex-wrap -mx-3 mb-6 pt-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Street Address
                  </label>
                  <input name="street_address" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 py-2 px-4 
                  mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="25 texas">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Zip/Postal Code
                  </label>
                  <input name="zip_code" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 border 
                  border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="grid-last-name" type="number" placeholder="53100">
                </div>
              </div>


              <div class="flex flex-wrap -mx-3 mb-6 pt-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    State/Region/Province
                  </label>
                  <input name="province" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 py-2 px-4 mb-3 
                  leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Texas">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    City/District
                  </label>
                  <input name="city" required class="rounded-full appearance-none block w-full bg-gray-200 text-gray-700 border 
                  border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="grid-last-name" type="text" placeholder="Uhio">
                </div>
              </div>


              <div class="w-full md:w-1/2 px-2 pt-2">
                <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Country
                </label>
                <div class="relative">
                  <select name="country" class="rounded-full text-gray-400 block appearance-none w-full bg-gray-200  text-gray-700 
                  py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Tanzania,Republic(Tz)</option>
                    <option>Kenya(Ks)</option>
                    <option>India(In)</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>


              <p class="font-bold pl-2 pt-3">
                <button class="bg-green-500 rounded-full h-6 w-6 text-white items-center justify-center">3 </button> Password</p>
              <div class="flex flex-wrap -mx-3 mb-6 pt-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Password
                  </label>
                  <input autocomplete="new-password" required name="password" class="rounded-full appearance-none block w-full 
                  bg-gray-200 text-gray-700 
                  py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="*****">
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Confirm Password
                  </label>
                  <input required autocomplete="new-password" name="password_confirmation" class="rounded-full appearance-none block w-full bg-gray-200 
                  text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  id="grid-last-name" type="text" placeholder="*****">
                </div>
              </div>


          <div class="flex items-center justify-center">
            <button type="submit" class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-32 rounded focus:outline-none focus:shadow-outline 
            rounded-full flex">
              Finish
            </button>
          </div>
      </div>
    </form>
  </div>   
@endsection
