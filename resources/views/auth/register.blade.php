
<x-backend.layouts.master>

    {{--  custom page title   --}}
    <x-slot:page_title>
        Create Account
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
        <h3 class="mb-4">Create Account</h3>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{--  common id   --}}
                    <div>
                        <input type="hidden" name="commonId" id="commonId" value="commonId" required>
                        {{--  Generate Random Number using javascript  --}}
                        <script>
                            var randomNumber = window.onload = function(){
                                const randomID = Math.floor(Math.random()*100000000);
                                return randomID;
                            };
                            const number = randomNumber();
                            console.log(number);
                            function myfunction(){
                                const inputTag = document.getElementById("commonId").value = number;
                            };
                        </script>
                    </div>



                    {{--  Name  --}}
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>





                    {{--  Email Address  --}}
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>




                    {{--  Password  --}}
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>




                    {{--  Confirm Password  --}}
                    @error('confirm_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /><br>
                    </div>






                    {{--  Account Type  --}}
                    <div class="mb-5">
                        <label for="role" class="form-label">Account Type (Employer/Job candidate)</label>
                        <select name="role" class="form-select" aria-label="Default select example" required>
                            <option value="">Chose One</option>
                            <option value="Employer">Employer</option>
                            <option value="Job candidate">Job candidate</option>
                        </select>
                    </div>





                    {{--  submit button   --}}
                    <div class="d-flex justify-content-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" style="margin-right:10px; margin-top:6px;">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button onclick="myfunction()" class="ml-4 btn btn-primary">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
