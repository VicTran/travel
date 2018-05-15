<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('customers.index',compact(
            'customers'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = $request->all();
        try{
            DB::beginTransaction();
            $customer = new Customer();
            $tour_id = $customer->saveCustomer($customers);
            DB::commit();
            alert()->overlay('Create Customer', 'Success Create Customer', 'success');
            return redirect(route('customer.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }

        return redirect(route('customer.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customers = $request->all();
        try{
            DB::beginTransaction();
            $customer = Customer::find($id);
            $customer->updateCustomer($customers);
            DB::commit();
            alert()->overlay('Save Customer', 'Success Save Customer', 'info');
            return redirect(route('customer.index'));
        }catch ( \Exception $e){
            DB::rollback();
            echo $e;
            die();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Customer::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo $e;
        }
        alert()->overlay('Delete Customer', 'Success Delete Customer', 'error');
        return redirect(route('customer.index'));
    }
}
