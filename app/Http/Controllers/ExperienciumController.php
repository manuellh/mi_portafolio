<?php

namespace App\Http\Controllers;

use App\Models\Experiencium;
use Illuminate\Http\Request;

/**
 * Class ExperienciumController
 * @package App\Http\Controllers
 */
class ExperienciumController extends Controller
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
        $experiencia = Experiencium::paginate();

        return view('experiencium.index', compact('experiencia'))
            ->with('i', (request()->input('page', 1) - 1) * $experiencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experiencium = new Experiencium();
        return view('experiencium.create', compact('experiencium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Experiencium::$rules);

        $experiencium = Experiencium::create($request->all());

        return redirect()->route('experiencia.index')
            ->with('success', 'Experiencium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experiencium = Experiencium::find($id);

        return view('experiencium.show', compact('experiencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experiencium = Experiencium::find($id);

        return view('experiencium.edit', compact('experiencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Experiencium $experiencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experiencium $experiencium)
    {
        request()->validate(Experiencium::$rules);

        $experiencium->update($request->all());

        return redirect()->route('experiencia.index')
            ->with('success', 'Experiencium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $experiencium = Experiencium::find($id)->delete();

        return redirect()->route('experiencia.index')
            ->with('success', 'Experiencium deleted successfully');
    }
}
