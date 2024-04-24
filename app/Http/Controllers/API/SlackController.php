<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $msg = $request->message;
            \Slack::send($msg);
        return response()->json(['msg' => 'success'], 200);
        } catch (\Exception $e) {
            // Code to handle the exception
            return response()->json(['error' => 'An error occurred'], 500);
        } 
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
