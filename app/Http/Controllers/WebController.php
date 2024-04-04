<?php

namespace App\Http\Controllers;

use App\Models\web;
use App\Http\Requests\StorewebRequest;
use App\Http\Requests\UpdatewebRequest;

 use App\Models\Web\CallToAction;
 use App\Models\Web\Testimonial;
use Illuminate\Http\Request;
use App\Models\Web\AboutUs;
 use App\Models\Web\Feature;
 use App\Models\Web\Slider;
// use App\Models\Language;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // Sliders

          $data['sliders'] = Slider::where('language_id', 1)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();
        // $data['sliders'] = Slider::where('language_id', Language::version()->id)
        //                     ->where('status', '1')
        //                     ->orderBy('id', 'asc')
        //                     ->get();

//dd($data['sliders']);

        // Features
        $data['features'] = Feature::where('language_id',1)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();


              // $data['features'] = Feature::where('language_id', Language::version()->id)
              //               ->where('status', '1')
              //               ->orderBy('id', 'asc')
              //               ->get();                   

        // About Us
        // $data['about'] = AboutUs::where('language_id', Language::version()->id)
        //                     ->where('status', '1')
        //                     ->first();


   $data['about'] = AboutUs::where('language_id',1)
                            ->where('status', '1')
                            ->first();


        // Call To Action
        // $data['callToAction'] = CallToAction::where('language_id', Language::version()->id)
        //                     ->where('status', '1')
        //                     ->first();


 $data['callToAction'] = CallToAction::where('language_id',1)
                            ->where('status', '1')
                            ->first();
        // Testimonials                                
        // $data['testimonials'] = Testimonial::where('language_id', Language::version()->id)
        //                     ->where('status', '1')
        //                     ->orderBy('id', 'desc')
        //                     ->get();


  $data['testimonials'] = Testimonial::where('language_id', 1)
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        return view('web.index', $data);
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
     * @param  \App\Http\Requests\StorewebRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewebRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(web $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewebRequest  $request
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewebRequest $request, web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(web $web)
    {
        //
    }
}
