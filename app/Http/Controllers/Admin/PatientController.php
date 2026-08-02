<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class PatientController extends Controller
{


    public function index(Request $request)
    {


            $patients = User::where('role','patient')

            ->when($request->search,function($query) use ($request){


            $query->where('nom','like','%'.$request->search.'%')
                ->orWhere('prenom','like','%'.$request->search.'%')
                ->orWhere('telephone','like','%'.$request->search.'%')
                ->orWhere('email','like','%'.$request->search.'%');


            })


            ->latest()
            ->paginate(10);



            return view(
            'admin.patients.index',
            compact('patients')
            );


    }

    public function show(User $patient)
    {


        $reservations = $patient->reservations()
            ->latest()
            ->get();



        return view(
            'admin.patients.show',
            compact(
                'patient',
                'reservations'
            )
        );


    }


}