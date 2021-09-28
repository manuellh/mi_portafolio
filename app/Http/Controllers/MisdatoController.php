<?php

namespace App\Http\Controllers;

use App\Models\Misdato;
use Illuminate\Http\Request;

/**
 * Class MisdatoController
 * @package App\Http\Controllers
 */
class MisdatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
     {
         $this->middleware('auth');
     }
     
    public function index()
    {
        $misdatos = Misdato::paginate();

        return view('misdato.index', compact('misdatos'))
            ->with('i', (request()->input('page', 1) - 1) * $misdatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $misdato = new Misdato();
        return view('misdato.create', compact('misdato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Misdato::$rules);

        $misdato = Misdato::create($request->all());

        return redirect()->route('misdatos.index')
            ->with('success', 'Misdato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $misdato = Misdato::find($id);

        return view('misdato.show', compact('misdato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $misdato = Misdato::find($id);

        return view('misdato.edit', compact('misdato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Misdato $misdato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misdato $misdato)
    {
        request()->validate(Misdato::$rules);

        $misdato->update($request->all());

        return redirect()->route('misdatos.index')
            ->with('success', 'Misdato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $misdato = Misdato::find($id)->delete();

        return redirect()->route('misdatos.index')
            ->with('success', 'Misdato deleted successfully');
    }
}
