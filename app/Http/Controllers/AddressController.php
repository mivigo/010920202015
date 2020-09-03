<?php

namespace App\Http\Controllers;

use App\Address;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AddressController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the addresses.
     *
     * @return Application|Factory|Response|View
     */
    public function index(): View
    {
        $addresses = Address::orderBy('name', 'ASC')->get();

        return view('layouts.app', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();

            $address = new Address();

            $address->fill($input);

            $address->save();

            return redirect()->route('address')
                ->with('success', 'Created successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
