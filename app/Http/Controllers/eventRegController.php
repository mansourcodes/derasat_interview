<?php

namespace App\Http\Controllers;

use App\Models\EventReg;
use App\Http\Requests\eventRegStoreRequest;
use Illuminate\Http\Request;

class eventRegController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventRegs = EventReg::all();

        return view('eventReg.index', compact('eventRegs'));
    }

    /**
     * @param \App\Http\Requests\eventRegStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(eventRegStoreRequest $request)
    {
        $eventReg = EventReg::create($request->validated());

        $request->session()->flash('eventReg.id', $eventReg->id);

        return redirect()->route('eventReg.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\eventReg $eventReg
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, eventReg $eventReg)
    {
        return view('eventReg.show', compact('eventReg'));
    }
}
