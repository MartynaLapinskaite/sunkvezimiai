<?php

namespace App\Http\Controllers;

use App\Sunkvezimis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;
use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;

class SunkvezimisController extends Controller
{
    public function index()
    {
        $sunkvezimiai = Sunkvezimis::select("*", \DB::raw('(CASE 
                        WHEN sunkvezimis.marke = "1" THEN "Volvo" 
                        WHEN sunkvezimis.marke = "2" THEN "VAZ" 
                        WHEN sunkvezimis.marke = "3" THEN "Mercedes" 
                        ELSE "GAZ" 
                        END) AS marke'))->sortable()->get();
        $metai = $sunkvezimiai->sortBy('gamybos_metai')->pluck('gamybos_metai')->unique();
        $savininkai = $sunkvezimiai->sortBy('savininko_vardas_pavarde')->pluck('savininko_vardas_pavarde')->unique();
        $skaiciai = $sunkvezimiai->sortBy('savininku_skaicius')->pluck('savininku_skaicius')->unique();

        return view('sunkvezimiai', compact('sunkvezimiai', 'metai', 'savininkai', 'skaiciai'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\NaujasSunkvezimisForm::class, [
            'method' => 'POST',
            'url' => route('create')
        ]);
        return view('create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\NaujasSunkvezimisForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $data = $form->getFieldValues();
        Sunkvezimis::create($data);
        return redirect()->to('/');
        // Do saving and other things...
    }

    public function filtravimas(Request $request)
    {
        $sunkvezimiai = Sunkvezimis::select("*", \DB::raw('(CASE 
                        WHEN sunkvezimis.marke = "1" THEN "Volvo" 
                        WHEN sunkvezimis.marke = "2" THEN "VAZ" 
                        WHEN sunkvezimis.marke = "3" THEN "Mercedes" 
                        ELSE "GAZ" 
                        END) AS marke'))->sortable()->get();
        $metai = $sunkvezimiai->sortBy('gamybos_metai')->pluck('gamybos_metai')->unique();
        $savininkai = $sunkvezimiai->sortBy('savininko_vardas_pavarde')->pluck('savininko_vardas_pavarde')->unique();
        $skaiciai = $sunkvezimiai->sortBy('savininku_skaicius')->pluck('savininku_skaicius')->unique();

        if ($request->marke != null) {
            $sunkvezimiai = $sunkvezimiai->where('marke', $request->marke);
        }
        if ($request->gamybos_metai != null) {
            $sunkvezimiai = $sunkvezimiai->where('gamybos_metai', $request->gamybos_metai);
        }
        if ($request->savininko_vardas_pavarde != null) {
            $sunkvezimiai = $sunkvezimiai->where('savininko_vardas_pavarde', $request->savininko_vardas_pavarde);
        }
        if ($request->savininku_skaicius != null) {
            $sunkvezimiai = $sunkvezimiai->where('savininku_skaicius', $request->savininku_skaicius);
        }
        return view('sunkvezimiai', compact('sunkvezimiai', 'metai', 'savininkai', 'skaiciai'));
    }
}
