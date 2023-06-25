<x-backend.layouts.master>
    {{--  custom page title   --}}
    <x-slot:page_title>
        Experiance
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
        <h4 class="mb-4">Add previous job experiance</h4>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                {{--  @dd($experianceData)  --}}
                <form action="{{url('updateExperiance/'.$experianceData->last()->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <select name="designation" class="form-select mb-3" aria-label="Default select example">
                            <option value="">Chose One</option>
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
                    <div class="row mb-3">
                        <div class="col">
                            <label for="start_year" class="form-label">Start Year</label>
                            <input type="text" name="start_year" id="start_year" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="end_year" class="form-label">End Year</label>
                            <input type="text" name="end_year" id="end_year" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="total_experiance" class="form-label">Total year of experiance</label>
                        <input type="text" name="total_experiance" id="total_experiance" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>

