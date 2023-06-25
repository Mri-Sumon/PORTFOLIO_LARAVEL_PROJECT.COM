<x-backend.layouts.master>

    {{--  CUSTOM PAGE TITLE   --}}
    <x-slot:page_title>
        Work
    </x-slot>

    {{--  INTERNAL CSS  --}}
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
        <h4 class="mb-4">Add previously performed work</h4>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                {{--  @dd($workData);  --}}
                <form action="{{url('updateWork/'.$workData->last()->id)}}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="type_of_work" class="form-label">Type of Work</label>
                        <select name="type_of_work" class="form-select mb-3" aria-label="Default select example" required">
                            {{--  <option value="{{$profileData->last()->job_status ?? ''}}">{{$profileData->last()->job_status ?? ''}}>Chose one</option>  --}}
                            <option value="Software Design">Software Design</option>
                            <option value="Software Development">Software Developer</option>
                            <option value="Java Development">Java Developmen</option>
                            <option value="Software Architect">Software Architect</option>
                            <option value="Full stack development">Full stack developer</option>
                            <option value="Video game development">Veterinarian</option>
                            <option value="Computer network">Computer network</option>
                            <option value="Quality Assurance">Quality Assurance</option>

                            <option value="General practitioner">General practitioner</option>
                            <option value="Internal medicine">Internal medicine</option>
                            <option value="Pediatrician">Pediatrician</option>
                            <option value="Dermatologist">Dermatologist</option>
                            <option value="Family medicine">Family medicine</option>
                            <option value="Neurologist">Neurologist</option>

                            <option value="Geotechnical engineering">Geotechnical engineering</option>
                            <option value="Structural engineer">Structural engineer</option>
                            <option value="Environmental engineering">Environmental engineering</option>
                            <option value="Construction engineering">Bakers</option>

                            <option value="Investment banking">Investment banking</option>
                            <option value="Customer relationship management">Customer relationship management</option>
                            <option value="Bank teller">Bank teller</option>
                            <option value="Loan Officer">Loan Officer</option>
                            <option value="Branch manager">Branch manager</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="completed_work_file" class="form-label">Work File(zip/rar/pdf)</label>
                        <input type="file" name="completed_work_file" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>

