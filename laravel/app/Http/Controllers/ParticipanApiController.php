<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Participan;
use File;

class ParticipanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participans = Participan::all()->toJson(JSON_PRETTY_PRINT);
        return response($participans, 200);
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
        $validateData = Validator::make($request->all(), [
            'username' => 'required|min:3|max:15, unique:participans',
            'password' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat' => '',
            'image' => 'required|file|image|max:1000',
        ]);
        if ($validateData->fails()) {
            return response($validateData->errors(), 400);
        }else{
            $pelajar = new Participan();
            $pelajar->username = $request['username'];
            $pelajar->password = $request['password'];
            $pelajar->name = $request['name'];
            $pelajar->gender = $request['jenis_kelamin'];
            $pelajar->address = $request['alamat'];
            if($request->hasFile('image'))
            {
                $extFile = $request->image->getClientOriginalExtension();
                $namaFile = 'user-'.time().".".$extFile;
                $path = $request->image->move('assets/img/gallery',$namaFile);
                $pelajar->image = $path;
            }
            $pelajar->save();
            return response()->json(["message" => "participant record created"], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if (Participan::where('id', $id)->exists()) {
            $validateData = Validator::make($request->all(),[
                'username' => 'required|min:3|max:15, unique:participan,username',
                'password' => 'required|min:3|max:15',
                'name' => 'required|min:3|max:50',
                'jenis_kelamin' => 'required|in:P,L',
                'alamat' => '',
                'image' => 'file|image|max:1000',
            ]);
            if ($validateData->fails()) {
                return response($validateData->errors(), 400);
            }else{
                $pelajar = Participan::find($id);
                $pelajar->username = $request['username'];
                $pelajar->password = $request['password'];
                $pelajar->name = $request['name'];
                $pelajar->gender = $request['jenis_kelamin'];
                $pelajar->address = $request['alamat'];
                if($request->hasFile('image'))
                {
                    $extFile = $request->image->getClientOriginalExtension();
                    $namaFile = 'user-'.time().".".$extFile;
                    File::delete($pelajar->image);
                    $path = $request->image->move('assets/img/gallery',$namaFile);
                    $pelajar->image = $path;
                }
                $pelajar->save();
                return response()->json(["message" => "participan record updated"], 201);
            }
        } else {
            return response()->json(["message" => "participan not found"], 404);   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Participan::where('id', $id)->exists()) {
            $pelajar = Participan::find($id);
            File::delete($pelajar->image);
            $pelajar->delete();
            return response()->json(["message" => "student record deleted"], 201);
        } else {
            return response()->json(["message" => "Student not found"], 404);
        }
    }
}
