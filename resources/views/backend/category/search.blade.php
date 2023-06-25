<x-backend.layouts.master>
    {{--  custom page title   --}}
    <x-slot:page_title>
        Search
    </x-slot>

    {{--  HEADINGS  --}}
    <h1 class="d-flex justify-content-center my-5">Searching results | <a href="{{route('category.home')}}" style="text-decoration: none;">Back</a></h1>
    <div class="row">
        <div class="mt-3">
            @foreach ($searchData as $searchData)
                <div class="card" style="width: 18rem; float: left; margin-right:20px; ">
                    <img src="{{asset('assets/profilePictures/profile_photo'.$searchData->profile_photo ?? '')}}" class="card-img-top" alt="Profile Photo">
                    <div class="card-body">
                        <h5 class="card-title">{{$searchData->name}}</h5>
                        <strong>Email: </strong> {{$searchData->email}}<br>
                        <strong>Profession: </strong> {{$searchData->occupation}}<br>
                        <strong>Job Status: </strong> {{$searchData->job_status}}<br>
                        <strong>Address: </strong> {{$searchData->address}} <br> <br>
                        <a href="{{route('category.profile_view_search_details_button', ['id'=>$searchData->id])}}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{--  CARD END HERE  --}}
    </div>

</x-backend.layouts.master>



