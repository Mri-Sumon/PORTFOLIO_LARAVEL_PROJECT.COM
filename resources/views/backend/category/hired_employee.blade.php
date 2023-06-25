<x-backend.layouts.master>

    {{--  CUSTOM TITLE   --}}
    <x-slot:page_title>
        Hired Employee
    </x-slot>


    <div class="mt-5 mb-4">
        <h3>Employees hired by you</h3>
        <hr>
    </div>

    <div class="mb-5">
        <div class="card" style="width: 18rem;">
            {{--  @dd($hiredEmployeeId);  --}}
            <img src="{{asset('assets/profilePictures/profile_photo'.$hiredEmployeeId->profile_photo ?? '')}}" class="card-img-top" alt="Profile Photo">
            <div class="card-body">
                <h5 class="card-title">{{$hiredEmployeeId->name}}</h5>
                <strong>Email: </strong> {{$hiredEmployeeId->email}}<br>
                <strong>Profession: </strong> {{$hiredEmployeeId->occupation}}<br>
                <strong>Job Status: </strong> {{$hiredEmployeeId->job_status}}<br>
                <strong>Address: </strong> {{$hiredEmployeeId->address}} <br> <br>
                <a href="#" class="btn btn-primary">Details</a>
            </div>
        </div>
    </div>

</x-backend.layouts.master>

