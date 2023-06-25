<x-backend.layouts.master>

    {{-- CUSTOM PAGE TITLE START HERE --}}
    <x-slot:page_title>
        Profile View
    </x-slot>
    {{-- CUSTOM PAGE TITLE END HERE --}}

    {{-- INTERNAL CSS FOR COVERPAGE START HERE --}}
    <style>
        #rectangle{
            width: 100%;
            height: 300px;
            background-color: #FFC0CB;
            position: relative;
            }
        .circle{
            position:absolute;
            margin:auto;
            top: 300px;
            left: 0px;
            right: 700px;
            bottom: 0px;
            width: 170px;
            height: 200px;
            background-color: #7FFFD4;
            border: 1px;
            border-radius: 50%;
        }
    </style>
    {{-- INTERNAL CSS FOR COVERPAGE END HERE --}}

    {{--  BUTTONS START HERE  --}}
    <div class="row mt-5 mb-3">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{url('/downloadProfile/')}}" class="btn btn-secondary bg-gradient btn-sm mb-2" style="width: 100%">Print Profile</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/pdfDownload', $userData->cv_uploaded)}}" class="btn btn-secondary bg-gradient btn-sm mb-2" style="width: 100%">Download CV</a>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    {{--  @dd($userData);  --}}
                    <a href="{{route('category.hired_employee', ['id'=>$userData->id])}}" class="btn btn-primary bg-gradient btn-sm mb-2" style="width: 100%">Hire Employee</a>
                </div>
                <div class="col-md-6">
                    <a href="{{route('category.home')}}" class="btn btn-primary bg-gradient btn-sm mb-2" style="width: 100%"> Back </a>
                </div>
            </div>
        </div>
    </div>
    {{--  BUTTONS END HERE  --}}

    {{--  SUCCESSFULL MESSAGE START HERE  --}}
    <div class="my-3">
        @if(session('message'))
            {{--  BOOTSTRAP ALERT BUTTON  --}}
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    {{--  SUCCESSFULL MESSAGE END HERE  --}}

    {{--  PROFILE START HERE  --}}
    <div class="container-fluid" >
        <div class="my-3">
            {{--  COVER PAGE & PROFILE PHOTO START HERE  --}}
                <div>
                    <div id="rectangle" style="margin-bottom: 130px">
                        <img src="{{asset('assets/coverPictures/cover_photo'.$userData->cover_photo ?? '')}}" alt="Cover Photo"; width="100%" height="100%">
                        <div class="circle">
                            <img src="{{asset('assets/profilePictures/profile_photo'.$userData->profile_photo ?? '')}}" alt="Profile Picture" style="border-radius: 50%; width:100%; height: 100%">
                        </div>
                    </div>
                </div>
            {{-- COVER PAGE & PROFILE PHOTO END HERE --}

            {{--  NAME-EMAIL-PHONE-ADDRESS START HERE  --}}
                <div class="row mb-4">
                    <div class="d-flex">
                        <div class="col-md-6 d-flex">
                            <strong>Name:</strong>
                            <input type="text" class="mx-3" value="{{$userData->name ?? ''}}" style="border: none; width: 400px;">
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <strong>Account Type:</strong>
                            <input type="text" class="mx-3" value="{{$userData->role ?? ''}}" style="border: none;">
                        </div>
                    </div>
                    <div class="d-flex">
                        <strong>email: </strong>
                        <input type="text" class="mx-3" value="{{$userData->email ?? ''}}" style="border: none; width: 870px;">
                    </div>
                    <div class="d-flex">
                        <strong>Contact No: </strong>
                        <input type="text" class="mx-3" value="{{$userData->contact_number ?? ''}}" style="border: none; width: 790px;">
                    </div>
                    <div class="d-flex">
                        <strong>Present Address: </strong>
                        <input type="text" class="mx-3" value="{{$userData->address ?? ''}}" style="border: none; width: 750px;">
                    </div>
                </div>
            {{--  NAME-EMAIL-PHONE END HERE  --}}

            {{--  ABOUT START HERE  --}}
            <div class="row mb-4">
                <div style="background-color:#34495E; color:white">
                    <strong>Carrier Objective:</strong>
                </div>
                <input class="mt-2" type="text" value="{{$aboutData->about ?? ''}}" style="border: none; width: 950px;">
            </div>
            {{--  ABOUT END HERE  --}}


            {{--  OCCUPATION-JOB STATUS START HERE  --}}
            <div class="d-flex mb-4">
                <div class="col-md-6">
                    <strong>Current Occupation:</strong>
                    <input type="text" value="{{$userData->occupation ?? ''}}" style="border: none;">
                </div>
                <div col-md-6>
                    <strong>Job Status: </strong>
                    <input type="text" value="{{$userData->job_status ?? ''}}" style="border: none;">
                </div>
            </div>
            {{--  OCCUPATION-JOB STATUS END HERE  --}}


            {{--  EXPERIANCE START HERE  --}}
            <div class="row mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong>Professional Experiance: </strong>
                </div>
                <div class="d-flex mt-2">
                    <strong>Designation: </strong>
                    <input type="text" value="{{$experiancenData->designation ?? ''}}" style="border: none; margin-left: 10px; width: 400px">
                </div>
                <div class="row d-flex">
                    <div class="col-md-6">
                        <strong>Start Year: </strong>
                        <input type="text" value="{{$experiancenData->start_year ?? ''}}" style="border: none; margin-right: 10px;">
                    </div>
                    <div class="col-md-6">
                        <strong>End Year: </strong>
                        <input type="text" value="{{$experiancenData->end_year ?? ''}}" style="border: none; margin-left: 10px;">
                    </div>
                </div>
                <div class="d-flex">
                    <strong>Total year of experiance: </strong>
                    <input type="text" value="{{$experiancenData->total_experiance ?? ''}}" style="border: none; margin-left: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Company Name: </strong>
                    <input type="text" value="{{$experiancenData->company_name ?? ''}}" style="border: none; margin-left: 10px; width: 400px">
                </div>
            </div>
            {{--  EXPERIANCE END HERE  --}}


            {{--  WORK START HERE  --}}
            <div class="row d-flex mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong class="mt-2">Previously performed work: </strong>
                </div>
                <div class="mt-2">
                    <input type="text" value="{{$workData->type_of_work ?? ''}}" style="border: none; width: 300px;">
                </div>
                <div>
                    <a class="btn btn-secondary bg-gradient btn-sm my-1" href="{{url('/downloadWork', $workData->completed_work_file ?? '')}}">Download Work</a>
                </div>
            </div>
            {{--  WORK END HERE  --}}

            {{--  EDUCATION START HERE  --}}
            <div class="row d-flex mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong class="my-1">Educational Qualification:</strong>
                </div>
                <div class="row mt-2">
                    <div class="d-flex">
                        <strong>Last Educational Qualification:</strong>
                        <input type="text" value="{{$educationData->degree ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex">
                            <strong>Start Year: </strong>
                            <input type="text" value="{{$educationData->start_year ?? ''}}" style="border: none; margin-left: 10px; margin-right: 10px;">
                        </div>
                        <div class="col-md-6 d-flex">
                            <strong>End Year: </strong>
                            <input type="text" value="{{$educationData->end_year ?? ''}}" style="border: none;">
                        </div>
                    </div>
                    <div class="d-flex">
                        <strong>School/College/University Name: </strong>
                        <input type="text" value="{{$educationData->institute_name ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                    </div>
                </div>
            </div>
            {{--  EDUCATION END HERE  --}}


            {{--  SKILLS START HERE  --}}
            <div class="row mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong>Skills: </strong>
                </div>
                <div class="d-flex mt-2">
                    <strong>Type of Work: </strong>
                    <input type="text" value="{{$skillData->skills ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Skills Level(0 to 100%): </strong>
                    <input type="text" value="{{$skillData->skillsLevel ?? ''}}%" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
            </div>
            {{--  SKILLS END HERE  --}}


            {{--  PERSONAL DATA START HERE  --}}
            <div class="row mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong>Personal Information: </strong>
                </div>
                <div class="d-flex mt-2">
                    <strong>Father's Name: </strong>
                    <input type="text" value="{{$personalData->father_name ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Mother's Name: </strong>
                    <input type="text" value="{{$personalData->mother_name ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Permanent Address: </strong>
                    <input type="text" value="{{$personalData->permanent_address ?? ''}}" style="border: none; width: 700px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Height: </strong>
                    <input type="text" value="{{$personalData->height ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Sex: </strong>
                    <input type="text" value="{{$personalData->	sex ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Blood Group: </strong>
                    <input type="text" value="{{$personalData->	blood_group ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Marital Status: </strong>
                    <input type="text" value="{{$personalData->marital_status ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Religion: </strong>
                    <input type="text" value="{{$personalData->religion ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>NID Number: </strong>
                    <input type="text" value="{{$personalData->nid_number ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Nationality: </strong>
                    <input type="text" value="{{$personalData->nationality ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
            </div>
            {{--  PERSONAL DATA END HERE  --}}

            {{--  SOCIAL MEDIA START HERE  --}}
            <div class="row mb-4">
                <div style="background-color:#34495E; color:white;">
                    <strong>Social Media: </strong>
                </div>
                <div class="d-flex mt-2">
                    <strong>Skype: </strong>
                    <input type="text" value="{{$socialMediaData->skype ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Facebook: </strong>
                    <input type="text" value="{{$socialMediaData->facebook ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Linkedin: </strong>
                    <input type="text" value="{{$socialMediaData->linkedin ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Instagram: </strong>
                    <input type="text" value="{{$socialMediaData->instagram ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
                <div class="d-flex">
                    <strong>Twitter: </strong>
                    <input type="text" value="{{$socialMediaData->twitter ?? ''}}" style="border: none; width: 300px; margin-left: 10px; margin-right: 10px;">
                </div>
            </div>
            {{--  SOCIAL MEDIA END HERE  --}}


            {{--  SIGNATURE START HERE  --}}
            <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div>
                        <strong>Signature</strong>
                    </div>
                    <div>
                        <img src="{{asset('assets/signatures/signature'. $personalData->signature ?? '')}}" alt="Signature"; width="200px">
                    </div>
                </div>
            </div>
            {{--  SIGNATURE END HERE  --}}

        </div>
    </div>
    {{--  PROFILE END HERE  --}}

</x-backend.layouts.master>



