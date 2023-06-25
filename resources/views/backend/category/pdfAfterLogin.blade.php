
    <div class="container-fluid">
        <div>
            <h1>Profiles of Mr {{$authorizedUser->name ?? ''}}</h1>
            {{--  NAME-EMAIL-PHONE-ADDRESS START HERE  --}}
            <div style="margin-bottom: 20px;">
                <table>
                    <tr>
                        <td><strong>Account Type:</strong></td>
                      <td>{{$authorizedUser->role ?? ''}}</td>
                    </tr>
                    <tr>
                      <td><strong>email: </strong></td>
                      <td>{{$authorizedUser->email ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact No: </strong></td>
                      <td>{{$authorizedUser->contact_number ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Present Address: </strong></td>
                      <td>{{$authorizedUser->address ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  NAME-EMAIL-PHONE END HERE  --}}


            {{--  ABOUT START HERE  --}}
                @foreach ($about as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong>Carrier Objective:</strong>
                            </div>
                            <p>{{$Data->about ?? ''}}</p>
                        </div>
                    @endif
                @endforeach
            {{--  ABOUT END HERE  --}}


            {{--  OCCUPATION-JOB STATUS START HERE  --}}
            <div style="margin-bottom: 20px;">
                <table>
                    <tr>
                      <td><strong>Current Occupation:</strong></td>
                      <td>{{$authorizedUser->occupation ?? ''}}</td>
                    </tr>
                    <tr>
                        <td><strong>Job Status: </strong></td>
                      <td>{{$authorizedUser->job_status ?? ''}}</td>
                    </tr>
                </table>
            </div>
            {{--  OCCUPATION-JOB STATUS END HERE  --}}


            {{--  EXPERIANCE START HERE  --}}
                @foreach ($experiance as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong>Professional Experiance: </strong>
                            </div>
                            <table>
                                <tr>
                                    <td><strong>Designation: </strong></td>
                                    <td>{{$Data->designation ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Job Status: </strong></td>
                                    <td>{{$Data->job_status ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Start Year: </strong></td>
                                    <td>{{$Data->start_year ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>End Year: </strong></td>
                                    <td>{{$Data->end_year ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total year of experiance: </strong></td>
                                    <td>{{$Data->total_experiance ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Company Name: </strong></td>
                                    <td>{{$Data->company_name ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            {{--  EXPERIANCE END HERE  --}}


            {{--  WORK START HERE  --}}
                @foreach ($work as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px;">
                        <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                            <strong class="mt-2">Previously performed work: </strong>
                        </div>
                        <table>
                            <tr>
                                <td>{{$Data->type_of_work ?? ''}}</td>
                            </tr>
                        </table>
                        </div>
                    @endif
                @endforeach
            {{--  WORK END HERE  --}}

            {{--  EDUCATION START HERE  --}}
                @foreach ($education as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px;">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong class="my-1">Educational Qualification:</strong>
                            </div>
                            <table>
                                <tr>
                                    <td><strong>Last Educational Qualification:</strong></td>
                                    <td>{{$Data->degree ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Start Year: </strong></td>
                                    <td>{{$Data->start_year ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>End Year: </strong></td>
                                    <td>{{$Data->end_year ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>School/College/University Name: </strong></td>
                                    <td>{{$Data->institute_name ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            {{--  EDUCATION END HERE  --}}


            {{--  SKILLS START HERE  --}}
                @foreach ($skill as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px;">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong>Skills: </strong>
                            </div>
                            <table>
                                <tr>
                                    <td><strong>Type of Work: </strong></td>
                                    <td>{{$Data->skills ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Skills Level(0 to 100%): </strong></td>
                                    <td>{{$Data->skillsLevel ?? ''}}%</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            {{--  SKILLS END HERE  --}}


            {{--  PERSONAL DATA START HERE  --}}
                @foreach ($personal_data as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 20px">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong>Personal Information: </strong>
                            </div>
                            <table>
                                <tr>
                                    <td><strong>Fathers Name: </strong></td>
                                    <td>{{$Data->father_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Mothers Name: </strong></td>
                                    <td>{{$Data->mother_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Permanent Address: </strong></td>
                                    <td>{{$Data->permanent_address ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Height: </strong></td>
                                    <td>{{$Data->height ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Sex: </strong></td>
                                    <td>{{$Data->sex ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Blood Group: </strong></td>
                                    <td>{{$Data->blood_group ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Marital Status: </strong></td>
                                    <td>{{$Data->marital_status ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Religion: </strong></td>
                                    <td>{{$Data->religion ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>NID Number: </strong></td>
                                    <td>{{$Data->nid_number ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Nationality: </strong></td>
                                    <td>{{$Data->nationality ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            {{--  PERSONAL DATA END HERE  --}}

            {{--  SOCIAL MEDIA START HERE  --}}
                @foreach ($socialMedia as $Data)
                    @if($authorizedUser->id == $Data->id)
                        <div style="margin-bottom: 100px">
                            <div style="background-color:#34495E; color:white; margin-bottom: 20px;">
                                <strong>Social Media: </strong>
                            </div>
                            <table>
                                <tr>
                                    <td><strong>Skype: </strong></td>
                                    <td>{{$Data->skype ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Facebook: </strong></td>
                                    <td>{{$Data->facebook ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Linkedin: </strong></td>
                                    <td>{{$Data->linkedin ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Instagram: </strong></td>
                                    <td>{{$Data->instagram ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Twitter: </strong></td>
                                    <td>{{$Data->twitter ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
            {{--  SOCIAL MEDIA END HERE  --}}

        </div>
    </div>
    {{--  PROFILE END HERE  --}}













