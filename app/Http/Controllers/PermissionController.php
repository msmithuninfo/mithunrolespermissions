<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:permission list'])->only(['index']);
        $this->middleware(['permission:create permission'])->only(['create']);
        $this->middleware(['permission:edit permission'])->only(['edit']);
        $this->middleware(['permission:delete permission'])->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $permissions = DB::table('permissions')->paginate(8);
        return view('backend.permissions.index', compact('permissions'))
        ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('permissions')->insert([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = DB::table('permissions')->where('id', '=', $id)->first();
        return view('backend.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('permissions')->where('id', $id)->update([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    // Permission $permission
    {
        DB::table('permissions')->where('id', $id)->delete();
        return back()->with('success', 'Permission Deleted Successfully.');


        // $permission->delete();
        // return redirect()->route('permissions.index')
        //                 ->with('success','Permission deleted successfully');
    }
}
