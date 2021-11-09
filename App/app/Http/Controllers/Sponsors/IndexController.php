<?php

namespace App\Http\Controllers\Sponsors;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.sponsors', [
            'sponsor' => Page::find(7),
            'sponsors' => Sponsor::all()
        ]);
    }
}


