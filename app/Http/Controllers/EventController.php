<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Category;
use App\Subcategory;
use App\Event;
use App\Participant;
use App\Fee;
use Session;
use DB;
use PDF;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;

        return view('event-page.event')
            ->with('i')
            ->with('categories', Category::all())
            ->with('trainings', Training::orderBy('start_date', 'asc')->get());
    }

    public function category($id)
    {
        $i = 1;

        $list = Category::find($id)->id;
        $trainings = Training::where('category_id', $list)->get();

        return view('event-page.category-post')
            ->with('i')
            ->with('categories', Category::all())
            ->with('trainings', $trainings);
    }

    public function course($id)
    {
        $training = Training::find($id);

        return view('event-page.course-post')
            ->with('training', $training)
            ->with('categories', Category::all());
    }

    public function company($id)
    {
        $training = Training::find($id);

         return view('event-page.register-company')
            ->with('training', $training)
            ->with('categories', Category::all());
    }

    public function storeCompany(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required', 
            'address' => 'required', 
            'reg_no' => 'required', 
            'phone' => 'required',
            'email' => 'required|email', 
            'person' => 'required', 
            'position' => 'required'
        ]);

        $cat_id = Training::find($id)->id;

        $event = Event::updateOrCreate([
            'name' => $request->name, 
            'address' => $request->address, 
            'reg_no' => $request->reg_no, 
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website, 
            'person' => $request->person, 
            'position' => $request->position,
            'training_id' => $cat_id,
            'status' => 0
        ]);

        return redirect()->route('event.register.people', ['id' => $event->id]);
    }

    public function people($id)
    {
        $event = Event::find($id);

        return view('event-page.register-people')->with('event', $event);
    }

    public function storePeople(Request $request, $id)
    {
        $event = Event::find($id);

        $count = count($request->input('name'));
        $participant = new Participant();

        for($i=0; $i < $count; $i++) {
            $data[] = array(
                'event_id' => $event->id,
                'name' => $request->name[$i]
            );
        }

        DB::table('participants')->insert($data);

        return redirect()->route('event.register.confirm', ['id'=> $event->id]);
    }

    public function confirm($id)
    {
        $event = Event::find($id);

        $participants = count($event->participants);
        $fee = $event->training->fee;
        $total = $participants * $fee;

        return view('event-page.register-fee-confirm')
            ->with('event', $event)
            ->with('total', $total);
    }

    public function storeConfirm(Request $require, $id)
    {
        $event = Event::find($id);

        //Total fee
        $participants = count($event->participants);
        $fee = $event->training->fee;
        $total = $participants * $fee;

        $fee = new Fee();
        $fee->event_id = $event->id;
        $fee->total = $total;
        $fee->save();

        $event->status = 1;
        $event->save();

        return redirect()->back();
    }

    public function booked()
    {
        $i = 1;
        $events = Event::where('status', 1)->get();

        $events->load(['training' => function($query) {
            $query->orderBy('start_date', 'asc');
        }]);

        return view('admin.systemadmin.booked.index')
            ->with('i')
            ->with('events', $events);
    }

    public function details($id)
    {
        $i = 1;
        $event = Event::find($id);
        $participants = Participant::where('event_id', $event->id)->get();

        return view('admin.systemadmin.booked.details')
            ->with('i')
            ->with('event', $event)
            ->with('participants', $participants);
    }

    public function test()
    {
        return view('test');
    }

    public function eventPDF($id)
    {
        $i = 0;
        $event = Event::find($id);
        $participants = Participant::where('event_id', $event->id)->get();

        $pdf = PDF::loadView('admin.systemadmin.pdf.event_report_pdf', compact('i', 'event', 'participants'));

        $comp = str_slug($event->name);
        $start = $event->training->start_date->format('d/m/Y');

        return $pdf->download($comp . '_' . $start . '_' . 'report.pdf');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
