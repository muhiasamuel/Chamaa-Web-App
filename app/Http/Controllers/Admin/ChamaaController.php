<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chamaa;
use App\Models\Member;
use App\Models\Contribution;
use Illuminate\Http\Request;

class ChamaaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamaa = Chamaa::all();
        $member = Member::get();
        return view('admin.chamaa.index')->with('chamaa', $chamaa,'member', $member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chamaa  $chamaa
     * @return \Illuminate\Http\Response
     */
    public function show(Chamaa $chamaa)
    {
       $contribution = Contribution::all();
        return view('admin.chamaa.show',\compact('chamaa','contribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chamaa  $chamaa
     * @return \Illuminate\Http\Response
     */
    public function edit(Chamaa $chamaa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chamaa  $chamaa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chamaa $chamaa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chamaa  $chamaa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chamaa $chamaa)
    {   if ($chamaa->chamaa_subscription === 'no') {
        $chamaa->delete();
        $chamaa->members()->detach();
        return redirect()->back();
    }  else {
        return redirect()->back()->withInput();
    }
    }
}
