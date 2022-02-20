<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $info = Info::orderBy('id', 'DESC')->limit(4)->get();
        $pendaftar = Pendaftar::count();
        $jurusan = Jurusan::count();
        $cs = User::count();
        return view('Client/index', compact(
            'info',
            'pendaftar',
            'jurusan',
            'cs'
        ));
    }
}
