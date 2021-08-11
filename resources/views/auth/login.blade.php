@extends('layouts.app')

@section('content')
<div class=" mx-auto h-full flex justify-center items-center bg-grey ">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
    
   

    <h1 class="text-white text-xl pt-5 ">Welcome Back</h1>

    <h2 class="text-info pb-6">Enter your credentials below</h2>

    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="relative ">
                            <label for="email" class=" pl-2 uppercase text-blue-500 font-bold absolute">EMail</label>

                            <div class="">
                                <input id="email" type="email" class="w-full pt-8 pb-2 pl-2 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="your@email.com">

                                @error('email')
                                    <span class="text-red-600 text-sm " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="relative pt-2">
                            <label for="password" class="pl-2 uppercase text-blue-500 font-bold absolute">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="w-full pt-8 pb-2 pl-2 text-gray-100  outline-none focus:bg-blue-700 " name="password" autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="text-red-600 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="text-white pt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="font-bold py-2 bg-gray-400 w-full rounded text-blue-800">
                                    Login
                            </button>
                        </div>

                        <div class="text-sm font-bold flex justify-between pt-8 text-white">               
                                    <a class="" href="{{ route('password.request') }}">
                                        Forgot your password
                                    </a>
                                    
                               
                        </div>
                    
    </form>
        
    </div>
</div>
@endsection
