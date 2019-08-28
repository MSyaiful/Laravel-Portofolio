<?php

namespace App\Http\Controllers;

use App\Member;
use App\Jnsmember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jnsmember = Jnsmember::all();
        $member = Member::all();
        return view('home')->withMem($member)->withJnsmember($jnsmember);
    }

    public function get()
    {
        $member = Member::all();
        return view('member')->withMem($member);
    }

    public function listmember($id)
    {
        $member = Member::find($id);
        return view('listmember')->withBlog($member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        return view('tambahmember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_save(Request $request)
    {
        $member = new Member;
    	$member->nama_member = $request->nama_member;
        $member->jenis_member = $request->jenis_member;
        $member->email = $request->email;
    	$member->save();
    	return redirect('member');
    }

    public function jenis(){
        $jenis = Jnsmember::all();
        return view('tambahmember')->withJenis($jenis);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $member = Member::find($id); 
    	$member->delete();
    	return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function change($id)
    {
        $member = Member::find($id);
        $jnsmember = Jnsmember::all();
    	return view('editmember')->withMem($member)->withJnsmember($jnsmember);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $member = Member::find($request->id);
    	$member->nama_member = $request->nama_member;
        $member->jenis_member = $request->jenis_member;
        $member->email = $request->email;
    	$member->save();

    	return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
