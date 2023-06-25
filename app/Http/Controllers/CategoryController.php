<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Education;
use App\Models\About;
use App\Models\Work;
use App\Models\Skill;
use App\Models\User;
use App\Models\Experiance;
use App\Models\Personal_data;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //ALL ROUTE FUNCTION START HERE
    public function dashboard()
    {
        return view('backend.category.dashboard');
    }

    public function home()
    {
        $userData = User::all();
        return view('backend.category.home', compact('userData'));
    }

    public function about()
    {
        return view('backend.category.about');
    }
    public function education()
    {
        $educationData = Education::all();
        return view('backend.category.education', ['educationData' => $educationData]);
    }
    public function experiance()
    {
        $experianceData = Experiance::all();
        // dd($experianceData);
        return view('backend.category.experiance', ['experianceData' => $experianceData]);
    }
    public function help()
    {
        return view('backend.category.help');
    }
    public function hired_employee($id)
    {
        $hiredEmployeeId = User::find($id);
        return view('backend.category.hired_employee', compact('hiredEmployeeId'));
    }

    public function profile_view_after_registration()
    {
        $personalData = Personal_data::all();
        // dd($personalData);

        $socialMediaData = SocialMedia::all();
        // dd($socialMediaData);

        $skillData = Skill::all();
        // dd($skillData);

        $experiancenData = Experiance::all();
        // dd($experiancenData);

        $educationData = Education::all();
        // dd($educationData);

        $aboutData = About::all();
        // dd($aboutData);

        $workData = Work::all();
        // dd($workData);

        $userData = User::all();
        // dd($userData);

        return view('backend.category.profile_view_after_registration', ['userData' => $userData, 'workData' => $workData, 'aboutData' => $aboutData, 'educationData' => $educationData, 'experiancenData' => $experiancenData, 'skillData' => $skillData, 'socialMediaData' => $socialMediaData, 'personalData' => $personalData]);
    }

    public function profile_edit()
    {
        $socialMediaData = SocialMedia::all();
        // dd($socialMediaData);

        $personalData = Personal_data::all();
        // dd($personalData);

        $aboutData = About::all();
        //dd($aboutData);

        //TAKE ALL DATA FROM Profile FOR SHOW USER DATA IN INPUT FIELD OF profile_edit PAGE
        $userData = User::all();
        //dd($profileData);

        return view('backend.category.profile_edit', ['userData' => $userData, 'aboutData' => $aboutData, 'personalData' => $personalData, 'socialMediaData' => $socialMediaData]);
    }

    public function create_account()
    {
        return view('backend.category.create_account');
    }
    public function skills()
    {
        $skillData = Skill::all();
        // dd($skillData);
        return view('backend.category.skills', ['skillData' => $skillData]);
    }
    public function work()
    {
        $workData = Work::all();
        // dd($workData);
        return view('backend.category.work', ['workData' => $workData]);
    }
    public function search()
    {
        return view('backend.category.search');
    }

    public function profile_view_home_details_button($id)
    {
        $personalData = Personal_data::find($id);
        // dd($personalData);

        $socialMediaData = SocialMedia::find($id);
        // dd($socialMediaData);

        $skillData = Skill::find($id);
        // dd($skillData);

        $experiancenData = Experiance::find($id);
        // dd($experiancenData);

        $educationData = Education::find($id);
        // dd($educationData);

        $aboutData = About::find($id);
        // dd($aboutData);

        $workData = Work::find($id);
        // dd($workData);

        $userData = User::find($id);
        // dd($userData);
        return view(
            'backend.category.profile_view_home_details_button',
            [
                'userData' => $userData,
                'workData' => $workData,
                'aboutData' => $aboutData,
                'educationData' => $educationData,
                'experiancenData' => $experiancenData,
                'skillData' => $skillData,
                'socialMediaData' => $socialMediaData,
                'personalData' => $personalData
            ]
        );
    }

    public function profile_view_after_login()
    {
        $personalData = Personal_data::all();
        // dd($personalData);

        $socialMediaData = SocialMedia::all();
        // dd($socialMediaData);

        $skillData = Skill::all();
        // dd($skillData);

        $experiancenData = Experiance::all();
        // dd($experiancenData);

        $educationData = Education::all();
        // dd($educationData);

        $aboutData = About::all();
        // dd($aboutData);

        $workData = Work::all();
        // dd($workData);

        $userData = User::all();
        // dd($userData);

        $authorizedUser = Auth::user();
        // dd($authorizedUser);

        return view(
            'backend.category.profile_view_after_login',
            [
                'authorizedUser' => $authorizedUser,
                'personalData' => $personalData,
                'socialMediaData' => $socialMediaData,
                'skillData' => $skillData,
                'experiancenData' => $experiancenData,
                'educationData' => $educationData,
                'aboutData' => $aboutData,
                'workData' => $workData,
                'userData' => $userData,
            ]
        );
    }

    public function profile_view_search_details_button($id)
    {
        $personalData = Personal_data::find($id);
        // dd($personalData);

        $socialMediaData = SocialMedia::find($id);
        // dd($socialMediaData);

        $skillData = Skill::find($id);
        // dd($skillData);

        $experiancenData = Experiance::find($id);
        // dd($experiancenData);

        $educationData = Education::find($id);
        // dd($educationData);

        $aboutData = About::find($id);
        // dd($aboutData);

        $workData = Work::find($id);
        // dd($workData);

        $userData = User::find($id);
        // dd($userData);
        return view(
            'backend.category.profile_view_search_details_button',
            [
                'userData' => $userData,
                'workData' => $workData,
                'aboutData' => $aboutData,
                'educationData' => $educationData,
                'experiancenData' => $experiancenData,
                'skillData' => $skillData,
                'socialMediaData' => $socialMediaData,
                'personalData' => $personalData,
            ]
        );
    }

    public function profile_edit_after_login()
    {
        $authorizedUser = Auth::user();
        // dd($authorizedUser);

        $personalData = Personal_data::all();
        // dd($personalData);

        $socialMediaData = SocialMedia::all();
        // dd($socialMediaData);

        $skillData = Skill::all();
        // dd($skillData);

        $experiancenData = Experiance::all();
        // dd($experiancenData);

        $educationData = Education::all();
        // dd($educationData);

        $aboutData = About::all();
        // dd($aboutData);

        $workData = Work::all();
        // dd($workData);

        $userData = User::all();
        // dd($userData);

        return view(
            'backend.category.profile_edit_after_login',
            compact(
                'authorizedUser',
                'personalData',
                'socialMediaData',
                'skillData',
                'experiancenData',
                'educationData',
                'aboutData',
                'workData',
                'userData',
            )
        );
    }


    public function educationAfterLogin()
    {
        $educationData = Education::all();
        $authorizedUser = Auth::user();
        return view(
            'backend.category.educationAfterLogin',
            [
                'educationData' => $educationData,
                'authorizedUser' => $authorizedUser,
            ]
        );
    }


    public function experianceAfterLogin()
    {
        $experianceData = Experiance::all();
        $authorizedUser = Auth::user();
        // dd($authorizedUser);
        return view(
            'backend.category.experianceAfterLogin',
            [
                'experianceData' => $experianceData,
                'authorizedUser' => $authorizedUser,
            ]
        );
    }


    public function skillsAfterLogin()
    {
        $skillData = Skill::all();
        $authorizedUser = Auth::user();
        // dd($authorizedUser);
        return view(
            'backend.category.skillsAfterLogin',
            [
                'skillData' => $skillData,
                'authorizedUser' => $authorizedUser,
            ]
        );
    }


    public function workAfterLogin()
    {
        $workData = Work::all();
        $authorizedUser = Auth::user();
        // dd($authorizedUser);
        return view(
            'backend.category.workAfterLogin',
            [
                'workData' => $workData,
                'authorizedUser' => $authorizedUser,
            ]
        );
    }

    //ALL ROUTE FUNCTION START HERE


















    //UPDATE DATA AFTER REGISTRATON//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //UPDATE PROFILE ‍START HERE
    public function updateProfile(Request $profileRequest, $lastUserIdReceived)
    {
        // dd($lastUserIdReceived);
        // dd($profileRequest);
        $lastUserId = User::find($lastUserIdReceived);

        //take cv_uploaded column and assign in $pdf
        $pdf = $profileRequest->cv_uploaded;
        //create pdf file name
        $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
        //Assign filename in database
        $lastUserId->cv_uploaded = $pdfName;
        //pdf file store in laravel folder
        $profileRequest->cv_uploaded->move('assets/cv/', $pdfName);

        $lastUserId->contact_number = $profileRequest->contact_number;
        $lastUserId->occupation = $profileRequest->occupation;
        $lastUserId->job_status = $profileRequest->job_status;
        $lastUserId->address = $profileRequest->address;
        $lastUserId->profile_photo = $this->uploadProfileImage($profileRequest->file('profile_photo'));
        $lastUserId->cover_photo = $this->uploadCoverImage($profileRequest->file('cover_photo'));
        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message2', "Profile Updated successfully!");
    }

    public function uploadProfileImage($file)
    {
        //এক্সটেনশন সহকারে Image file এর নাম দেয়া। এখানে time()হল ফাইলের নতুন নাম, $file আগত ইমেজ ফাইল এবং getClientOriginalExtension() সেই ফাইলের এক্সটেনশন।
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        //resize() ইমেজকে resize করার জন্য, save() হল আপলোডেড ইমেজটা লোকালি কোথায় সেভ করতে চাই তা, storage_path() দিয়ে সরাসরি storage এ চলে যাবে, /app/public/products/ দিয়ে storage এর ভীতরে app এ যাবে,
        //profile_pictures' . $fileName এটি হবে স্টোর হওয়া ফাইলের নাম।
        Image::make($file)->resize(200, 200)->save(public_path('/assets/profilePictures/profile_photo' . $fileName));
        //$fileName টা ima এ যাবে।
        return $fileName;
    }

    public function uploadCoverImage($file)
    {
        //এক্সটেনশন সহকারে Image file এর নাম দেয়া। এখানে time()হল ফাইলের নতুন নাম, $file আগত ইমেজ ফাইল এবং getClientOriginalExtension() সেই ফাইলের এক্সটেনশন।
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        //resize() ইমেজকে resize করার জন্য, save() হল আপলোডেড ইমেজটা লোকালি কোথায় সেভ করতে চাই তা, storage_path() দিয়ে সরাসরি storage এ চলে যাবে, /app/public/products/ দিয়ে storage এর ভীতরে app এ যাবে,
        //cover_photos' . $fileName এটি হবে স্টোর হওয়া ফাইলের নাম।
        Image::make($file)->resize(950, 300)->save(public_path('/assets/coverPictures/cover_photo' . $fileName));
        //$fileName টা ima এ যাবে।
        return $fileName;
    }

    public function pdfDownload(Request $request, $cv_uploaded)
    {
        //ডাটাবেস এর যে $cv_uploaded ফাইলের সাথে লারাভেল ফোল্ডারে স্টোর হওয়া পিডিএফ ফাইলের সাথে মিলে যাবে তা ডাউনলোড হবে।
        return response()->download(public_path('assets/cv/' . $cv_uploaded));
    }
    //UPDATE PROFILE END HERE



    //UPDATE ABOUT START HERE
    public function updateAbout(Request $aboutRequest, $lastUserIdReceived)
    {

        $lastUserId = About::find($lastUserIdReceived);
        $lastUserId->about = $aboutRequest->about;

        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message3', "About Updated successfully!");
    }
    //UPDATE ABOUT END HERE



    //UPDATE WORK START HERE
    public function updateWork(Request $workRequest, $lastUserIdReceived)
    {
        $lastUserId = Work::find($lastUserIdReceived);

        $zip = $workRequest->completed_work_file;
        $zipName = time() . '.' . $zip->getClientOriginalExtension();
        $lastUserId->completed_work_file = $zipName;
        $workRequest->completed_work_file->move('assets/work', $zipName);

        $lastUserId->type_of_work = $workRequest->type_of_work;
        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message4', "Work updated successfully!");
    }

    public function downloadWork(Request $request, $completed_work_file)
    {
        return response()->download(public_path('assets/work/' . $completed_work_file));
    }
    //UPDATE WORK START HERE




    //UPDATE EDUCATION START HERE
    public function updateEducation(Request $educationRequest, $lastUserIdReceived)
    {

        $lastUserId = Education::find($lastUserIdReceived);

        $lastUserId->degree = $educationRequest->degree;
        $lastUserId->start_year = $educationRequest->start_year;
        $lastUserId->end_year = $educationRequest->end_year;
        $lastUserId->institute_name = $educationRequest->institute_name;

        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message6', "Education Updated successfully!");
    }
    //UPDATE EDUCATION END HERE




    //UPDATE EXPERIANCE START HERE
    public function updateExperiance(Request $experianceRequest, $lastUserIdReceived)
    {

        $lastUserId = Experiance::find($lastUserIdReceived);

        $lastUserId->designation = $experianceRequest->designation;
        $lastUserId->start_year = $experianceRequest->start_year;
        $lastUserId->end_year = $experianceRequest->end_year;
        $lastUserId->total_experiance = $experianceRequest->total_experiance;
        $lastUserId->company_name = $experianceRequest->company_name;

        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message8', "Experiance Updated successfully!");
    }
    //UPDATE EXPERIANCE END HERE




    //UPDATE SKILL START HERE
    public function updateSkill(Request $skillRequest, $lastUserIdReceived)
    {

        $lastUserId = Skill::find($lastUserIdReceived);

        $lastUserId->skills = $skillRequest->skills;
        $lastUserId->skillsLevel = $skillRequest->skillsLevel;
        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message7', "Skills updated successfully!");
    }
    //UPDATE SKILL END HERE



    //UPDATE PERSONAL START HERE
    public function updatePersonal(Request $personalRequest, $lastUserIdReceived)
    {
        $lastUserId = Personal_data::find($lastUserIdReceived);

        $lastUserId->father_name = $personalRequest->father_name;
        $lastUserId->mother_name = $personalRequest->mother_name;
        $lastUserId->permanent_address = $personalRequest->permanent_address;
        $lastUserId->height = $personalRequest->height;
        $lastUserId->sex = $personalRequest->sex;
        $lastUserId->blood_group = $personalRequest->blood_group;
        $lastUserId->marital_status = $personalRequest->marital_status;
        $lastUserId->religion = $personalRequest->religion;
        $lastUserId->nid_number = $personalRequest->nid_number;
        $lastUserId->nationality = $personalRequest->nationality;
        $lastUserId->signature = $this->uploadSignature($personalRequest->file('signature'));
        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message10', "Personal data updated successfully!");
    }

    public function uploadSignature($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(300, 50)->save(public_path('/assets/signatures/signature' . $fileName));
        return $fileName;
    }
    //UPDATE PERSONAL END HERE



    // UPDATE SOCIAL MEDIA START HERE
    public function updateSocialMedia(Request $socialMediaRequest, $lastUserIdReceived)
    {

        $lastUserId = SocialMedia::find($lastUserIdReceived);

        $lastUserId->skype = $socialMediaRequest->skype;
        $lastUserId->facebook = $socialMediaRequest->facebook;
        $lastUserId->linkedin = $socialMediaRequest->linkedin;
        $lastUserId->instagram = $socialMediaRequest->instagram;
        $lastUserId->twitter = $socialMediaRequest->twitter;
        $lastUserId->save();

        return redirect()->route('category.profile_edit')->with('message10', "Social Media data updated successfully!");
    }
    // UPDATE SOCIAL MEDIA END HERE



















    ///////////////////////////////////////[PROFILE PRINT AS PDF]//////////////////////////////////////////////////////////////////////////////////////////
    // DOWNLOAD PROFILE
    public function downloadProfile()
    {
        //সকল টেবিলের ডাটা নিয়ে আসবো।
        $about = About::all();
        $education = Education::all();
        $experiance = Experiance::all();
        $personal_data = Personal_data::all();
        $profile = User::all();
        $skill = Skill::all();
        $socialMedia = SocialMedia::all();
        $work = Work::all();

        //এখন পিডিএফ ফাইলের নাম দিবো।
        $fileName = 'profile.pdf';

        //ডাটাবেস থেকে ডাটা গুলো যে পেজে দেখাবে সেই পেজ এর পাথ বলে দিবো।
        view('backend.category.pdf');

        //render(); এর মাধ্যেম সম্পুর্ন পাথটিকে স্ট্রিং এ কনভার্ট করে ভ্যারিয়েবলে রাখবো। একই সাথে compact() এর মাধ্যমে ডাটাবেস এর ডাটা গুলোও রাখবো।
        $html = view('backend.category.pdf', compact('about', 'education', 'experiance', 'personal_data', 'profile', 'skill', 'socialMedia', 'work'))->render();


        //https://mpdf.github.io/ >> Installation & Setup >> Installation v7.x+ >> Usage >> copy
        $mpdf = new \Mpdf\Mpdf();
        //এখন আমাদের পিডিএফ ফাইলটি এখানে রাখবো।
        $mpdf->WriteHTML($html);

        //fileName: আউটপুটে পিডিএফ ফাইলের যে নাম আসবে তা, I = বাটনে ক্লিক করলে পিডিএফ ফাইলটি দেখাবে। I এর জায়গায় D লিখলে পিডিএফ বাটনে ক্লিক করলে পিডিএফ ফাইল ডাউনলোড হয়ে যাবে।
        $mpdf->Output($fileName, 'I');
    }

    //EMPLOYEE SEARCHING
    public function searchEmployee(Request $request)
    {
        // dd($request->textField);
        // dd($request->textField2);
        // dd($request->textField3);

        $input1 = $request['textField'] ?? "";
        $input2 = $request['textField2'] ?? "";
        $input3 = $request['textField3'] ?? "";

        if ($input1 != " ") {
            $searchData = User::where('occupation', '=', $input1)->get();
            return view('backend.category.search', compact('searchData'));
        }
        if ($input2 != " ") {
            $searchData = User::where('address', '=', $input2)->get();
            return view('backend.category.search', compact('searchData'));
        }
        if ($input3 != " ") {
            $searchData = User::where('job_status', '=', $input3)->get();
            return view('backend.category.search', compact('searchData'));
        }
    }

    // DOWNLOAD PROFILE AFTER LOGIN
    public function download_profile_after_login()
    {
        $authorizedUser = Auth::user();
        // dd($authorizedUser);

        $about = About::all();
        $education = Education::all();
        $experiance = Experiance::all();
        $personal_data = Personal_data::all();
        $skill = Skill::all();
        $socialMedia = SocialMedia::all();
        $work = Work::all();

        $fileName = 'profile.pdf';
        view('backend.category.pdfAfterLogin');

        $html = view(
            'backend.category.pdfAfterLogin',
            compact(
                'authorizedUser',
                'about',
                'education',
                'experiance',
                'personal_data',
                'skill',
                'socialMedia',
                'work'
            )
        )->render();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName, 'I');
    }






















    //UPDATE DATA AFTER LOGIN////////////////////////////////////////////////////////////////////////////////////
    //UPDATE PROFILE ‍START HERE
    public function updateProfileAfterLogin(Request $profileRequest, $lastUserIdReceived)
    {
        // dd($lastUserIdReceived);
        // dd($profileRequest);
        $lastUserId = User::find($lastUserIdReceived);

        //take cv_uploaded column and assign in $pdf
        $pdf = $profileRequest->cv_uploaded;
        //create pdf file name
        $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
        //Assign filename in database
        $lastUserId->cv_uploaded = $pdfName;
        //pdf file store in laravel folder
        $profileRequest->cv_uploaded->move('assets/cv/', $pdfName);

        $lastUserId->contact_number = $profileRequest->contact_number;
        $lastUserId->occupation = $profileRequest->occupation;
        $lastUserId->job_status = $profileRequest->job_status;
        $lastUserId->address = $profileRequest->address;
        $lastUserId->profile_photo = $this->uploadProfileImage($profileRequest->file('profile_photo'));
        $lastUserId->cover_photo = $this->uploadCoverImage($profileRequest->file('cover_photo'));
        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message2', "Profile Updated successfully!");
    }

    public function uploadProfileImageAfterLogin($file)
    {
        //এক্সটেনশন সহকারে Image file এর নাম দেয়া। এখানে time()হল ফাইলের নতুন নাম, $file আগত ইমেজ ফাইল এবং getClientOriginalExtension() সেই ফাইলের এক্সটেনশন।
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        //resize() ইমেজকে resize করার জন্য, save() হল আপলোডেড ইমেজটা লোকালি কোথায় সেভ করতে চাই তা, storage_path() দিয়ে সরাসরি storage এ চলে যাবে, /app/public/products/ দিয়ে storage এর ভীতরে app এ যাবে,
        //profile_pictures' . $fileName এটি হবে স্টোর হওয়া ফাইলের নাম।
        Image::make($file)->resize(200, 200)->save(public_path('/assets/profilePictures/profile_photo' . $fileName));
        //$fileName টা ima এ যাবে।
        return $fileName;
    }

    public function uploadCoverImageAfterLogin($file)
    {
        //এক্সটেনশন সহকারে Image file এর নাম দেয়া। এখানে time()হল ফাইলের নতুন নাম, $file আগত ইমেজ ফাইল এবং getClientOriginalExtension() সেই ফাইলের এক্সটেনশন।
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        //resize() ইমেজকে resize করার জন্য, save() হল আপলোডেড ইমেজটা লোকালি কোথায় সেভ করতে চাই তা, storage_path() দিয়ে সরাসরি storage এ চলে যাবে, /app/public/products/ দিয়ে storage এর ভীতরে app এ যাবে,
        //cover_photos' . $fileName এটি হবে স্টোর হওয়া ফাইলের নাম।
        Image::make($file)->resize(950, 300)->save(public_path('/assets/coverPictures/cover_photo' . $fileName));
        //$fileName টা ima এ যাবে।
        return $fileName;
    }
    //UPDATE PROFILE END HERE



    //UPDATE ABOUT START HERE
    public function updateAboutAfterLogin(Request $aboutRequest, $lastUserIdReceived)
    {

        $lastUserId = About::find($lastUserIdReceived);
        $lastUserId->about = $aboutRequest->about;

        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message3', "About Updated successfully!");
    }
    //UPDATE ABOUT END HERE



    //UPDATE WORK START HERE
    public function updateWorkAfterLogin(Request $workRequest, $lastUserIdReceived)
    {
        $lastUserId = Work::find($lastUserIdReceived);

        $zip = $workRequest->completed_work_file;
        $zipName = time() . '.' . $zip->getClientOriginalExtension();
        $lastUserId->completed_work_file = $zipName;
        $workRequest->completed_work_file->move('assets/work', $zipName);

        $lastUserId->type_of_work = $workRequest->type_of_work;
        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message4', "Work updated successfully!");
    }

    public function downloadWorkAfterLogin(Request $request, $completed_work_file)
    {
        return response()->download(public_path('assets/work/' . $completed_work_file));
    }
    //UPDATE WORK START HERE




    //UPDATE EDUCATION START HERE
    public function updateEducationAfterLogin(Request $educationRequest, $lastUserIdReceived)
    {

        $lastUserId = Education::find($lastUserIdReceived);

        $lastUserId->degree = $educationRequest->degree;
        $lastUserId->start_year = $educationRequest->start_year;
        $lastUserId->end_year = $educationRequest->end_year;
        $lastUserId->institute_name = $educationRequest->institute_name;

        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message6', "Education Updated successfully!");
    }
    //UPDATE EDUCATION END HERE




    //UPDATE EXPERIANCE START HERE
    public function updateExperianceAfterLogin(Request $experianceRequest, $lastUserIdReceived)
    {

        $lastUserId = Experiance::find($lastUserIdReceived);

        $lastUserId->designation = $experianceRequest->designation;
        $lastUserId->start_year = $experianceRequest->start_year;
        $lastUserId->end_year = $experianceRequest->end_year;
        $lastUserId->total_experiance = $experianceRequest->total_experiance;
        $lastUserId->company_name = $experianceRequest->company_name;

        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message8', "Experiance Updated successfully!");
    }
    //UPDATE EXPERIANCE END HERE




    //UPDATE SKILL START HERE
    public function updateSkillAfterLogin(Request $skillRequest, $lastUserIdReceived)
    {

        $lastUserId = Skill::find($lastUserIdReceived);

        $lastUserId->skills = $skillRequest->skills;
        $lastUserId->skillsLevel = $skillRequest->skillsLevel;
        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message7', "Skills updated successfully!");
    }
    //UPDATE SKILL END HERE



    //UPDATE PERSONAL START HERE
    public function updatePersonalAfterLogin(Request $personalRequest, $lastUserIdReceived)
    {
        $lastUserId = Personal_data::find($lastUserIdReceived);

        $lastUserId->father_name = $personalRequest->father_name;
        $lastUserId->mother_name = $personalRequest->mother_name;
        $lastUserId->permanent_address = $personalRequest->permanent_address;
        $lastUserId->height = $personalRequest->height;
        $lastUserId->sex = $personalRequest->sex;
        $lastUserId->blood_group = $personalRequest->blood_group;
        $lastUserId->marital_status = $personalRequest->marital_status;
        $lastUserId->religion = $personalRequest->religion;
        $lastUserId->nid_number = $personalRequest->nid_number;
        $lastUserId->nationality = $personalRequest->nationality;
        $lastUserId->signature = $this->uploadSignature($personalRequest->file('signature'));
        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message10', "Personal data updated successfully!");
    }

    public function uploadSignatureAfterLogin($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(300, 50)->save(public_path('/assets/signatures/signature' . $fileName));
        return $fileName;
    }
    //UPDATE PERSONAL END HERE



    // UPDATE SOCIAL MEDIA START HERE
    public function updateSocialMediaAfterLogin(Request $socialMediaRequest, $lastUserIdReceived)
    {

        $lastUserId = SocialMedia::find($lastUserIdReceived);

        $lastUserId->skype = $socialMediaRequest->skype;
        $lastUserId->facebook = $socialMediaRequest->facebook;
        $lastUserId->linkedin = $socialMediaRequest->linkedin;
        $lastUserId->instagram = $socialMediaRequest->instagram;
        $lastUserId->twitter = $socialMediaRequest->twitter;
        $lastUserId->save();

        return redirect()->route('category.profile_edit_after_login')->with('message10', "Social Media data updated successfully!");
    }
    // UPDATE SOCIAL MEDIA END HERE




}
