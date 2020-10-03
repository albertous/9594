@extends('layouts.master')

@section('content')


<div class="w-half max-w-sm mx-auto pt-4" >
  @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<form class="bg-white shadow-md rounded px-8 mt-6 pt-8 pb-8 mb-4 mt-8 bg-opacity-75
 border-b border-gray-200" method="POST" action="{{ route('login') }}">@csrf
        
        <p class="font-bold text-lg pl-2">Welcome!</p>
        <p class="font-bold pl-2">Log back into your account</p>
      <div class="mb-4 pt-2">
        <input
          class="rounded w-full py-2 px-3 text-gray-700 rounded-full bg-opacity-25"
          id="username"
          type="text"
          placeholder="Email/Username" name="email"
        />
      </div>
      <div class="mb-6">
        <input
          class="rounded w-full py-2 px-3 text-gray-700 rounded-full bg-opacity-25"
          id="password"
          type="password"
          placeholder="Password" name="password"
        />
        @if (Route::has('password.request'))
        <p class="text-blue-500 text-xs text-center font-bold">
          <a href="{{ route('password.request') }}">Forget Password? Help</a>
        </p>
        @endif
      </div>
      <div class="flex items-center justify-center">
        <button type="submit" class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-32 rounded focus:outline-none focus:shadow-outline rounded-full flex">
          Continue
        </button>
      </div>
    </form>
  </div>

@endsection

