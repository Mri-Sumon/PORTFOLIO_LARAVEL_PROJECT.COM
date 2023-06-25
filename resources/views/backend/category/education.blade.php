<x-backend.layouts.master>
    {{--  custom page title   --}}
    <x-slot:page_title>
        Education
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
            width: 450px;
            border: 1px solid gray;
            border-radius: 0.6rem;
        }
    </style>

    <div class="my-5">
        <h4 class="mb-4">Add Educational Background</h4>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                <form class="mt-4" action="{{url('updateEducation/'.$educationData->last()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="name" class="form-label">Last Educational Qualification</label>
                        <select name="degree" class="form-select" aria-label="Default select example">
                            <option selected value="">Chose one</option>
                            <option value="SSC/Equivalent">SSC/Equivalent</option>
                            <option value="HSC/Equivalent">HSC/Equivalent</option>
                            <option value="BA (Bachelor of Arts)">BA (Bachelor of Arts)</option>
                            <option value="BSS (Bachelor of Social Science)">BSS (Bachelor of Social Science)</option>
                            <option value="BSc (Bachelor of Science)">BSc (Bachelor of Science)</option>
                            <option value="BBS (Bachelor of Business Studies)">BBS (Bachelor of Business Studies)</option>
                            <option value="MSc Electronics">MSc Electronics</option>
                            <option value="MSc Mathematics">MSc Mathematics</option>
                            <option value="MSc Environmental Sciences">MSc Environmental Sciences</option>
                            <option value="MSc Distance Education">MSc Distance Education</option>
                            <option value="MS Automotive Engineering">MS Automotive Engineering</option>
                            <option value="MS Computer Science">MS Computer Science</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="startYear" class="form-label">Start Year</label>
                            <input type="text"  name="start_year" id="start_year" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="endYear" class="form-label">End Year</label>
                            <input type="text" name="end_year" id="end_year" class="form-control" required>
                        </div>
                    </div>
                    <div>
                        <label for="scuname" class="form-label">School/College/University Name</label>
                        <input type="text" name="institute_name" id="institute_name" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-backend.layouts.master>
