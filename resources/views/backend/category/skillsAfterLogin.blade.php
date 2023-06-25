<x-backend.layouts.master>
    {{--  custom page title   --}}
    <x-slot:page_title>
        Skills
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
        <h4 class="mb-4">Add your skills</h4>
        <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
            <div class="mx-4 my-4">
                @foreach ($skillData as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <form action="{{url('updateSkillAfterLogin/'.$Data->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label for="skills" class="form-label">Type of Work</label>
                                <select name="skills" class="form-select" aria-label="Default select example">
                                    <option selected value="">Chose one</option>
                                    <option value="Problem solving">Problem solving</option>
                                    <option value="Data science">Data science</option>
                                    <option value="Data analysis">Data analysis</option>
                                    <option value="Critical thinking">Critical thinking</option>
                                    <option value="Data structures and algorithms">Data structures and algorithms</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Creativity">Creativity</option>
                                    <option value="Leadership">Leadership</option>
                                    <option value="Digital marketing">Digital marketing</option>
                                    <option value="Computer programming">Computer programming</option>
                                    <option value="Time management">Time management</option>
                                    <option value="Teamwork">Teamwork</option>
                                    <option value="Organization">Organization</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="skillsLevel" class="form-label">Skills Level(0 to 100<span>&#37;</span>)</label>
                                <input type="number" name="skillsLevel" id="skillsLevel" class="form-control" required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</x-backend.layouts.master>


