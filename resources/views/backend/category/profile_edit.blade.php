<x-backend.layouts.master>

    {{--  CUSTOM PAGE TITLE   --}}
    <x-slot:page_title>
        Profile Edit
    </x-slot>

    {{--  UPDATE PORT FOLIO-PROFILE PREVIEW BUTTON  --}}
    <div class="row my-5">
        <div class="col-lg-10 col-md-6 col-sm-12 mb-2">
            <h3>Update Your Portfolio</h3>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 mb-2">
            <a href="{{route('category.profile_view_after_registration')}}" type="button" class="btn btn-secondary bg-gradient btn-sm" style="width: 100%;">Profile View</a>
        </div>
    </div>

    {{-- SUCCESSFULL MESSAGE FOR PROFILE DATA --}}
    @if(session('message2'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message2')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR ABOUT DATA --}}
    @if(session('message3'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message3')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR WORK DATA --}}
    @if(session('message4'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message4')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR EDUCATION DATA --}}
    @if(session('message5'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message5')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR EDUCATION DATA --}}
    @if(session('message6'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message6')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR SKILLS DATA --}}
    @if(session('message7'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message7')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR SKILLS DATA --}}
    @if(session('message8'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message8')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR SKILLS DATA --}}
    @if(session('message9'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message9')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- SUCCESSFULL MESSAGE FOR PERSONAL DATA DATA --}}
    @if(session('message10'))
        {{--  BOOTSTRAP ALERT BUTTON  --}}
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('message10')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{--  ACCORDIAN START HERE  --}}
    <div class="accordion accordion-flush" id="accordionFlushExample">


        {{-- PROFILE START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Profile
                </button>
            </h2>


            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="mb-3 mt-5 mx-4" style="width: 420px;">


                {{-- FORM DATA SUBMIT START HERE --}}
                    <form class="mb-5" action="{{url('updateProfile/'.$userData->last()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                        <label for="contact_number" class="form-label mb-3">Contuct Number</label>
                        <input type="tel" name="contact_number" id="contact_number" value="{{$userData->last()->contact_number ?? ''}}" class="form-control mb-3" required>

                        <label for="address" class="form-label mb-3">Present Address</label>
                        <input type="text" name="address" id="address" value="{{$userData->last()->address ?? ''}}" class="form-control mb-3" required>


                        <label class="mb-3">Occupation</label>
                        <select name="occupation" id="" class="form-select mb-3" aria-label="Default select example" required>
                            <option value="{{$userData->last()->occupation ?? ''}}">{{$userData->last()->occupation ?? ''}}</option>
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


                        <label class="mb-3">Job Status</label>
                        <select name="job_status" class="form-select mb-3" aria-label="Default select example" required>
                            <option value="{{$userData->last()->job_status ?? ''}}">{{$userData->last()->job_status ?? ''}}</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Half-time">Half-time</option>
                        </select>


                        {{-- UPLOAD PROFILE PICTURE START HERE --}}
                        <div class="row mt-5">
                            <label for="profile_photo" class="form-label">Profile Picture (jpg/png)</label>
                            <div class="col-lg-8">
                                <input type="file" name="profile_photo" id="imgInp" class="my-2" required>
                            </div>
                            {{-- PROFILE PHOTO PREVIEW MODAL START HERE --}}
                            <div class="col-lg-4 d-flex justify-content-end">
                                <div>
                                    {{-- preview button  --}}
                                    <button type="button" id="previewBtn" class="btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Preview</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
                                                </div>
                                                <div class="modal-body d-flex justify-content-center">
                                                    <img id="blah" src="#" alt="Profile Picture" width="200px" height="200px" />

                                                    <script>
                                                        imgInp.onchange = evt => {
                                                            const [file] = imgInp.files
                                                            if (file) {
                                                              blah.src = URL.createObjectURL(file)
                                                            }
                                                          }
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- PROFILE PHOTO PREVIEW MODAL END HERE --}}
                        </div>
                        {{-- UPLOAD PROFILE PICTURE END HERE --}}


                        {{-- UPLOAD COVER PHOTO START HERE --}}
                        <div class="row mt-5">
                            <label for="address" class="form-label">Cover Photo (jpg/png)</label>
                            <div class="col-lg-8">
                                <input type="file" name="cover_photo" id="imgInp2" class="my-2" required>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-end">
                                {{-- COVER PHOTO PREVIEW MODAL START HERE --}}
                                <div>
                                    <button type="button" class="btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModa2">Preview</button>
                                    <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cover Photo</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-body d-flex justify-content-center">
                                                        <img id="blah2" src="#" alt="Profile Picture" width="300px" height="200px" />

                                                        <script>
                                                            imgInp2.onchange = evt => {
                                                                const [file] = imgInp2.files
                                                                if (file) {
                                                                  blah2.src = URL.createObjectURL(file)
                                                                }
                                                              }
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- COVER PHOTO PREVIEW MODAL END HERE --}}
                            </div>
                        </div>
                        {{-- UPLOAD COVER PHOTO END HERE --}}


                        {{-- PDF FILE UPLOAD START HERE --}}
                        <div class="row mt-5">
                            <div class="col">
                                <label for="cv_uploaded">Upload CV (PDF Only)
                            </label></div>
                            <div class="col">
                                <input type="text" value="{{$userData->last()->cv_uploaded ?? ''}}" class="form-control mb-3">
                            </div>
                        </div>
                        <input type="file" name="cv_uploaded" id="cv_uploaded" required>
                        {{-- PDF FILE UPLOAD END HERE --}}


                        {{-- FORM SUBMIT BUTTON   --}}
                        <div class="mt-5 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary bg-gradient" style="width: 100%;">Update</button>
                        </div>
                    </form>
                </div>
                {{--  FORM DATA SUBMIT END HERE  --}}
            </div>
        </div>
        {{-- PROFILE END HERE --}}


        {{-- ABOUT START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    About
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                {{--  @dd($aboutData);  --}}
                <div class="mx-4 my-5">
                    <input class="mb-3" type="text" style="border: none; width: 890px" value="{{$aboutData->last()->about ?? ''}}">
                    <form action="{{url('updateAbout/'.$aboutData->last()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        {{--  <p>{{$aboutData->last()->about}}</p>  --}}
                        <label for="name" class="form-label"><strong>Write about your self within 500 words.</strong></label>
                        <textarea type="text" name="about" class="form-control" rows="5" cols="10" required></textarea>
                        <button type="submit" class="btn btn-primary bg-gradient mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- ABOUT END HERE --}}


        {{-- MY WORK START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    My Work
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <a href="{{route('category.work')}}" class="btn btn-secondary bg-gradient my-5 mx-4">Add Work</a>
            </div>
        </div>
        {{-- MY WORK END HERE --}}


        {{-- EDUCATION START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Education
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <a href="{{route('category.education')}}" class="btn btn-secondary bg-gradient my-5 mx-4">Add Education</a>
            </div>
        </div>
        {{-- EDUCATION END HERE --}}


        {{-- SKILL START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Skills
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <a href="{{route('category.skills')}}" class="btn btn-secondary bg-gradient my-5 mx-4">Add Skills</a>
            </div>
        </div>
        {{-- SKILL END HERE --}}


        {{-- EXPERIANCE START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Experiance
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <a href="{{route('category.experiance')}}" class="btn btn-secondary bg-gradient my-5 mx-4">Add Experiance</a>
            </div>
        </div>
        {{-- EXPERIANCE END HERE --}}


        {{-- PERSONAL INFORMATION START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    Personal Details
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="mx-4 my-5" style="width: 420px;">
                    {{--  @dd($personalData)  --}}
                    <form action="{{url('updatePersonal/'.$personalData->last()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" name="father_name" id="father_name" value="{{$personalData->last()->father_name}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother Name</label>
                            <input type="text" name="mother_name" id="mother_name" value="{{$personalData->last()->mother_name}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="permanent_address" class="form-label">Permanent Address</label>
                            <input type="text" name="permanent_address" id="permanent_address" value="{{$personalData->last()->permanent_address}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" name="height" id="height" value="{{$personalData->last()->height}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <strong>Sex: </strong>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="sex" value="Male">Male
                            </label>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="sex" value="Female">Female
                            </label>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="sex" value="Third-Gender">Third-Gender
                            </label>
                        </div>
                        <div>
                            <label for="blood_group" class="form-label mb-3">Blood Group</label>
                            <input type="text" name="blood_group" id="blood_group" value="{{$personalData->last()->blood_group}}" class="form-control mb-3" required>
                        </div>
                        <div class="d-flex mb-3">
                            <strong>Marital Status: </strong>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="marital_status" value="Married">Married
                            </label>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="marital_status" value="Unmarried">Unmarried
                            </label>

                            <label class="radio-inline">
                                <input class="mx-2" type="radio" name="marital_status" value="Single">Single
                            </label>
                        </div>
                        <div>
                            <label for="religion" class="form-label mb-3">Religion</label>
                            <input type="text" name="religion" id="religion" value="{{$personalData->last()->religion}}" class="form-control mb-3" required>
                        </div>
                        <div>
                            <label for="nid_number" class="form-label mb-3">NID Number</label>
                            <input type="number" name="nid_number" id="nid_number" value="{{$personalData->last()->nid_number}}" class="form-control mb-3" required>
                        </div>
                        <div>
                            <label for="nationality" class="form-label mb-3">Nationality</label>
                            <input type="text" name="nationality" id="nationality" value="{{$personalData->last()->nationality}}" class="form-control mb-3" required>
                        </div>
                        {{--  preview accordian statr here  --}}
                        <div class="row mb-5">
                            <label for="signature" class="form-label mb-3">Add Signature</label>
                            <div class="col-md-6">
                                <input type="file" name="signature" id="imgInp3" value="{{$personalData->last()->signature}}" class="form-control mb-3" required>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div>
                                        {{-- preview button  --}}
                                        <button type="button" id="previewBtn" class="btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModa3">Preview</button>

                                        <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
                                                    </div>
                                                    <div class="modal-body d-flex justify-content-center">
                                                        <img id="blah3" src="#" alt="Profile Picture" width="200px" height="50px" />

                                                        <script>
                                                            imgInp3.onchange = evt => {
                                                                const [file] = imgInp3.files
                                                                if (file) {
                                                                  blah3.src = URL.createObjectURL(file)
                                                                }
                                                              }
                                                        </script>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  preview accordian end here  --}}
                        <div>
                            <button type="submit" class="btn btn-primary bg-gradient" style="width: 100%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- PERSONAL INFORMATION END HERE --}}


        {{-- SOCIAL MEDIA START HERE --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Social Media
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="mx-4 my-5" style="width: 420px;">
                    {{--  @dd($socialMediaData)  --}}
                    <form action="{{url('updateSocialMedia/'.$socialMediaData->last()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label for="skype" class="form-label">Skype</label>
                            <input type="text" name="skype" id="skype" value="{{$socialMediaData->last()->skype}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" name="facebook" id="facebook" value="{{$socialMediaData->last()->facebook}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" name="linkedin" id="linkedin" value="{{$socialMediaData->last()->linkedin}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" name="instagram" id="instagram" value="{{$socialMediaData->last()->instagram}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" name="twitter" id="twitter" value="{{$socialMediaData->last()->twitter}}" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary bg-gradient" style="width: 100%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- SOCIAL MEDIA END HERE --}}
    </div>
    {{-- ACCORDIAN END HERE --}}


</x-backend.layouts.master>




