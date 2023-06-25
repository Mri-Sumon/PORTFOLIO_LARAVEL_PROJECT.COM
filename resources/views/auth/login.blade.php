<x-backend.layouts.master>
    {{--  custom page title   --}}
    <x-slot:page_title>
        Login
    </x-slot>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        #registrationForm {
            width: 400px;
            border: 1px solid gray;
            border-radius: 0.6rem;
        }
    </style>

    <div class="my-5">
        <h3 class="mb-4">Login Account</h3>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" /> <br>
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" /> <br>

                        <x-text-input id="password" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-4 d-flex justify-content-end">
                            <a href="{{ route('register') }}">Register account</a>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end mt-3">
                            <x-primary-button class="ml-3 btn btn-primary">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
