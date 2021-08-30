<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\UserContacts;

class UserContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newUserContact=UserContacts::all();
        return $newUserContact;
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
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email_1'=>'required',
            'mobile_1'=>'required'
        ]);

        $newUserContact=new UserContacts($request->only('name', 'email_1', 'email_2', 'mobile_1', 'mobile_2', 'group_id', 'isFavorite'));
        $newUserContact->created_at = date('Y-m-d H:i:s'); 
        $newUserContact->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showUserContact=UserContacts::where('id',$id)->get();
        return $showUserContact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findUser(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateUserContact=UserContacts::findOrFail($id);
        $updateUserContact->name = $request->name;
        $updateUserContact->email_1 = $request->email_1;
        $updateUserContact->email_2 = $request->email_2;
        $updateUserContact->mobile_1 = $request->mobile_1;
        $updateUserContact->mobile_2 = $request->mobile_2;
        $updateUserContact->group_id = $request->group_id;
        $updateUserContact->isFavorite = $request->isFavorite;
        $updateUserContact->updated_at = date('Y-m-d H:i:s'); 
        $updateUserContact->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleteUserContact=UserContacts::where('id',$id)->delete();
    }
}
