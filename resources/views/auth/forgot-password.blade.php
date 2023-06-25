<x-backend.layouts.master>

    {{--  custom page title   --}}
    <x-slot:page_title>
        Registration
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
        #text{
            width: 400px;
            margin-bottom: 20px;
        }
    </style>



    <div class="my-5">
        <div id="text">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <x-primary-button class="btn btn-primary">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
