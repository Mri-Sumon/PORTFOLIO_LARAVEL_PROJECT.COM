    {{--  @dd($about)  --}}
    {{--  @dd($account)  --}}
    {{--  @dd($education)  --}}
    {{--  @dd($experiance)  --}}
    {{--  @dd($personal_data)  --}}
    {{--  @dd($profile)  --}}
    {{--  @dd($skill)  --}}
    {{--  @dd($socialMedia)  --}}
    {{--  @dd($work)  --}}

    <div class="container-fluid">
        <div>
            <h1>Profile's of Mr {{$profile->last()->name ?? ''}}</h1>
            {{--  NAME-EMAIL-PHONE-ADDRESS START HERE  --}}
            <div style="margin-bottom: 20px;">
                <table>
                    <tr>
                        <td><strong>Account Type:</strong></td>
                      <td>{{$profile->last()->role ?? ''}}</td>
                    </tr>
                    <tr>
                      <td><strong>email: </strong></td>
                      <td>{{$profile->last()->email ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact No: </strong></td>
                      <td>{{$profile->last()->contact_number ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Present Address: </strong></td>
                      <td>{{$profile->last()->address ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  NAME-EMAIL-PHONE END HERE  --}}


            {{--  ABOUT START HERE  --}}
            <div style="margin-bottom: 20px">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong>Carrier Objective:</strong>
                </div>
                <p>{{$about->last()->about ?? ''}}</p>
            </div>
            {{--  ABOUT END HERE  --}}


            {{--  OCCUPATION-JOB STATUS START HERE  --}}
            <div style="margin-bottom: 20px;">
                <table>
                    <tr>
                      <td><strong>Current Occupation:</strong></td>
                      <td>{{$profile->last()->occupation ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Job Status: </strong></td>
                      <td>{{$profile->last()->job_status ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  OCCUPATION-JOB STATUS END HERE  --}}


            {{--  EXPERIANCE START HERE  --}}
            <div style="margin-bottom: 20px">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong>Professional Experiance: </strong>
                </div>
                <table>
                    <tr>
                        <td><strong>Designation: </strong></td>
                        <td>{{$experiance->last()->designation ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Job Status: </strong></td>
                        <td>{{$profile->last()->job_status ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Start Year: </strong></td>
                        <td>{{$experiance->last()->start_year ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>End Year: </strong></td>
                        <td>{{$experiance->last()->end_year ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Total year of experiance: </strong></td>
                        <td>{{$experiance->last()->total_experiance ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Company Name: </strong></td>
                        <td>{{$experiance->last()->company_name ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  EXPERIANCE END HERE  --}}


            {{--  WORK START HERE  --}}
            <div style="margin-bottom: 20px;">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong class="mt-2">Previously performed work: </strong>
                </div>
                <table>
                    <tr>
                        <td>{{$work->last()->type_of_work ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  WORK END HERE  --}}

            {{--  EDUCATION START HERE  --}}
            <div style="margin-bottom: 20px;">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong class="my-1">Educational Qualification:</strong>
                </div>
                <table>
                    <tr>
                        <td><strong>Last Educational Qualification:</strong></td>
                        <td>{{$education->last()->degree ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Start Year: </strong></td>
                        <td>{{$education->last()->start_year ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>End Year: </strong></td>
                        <td>{{$education->last()->end_year ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>School/College/University Name: </strong></td>
                        <td>{{$education->last()->institute_name ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  EDUCATION END HERE  --}}


            {{--  SKILLS START HERE  --}}
            <div style="margin-bottom: 20px;">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong>Skills: </strong>
                </div>
                <table>
                    <tr>
                        <td><strong>Type of Work: </strong></td>
                        <td>{{$skill->last()->skills ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Skills Level(0 to 100%): </strong></td>
                        <td>{{$skill->last()->skillsLevel ?? ''}}%</td>
                    </tr>
                </table>
            </div>
            {{--  SKILLS END HERE  --}}


            {{--  PERSONAL DATA START HERE  --}}
            <div style="margin-bottom: 20px">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong>Personal Information: </strong>
                </div>
                <table>
                    <tr>
                        <td><strong>Father's Name: </strong></td>
                        <td>{{$personal_data->last()->father_name ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Mother's Name: </strong></td>
                        <td>{{$personal_data->last()->mother_name ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Permanent Address: </strong></td>
                        <td>{{$personal_data->last()->permanent_address ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Height: </strong></td>
                        <td>{{$personal_data->last()->height ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Sex: </strong></td>
                        <td>{{$personal_data->last()->	sex ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Blood Group: </strong></td>
                        <td>{{$personal_data->last()->	blood_group ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Marital Status: </strong></td>
                        <td>{{$personal_data->last()->marital_status ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Religion: </strong></td>
                        <td>{{$personal_data->last()->religion ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>NID Number: </strong></td>
                        <td>{{$personal_data->last()->nid_number ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Nationality: </strong></td>
                        <td>{{$personal_data->last()->nationality ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  PERSONAL DATA END HERE  --}}

            {{--  SOCIAL MEDIA START HERE  --}}
            <div style="margin-bottom: 100px">
                <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                    <strong>Social Media: </strong>
                </div>
                <table>
                    <tr>
                        <td><strong>Skype: </strong></td>
                        <td>{{$socialMedia->last()->skype ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Facebook: </strong></td>
                        <td>{{$socialMedia->last()->facebook ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Linkedin: </strong></td>
                        <td>{{$socialMedia->last()->linkedin ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Instagram: </strong></td>
                        <td>{{$socialMedia->last()->instagram ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Twitter: </strong></td>
                        <td>{{$socialMedia->last()->twitter ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  SOCIAL MEDIA END HERE  --}}

        </div>
    </div>
    {{--  PROFILE END HERE  --}}


