<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119064,
            "Nama" => "Fadel Ibrahim",
            "Gender" => "Laki-laki",
            "Phone" => 6281228342744,
            "Kelas" => "XII RPL 2"
        ];

    }

}