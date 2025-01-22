<?php

namespace Modules\MasterData\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Genre;

class GenreController extends Controller
{
    public function lists()
    {
        $data['title'] = 'Akun';
        $data['lists'] = Genre::getGenreLists();

        return view('masterdata::genre.lists', $data);
    }
}
