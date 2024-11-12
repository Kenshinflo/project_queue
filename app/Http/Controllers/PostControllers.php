<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\UserAccount;
use App\Providers\RouteServiceProvider;
use Inertia\Inertia;

class PostControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::all();
        $results = UserAccount::all();
        return Inertia::render('Welcome', [
            'user_account' => $results,
        ]);
    }
    public function login(){
        return view('auth_login');
    }
    public function username()
    {
        return 'user_id'; // Replace with the field you want to use
    }
    public function auth_login(LoginRequest $request)
    {
        //
        // $posts = Post::all();
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();
        
        //  return Inertia::render('Welcome');
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
