<?php

namespace App\Http\Controllers\Admin;

use App\Models\PermitModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax())
        {

            $query = PermitModel::all(); //ini kalau terdapat relasi di database, namanya liat di modelnya pada saat buat relasi
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                        return '
                            <div class ="btn-group">
                                <div class="dropdown">
                                   <a href = "'.route('outstanding-detail',$permit->id_permit).'">
                                   <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Approval
                                    </button>
                                   </a>
                                </div>
                            </div>
                        ';
                })


                 ->rawColumns(['action'])
                ->make();
        }

        return view('admin.permit.permitTable');
    }
}
