<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

/**
 *
 */
class ListingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $payload = [
            'listings' => Listing::latest()->filter(request(['tags', 'location','search']))->get(),
        ];

        return view('pages.listings.listings', $payload);
    }

    /**
     * @param Listing $listing
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Listing $listing) {

        $payload = [
            'listing' => $listing,
        ];

        return view('pages.listings.listing', $payload);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create() {
        return view('pages.listings.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        // Add validation to the form
        // make sure to add the fields to the model to allow  the mass assignment law
        $formFields = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email', Rule::unique('listings', 'email')],
            'tags' => 'required',
            'website' => ['required', Rule::unique('listings', 'website')],
            'description' => ['required', Rule::unique('listings', 'description')],
        ]);

        // Adding the record to the table
        Listing::create($formFields);

        Session::flash('message', 'Gig is Created Successfully');

        return redirect('/')->with('success', 'Gig Created Successfully');

    }
}
