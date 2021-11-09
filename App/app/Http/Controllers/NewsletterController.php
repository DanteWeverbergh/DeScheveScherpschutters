<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Newsletter\NewsletterFacade;
class NewsletterController extends Controller
{

    public function store(Request $request)
    {

        NewsletterFacade::subscribe($request->email);

        return back()->with('Gelukt', 'Uw bent nu aangemeld bij onze nieuwsbrief.');
    }
}
?>
