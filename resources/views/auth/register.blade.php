<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <div class="container-fluid back">
        <div class="row justify-content-md-center">
            <div class="col-md-5 block" >
                <img style="width:150px; position:absolute; top:-40px; left:100px;" src="{{URL::asset('/image/Penny.png')}}">
                <img style="width:175px; position:absolute; top:-30px; left:300px;" src="{{URL::asset('/image/register.png')}}">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="reg row justify-content-md-center mt-4">
                        <div class="input-group input-group-sm mb-3 col-md-5">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">姓名</span>
                            </div>
                            <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3 col-md-5">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">密碼</span>
                            </div>
                            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="reg row justify-content-md-center mt-3">
                        <div class="input-group input-group-sm mb-3 col-md-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            </div>
                            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3 col-md-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">確認密碼</span>
                            </div>
                            <input type="password" name="password_confirmation"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="row login2">
                        <button type="submit" class="offset-md-8 login_btn">GO --></button>
                    </div>
                </form>
            </div>
        </div>
      </div>
</x-guest-layout>
