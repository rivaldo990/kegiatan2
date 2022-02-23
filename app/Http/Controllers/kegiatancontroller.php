<?php

namespace App\Http\Controllers;

use App\User;
use App\Register;
use App\Activity;
use App\Student;
use Illuminate\Http\Request;
use App\Mail\PendaftaranMail;
use Nexmo\Laravel\Facade\Nexmo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{

    public function show()
    {
        $activitys = Activity::paginate(8);

        return view('kegiatan.show', compact('activitys'));
    }

    public function create($id)
    {
        $activity = Activity::findOrFail($id);
        return view('daftar.create', compact('activity'));
    }

    public function store(Request $request)    
    {       
        $user = User::findOrFail(Auth::user()->id);
        
        $register = Register::create([
            'user_id'   => $user->id,
            'activity_id' => $request->activity_id,
            'status' => $request->status,
            'qty' => $request->qty,
        ]);

        // if ($user->save()) {
        //     $user = User::findOrFail(Auth::user()->id);
        
        //     Nexmo::message()->send([
        //         'to' =>   '62' . $user->phone,
        //         'from' => 'Kegiatanku',
        //         'text'  => 'Halo Kami dari kegiatanku Ingin Memberi tahu Atas pembelian tiket yang berhasil'
                
         
                
        //         ]);
        // }
        // $to = Mail::to($user->email)->send(new PendaftaranMail($register));

        return redirect()->back();
    }
}