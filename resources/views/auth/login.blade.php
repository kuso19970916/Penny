<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <div class="container-fluid back">
        <div class="row justify-content-md-center">
            <div class="col-md-5 block">
                <img style="width:150px; position:absolute; top:-40px; left:100px;" src="{{URL::asset('/image/Penny.png')}}">
                <img style="width:150px; position:absolute; top:-30px; left:300px;" src="{{URL::asset('/image/Login.png')}}">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login row justify-content-md-center">
                        <div class="input-group mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            </div>
                            <input type="text" name="email"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="login row justify-content-md-center">
                        <div class="input-group mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">密碼</span>
                            </div>
                            <input type="password"  name="password" class="form-control" autocomplete="password">
                        </div>
                    </div>

                    <div class="row m-4 login2">
                        <button type="button" name="button" class="offset-md-2 reg_btn" onclick="location.href='{{ route('register') }}'">註冊 </button>
                        <button type="submit" class="offset-md-4 login_btn" >GO --></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
