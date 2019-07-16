<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

class EventController extends Controller
{
    //
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }

    public function create()
    {
        return view('pages.create-event');
    }

    public function store(Request $request)
    {
        $niceNames = array(
            'EventName'                 =>  'Event Name',
            'EventLocation'             =>  'Event Location',
            'EventDescription'          =>  'Event Description',
            'EventType'                 =>  'Event Type',
            'EventDateStart'            =>  'Event Date Start',
            'EventDateEnd'              =>  'Event Date End',
            'EventRegistrationStart'    =>  'Event Registration Start',
            'EventRegistrationEnd'      =>  'Event Registration End'
        );

        $EventRange = explode('-',$request->EventDateRange);
        $EventDateStart = $EventRange[0];
        $EventDateEnd = $EventRange[1];

        //echo $EventDateStart->toDateString();   
        $EventDateStart = Carbon::parse($EventDateStart)->format('Y-m-d');     

        $EventRegStart = explode("T",$request->EventRegistrationStart);

        $EventRegistrationStartDate = "";
        $EventRegistrationStartTime = "";

        $EventRegistrationEndDate = "";
        $EventRegistrationEndTime = "";       

        die();

        $validator = Validator::make($request->all(), [
            'EventName'     =>  'required',
            'EventLocation' =>  'required',
            'EventType'     =>  'required',
            'checkdate'     =>  'required|date',
            'checktype'     =>  'required',
            'accountno'     =>  'required',
            'accountname'   =>  'required',
            'bankid'        =>  'required|integer',
            'checkamt'      =>  'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/',
            'ccategory'     =>  'required',
            'currency'      =>  'required',
        ]);

        $validator->setAttributeNames($niceNames); 


    }
}
