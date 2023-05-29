<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Participan;

class StudentController extends Controller
{
    public function store(Request $request){
        $skor = 0;
        $validateData = $request->validate([
            'jawaban_1' => 'required',
            'jawaban_2' => 'required',
            'jawaban_3' => 'required',
            'jawaban_4' => 'required',
            'jawaban_5' => 'required',
            'jawaban_6' => 'required',
            'jawaban_7' => 'required',
            'jawaban_8' => 'required',
            'jawaban_9' => 'required',
        ]);
        $result_1 = Student::where('id', '=', 1)->first();
        $result_2 = Student::where('id', '=', 2)->first();
        $result_3 = Student::where('id', '=', 3)->first();
        $result_4 = Student::where('id', '=', 4)->first();
        $result_5 = Student::where('id', '=', 5)->first();
        $result_6 = Student::where('id', '=', 6)->first();
        $result_7 = Student::where('id', '=', 7)->first();
        $result_8 = Student::where('id', '=', 8)->first();
        $result_9 = Student::where('id', '=', 9)->first();
        // if($result){
        //     if (($request->jenis_kelamin == $result->ques))
        //     {
        //         // session(['username' => $request->username]);
        //         // return redirect('/participan');
        //         $skor += 1;
        //     }
        //     else {
        //         return back()->withInput()->with('pesan',"Pengerjaan salah");
        //     }
        // }
        // else{
        //     return back()->withInput()->with('pesan',"Pengerjaan salah");
        // }
        // if($result_){
        //     if (($request->jenis_kelamin_ == $result_->ques))
        //     {
        //         // session(['username' => $request->username]);
        //         // return redirect('/participan');
        //         $skor += 1;
        //     }
        //     else {
        //         return back()->withInput()->with('pesan',"Pengerjaan salah");
        //     }
        // }
        // else{
        //     return back()->withInput()->with('pesan',"Pengerjaan salah");
        // }
        // if ($skor == 2){
        //     return redirect('/participan/create');
        // }else{
        //     return redirect('/participan');
        // }
        // if($result){
        if (($request->jawaban_1 == $result_1->ques))
        {
                // session(['username' => $request->username]);
                // return redirect('/participan');
            $skor += 1;
        }
        // if($result_){
        if (($request->jawaban_2 == $result_2->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_3 == $result_3->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_4 == $result_4->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_5 == $result_5->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_6 == $result_6->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_7 == $result_7->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_8 == $result_8->ques))
        {
            $skor += 1;
        }
        if (($request->jawaban_9 == $result_9->ques))
        {
            $skor += 1;
        }
        if ($skor < 4){
            $request->session()->flash('pesan','Your Brilliant Journey - Al-Mubtadin');
            // return redirect('/student/test_')->with('pesan','Logout berhasil');
            return redirect('/pemula');
        }elseif($skor > 3 and $skor < 7){
            $request->session()->flash('pesan','Your Brilliant Journey - Al-Mutawasitin');
            return redirect('/menengah');
        }else{
            $request->session()->flash('pesan','Your Brilliant Journey - Al-Mutaqadimin');
            return redirect('/mahir');
        }
    }

    public function test()
    {
        return view('student.test');
    }

    public function test_()
    {
        return view('student.test_');
    }

    // public function show($participan_id)
    // {
    //     $result = Participan::findOrFail($participan_id);
    //     return view('index5',['student' => $result]);
    // }
}
