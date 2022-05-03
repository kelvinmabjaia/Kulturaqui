<style>
    .w-full.sm\:max-w-md.mt-6.px-6.py-4.bg-white.shadow-md.overflow-hidden.sm\:rounded-lg {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        color: whitesmoke;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        padding: 30px;
        box-shadow: 0px 0 20px 0 rgb(0 0 0 / 50%);
        -webkit-box-shadow: 0px 0 20px 0 rgb(0 0 0 / 50%);
        -moz-box-shadow: 0px 0 20px 0 rgba(0, 0, 0, 0.5);
        display: block;
        margin: 0 auto;
        border-radius: 3px;
    }
    .min-h-screen.flex.flex-col.sm\:justify-center.items-center.pt-6.sm\:pt-0.bg-gray-100 {
        height: 100vh;
        position: relative;
        background: url(http://127.0.0.1:8000/assets/backend/images/login/login.jpg) no-repeat scroll 0 0;
        background-size: cover;
    }
    input, input[type=text], input[type=email], input[type=search], input[type=password], textarea {
        width: 100%;
        padding: 0 15px;
        height: 48px;
        line-height: 48px;
        background: var(--iq-body-bg);
        border: 1px solid #404043;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        color: var(--iq-body-text);
        transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
    }
    button {
        background-color: red !important;
        border-radius: 2px !important;
        padding: 12px 18px !important;
    }
</style>

<x-guest-layout>
   <x-jet-authentication-card>
       <x-slot name="logo">

        @if(session()->has('user.success')) 
            <h2 class="text-white py-5">{{session()->get('user.success')}}, a sua conta foi criada!</h2>
        @endif

       </x-slot>
 
       <x-jet-validation-errors class="mb-4" />
 
       @if (session('status'))
           <div class="mb-4 font-medium text-sm text-green-600">
               {{ session('status') }}
           </div>
       @endif
 
       <form method="POST" action="{{ route('login') }}">
           @csrf

           <img class="img-fluid logo mb-5" src="{{ asset('assets/logo.png') }}"/>
 
           <div class="mt-5">
               <x-jet-label class="text-white" value="{{ __('Email') }}" />
               <x-jet-input class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
           </div>
 
           <div class="mt-4">
               <x-jet-label class="text-white"  value="{{ __('Password') }}" />
               <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
           </div>
           {{--
                <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                </div>
            --}}
           
 
           <div class="flex items-center justify-end mt-4">

               <a class="underline p-auto text-sm text-white-600 hover:text-red-900" href="{{ route('register') }}">
                {{ __(' Crie a sua Kontaqui!') }}
               </a>

               <x-jet-button class="ml-4">
                   {{ __('Entrar') }}
               </x-jet-button>
           </div>

           <div class="row">
                <a class="underline p-auto text-sm text-red                                                                                                                                                                                                                                                                                          -600" href="#">
                    {{ __(' Esqueceu a senha?') }}
                </a>
           </div>
       </form>
   </x-jet-authentication-card>
</x-guest-layout>