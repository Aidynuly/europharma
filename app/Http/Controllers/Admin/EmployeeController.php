<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\City;
use App\Models\Employee;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();

        return view('admin.employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();

        return view('admin.employee.create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $employee = Employee::create([
            'name'  =>  $request['inputName'],
            'surname'   =>  $request['inputSurname'],
            'phone'    =>  $request['inputPhone'],
            'password'  =>  \Hash::make($request['inputPassword']),
            'token'     =>   mb_strtoupper(Str::random(40)),
            'city_id'   =>  $request['inputCity'],
            'created_at'    =>  Carbon::now(),
            'updated_at'    =>  Carbon::now(),
        ]);

        return redirect()->route('employees.index', ['employees' => Employee::get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        $orders = Order::whereEmployeeId($id)->count();
        return view('admin.employee.show', ['employee' => $employee, 'orders' => $orders]);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request['inputName'];
        $employee->surname = $request['inputSurname'];
        $employee->phone = $request['inputPhone'];
        $employee->save();

        return redirect()->route('employees.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();

        return redirect()->route('employees.index', ['employees' => Employee::get()]);
    }
}
