<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index(Request $request)
    {
        $clients = Client::all();
        return view('Supplier', ['clients' => $clients]);
    }

    public function create(Request $request)
    {
        $client = Client::find($request->user_id);
        if (!$client) {
            return redirect()->back()->with('error', 'Please Select Client!');
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:suppliers',
                'password' => 'required|min:6',
            ]);
            $supplier = new Supplier();
            $supplier->name = $request->name;
            $supplier->email = $request->email;
            $supplier->password = $request->password;
            $supplier->parent_user_id = $request->user_id;
            $supplier->save();
            return redirect()->back()->with('success', 'Supplier Added!');
        }
    }

    public function show(Request $request)
    {
        $clients = Client::all();
        if ($request->user_id && $request->user_id != 'null') {
            $suppliers = Supplier::whereIn('parent_user_id', [$request->user_id])->with('client')->get();
            $count = $suppliers->count();
            if ($count > 0) {
                return view('supplier-list', ['suppliers' => $suppliers, 'clients' => $clients, 'user_id' => $request->user_id]);
            } else {
                return view('supplier-list', ['clients' => $clients, 'user_id' => $request->user_id]);
            }
        } else {
            return view('supplier-list', ['clients' => $clients]);
        }
    }
    public function RegistarSupplier(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:suppliers',
            'email' => 'required|email|unique:suppliers',
            'password' => 'required|min:6',
        ]);
        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('Supplier')->with('success', 'Supplier Registar successfully');
    }

    public function DestroyCategory(Request $request)
    {
        $supplier = Supplier::firstOrFail()->where('id', $request->id);
        $supplier->delete();
        return redirect()->back();
    }
}
