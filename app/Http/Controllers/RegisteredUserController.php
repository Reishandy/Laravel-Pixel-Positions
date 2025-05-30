<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisteredUserRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $country = new Country();
        $countries = $country->all();

        return view('auth.register', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegisteredUserRequest $request): RedirectResponse
    {
        if (!$request->hasFile('logo')) {
            $logo = 'default';
        } else {
            $logo = $request->file('logo')->store('logos', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $user->employer()->create([
            'name' => $request->employer,
            'logo' => $logo,
            'country_code' => $request->country_code
        ]);

        Auth::login($user);

        return redirect(route('home'));
    }
}
