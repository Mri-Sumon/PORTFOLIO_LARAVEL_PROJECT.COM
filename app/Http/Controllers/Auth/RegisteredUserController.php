<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Education;
use App\Models\About;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Experiance;
use App\Models\Personal_data;
use App\Models\SocialMedia;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        About::create([
            'commonId' => $request->commonId,
        ]);
        Education::create([
            'commonId' => $request->commonId,
        ]);
        Experiance::create([
            'commonId' => $request->commonId,
        ]);
        Personal_data::create([
            'commonId' => $request->commonId,
        ]);

        Skill::create([
            'commonId' => $request->commonId,
        ]);
        SocialMedia::create([
            'commonId' => $request->commonId,
        ]);
        Work::create([
            'commonId' => $request->commonId,
        ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'commonId' => $request->commonId,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);


        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('category.profile_edit');
    }
}
