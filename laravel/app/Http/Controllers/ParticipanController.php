<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participan;
use File;

class ParticipanController extends Controller
{
    public function login()
    {
        return view('login_user.login');
    }
    public function process(Request $request){
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $result = Participan::where('username', '=', $validateData['username'])->first();
        if($result){
            if (($request->password == $result->password))
            {
                session(['username' => $request->username]);
                return redirect('/participan');
            }
            else {
                return back()->withInput()->with('pesan',"Login Gagal");
            }
        }
        else{
            return back()->withInput()->with('pesan',"Login Gagal");
        }
    }

    public function logout(){
        session()->forget('username');
        return redirect('login')->with('pesan','Logout berhasil');
    }

    public function index()
    {
        return view('participan.home');
    }

    public function journey()
    {
        return view('participan.journey');
    }

    public function teaching()
    {
        return view('participan.teaching');
    }

    public function about()
    {
        return view('participan.about');
    }

    public function index_()
    {
        $pelajars = Participan::all();
        return view('participan.index',['participans' => $pelajars]);
    }

    public function create()
    {
        return view('participan.create_');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:15, unique:participans',
            'password' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat' => '',
            'image' => 'required|file|image|max:10000',
        ]);
        $pelajar = new Participan();
        $pelajar->username = $validateData['username'];
        $pelajar->password = $validateData['password'];
        $pelajar->name = $validateData['name'];
        $pelajar->gender = $validateData['jenis_kelamin'];
        $pelajar->address = $validateData['alamat'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/img/gallery',$namaFile);
            $pelajar->image = $path;
        }
        $pelajar->save();
        $request->session()->flash('pesan','Pendaftaran berhasil. Silahkan lakukan login.');
        return redirect()->route('login.index');
    }

    public function show($participan_id)
    {
        $result = Participan::findOrFail($participan_id);
        return view('index5',['participan' => $result]);
    }

    public function edit($participan_id)
    {
        $result = Participan::findOrFail($participan_id);
        return view('participan.edit',['participan' => $result]);
    }

    public function update(Request $request, Participan $participan)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:15, unique:participans',
            'password' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat' => '',
            'image' => 'file|image|max:10000',
        ]);
        $participan->username = $validateData['username'];
        $participan->password = $validateData['password'];
        $participan->name = $validateData['name'];
        $participan->gender = $validateData['jenis_kelamin'];
        $participan->address = $validateData['alamat'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            File::delete($participan->image);
            $path = $request->image->move('assets/img/gallery',$namaFile);
            $participan->image = $path;
        }
        $participan->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('participan.show',['participan' => $participan->id]);
    }

    public function destroy(Request $request, Participan $participan)
    {
        File::delete($participan->image);
        $participan->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('participan.index');
    }

    public function get_course()
    {
        return view('participan.get_course');
    }


}

