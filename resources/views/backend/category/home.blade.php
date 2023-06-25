<x-backend.layouts.master>

    {{-- CUSTOM PAGE TITLE START HERE --}}
    <x-slot:page_title>
        Home
    </x-slot>
    {{-- CUSTOM PAGE TITLE END HERE --}}

    {{--  HEADINGS START HERE  --}}
    <h1 class="d-flex justify-content-center my-5">Hire employee very easily.</h1>
    <div class="row">
    {{--  HEADINGS END HERE  --}}

        <div class="row">
            {{-- SELECT CATEGORY START HERE --}}
                <div class="col-7">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <select onclick="getInputValue()" id="category" class="form-select mb-3" aria-label="Default select example">
                                <option value="">Select Category</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Architect">Architect</option>
                                <option value="Veterinarian">Veterinarian</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Technician">Technician</option>
                                <option value="Administrative assistant">Administrative assistant</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Actuary">Actuary</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Audiologist">Audiologist</option>
                                <option value="Scientist">Scientist</option>
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Bakers">Bakers</option>
                                <option value="Mechanic">Mechanic</option>
                                <option value="Bartender">Bartender</option>
                                <option value="Firefighter">Firefighter</option>
                                <option value="Pilot">Pilot</option>
                                <option value="House painter and decorator">House painter and decorator</option>
                                <option value="Chemical Engineer">Chemical Engineer</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Hairdresser">Hairdresser</option>
                            </select>
                        </div>
                    </div>
                </div>
            {{-- SELECT CATEGORY END HERE --}}

            {{--  SEARCING START HERE  --}}
                <div class="col-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <form action="{{url('search')}}" method="get" role="search">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary" style="width: 100%;">Search</button>
                                <input type="hidden" name="textField" id="textField" value="" style="width: 140px">
                                <script>
                                    function getInputValue() {
                                        let inputValue = document.getElementById("category").value;
                                        document.getElementById("textField").value = inputValue;
                                    }
                                </script>
                            </form>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                        </div>
                    </div>
                </div>
            {{--  SEARCING END HERE  --}}
        </div>

        {{--  CARD START HERE  --}}
        <div class="mt-3">
            @foreach ($userData as $Data)
                <div class="card" style="width: 18rem; float: left; margin-right:20px; margin-top:25px;">
                    <img src="{{asset('assets/profilePictures/profile_photo'.$Data->profile_photo ?? '')}}" class="card-img-top" alt="Profile Photo">
                    <div class="card-body">
                        <h5 class="card-title">{{$Data->name}}</h5>
                        <strong>Email: </strong> {{$Data->email}}<br>
                        <strong>Profession: </strong> {{$Data->occupation}}<br>
                        <strong>Job Status: </strong> {{$Data->job_status}}<br>
                        <strong>Address: </strong> {{$Data->address}} <br> <br>
                        <a href="{{route('category.profile_view_home_details_button', ['id'=>$Data->id])}}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{--  CARD END HERE  --}}
    </div>

</x-backend.layouts.master>
