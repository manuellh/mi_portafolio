<?php

namespace App\Http\Controllers;

use App\Models\Habilidade;
use Illuminate\Http\Request;

/**
 * Class HabilidadeController
 * @package App\Http\Controllers
 */
class HabilidadeController extends Controller
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
        $habilidades = Habilidade::paginate();

        return view('habilidade.index', compact('habilidades'))
            ->with('i', (request()->input('page', 1) - 1) * $habilidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habilidade = new Habilidade();
        return view('habilidade.create', compact('habilidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Habilidade::$rules);

        $habilidade = Habilidade::create($request->all());

        return redirect()->route('habilidades.index')
            ->with('success', 'Habilidade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habilidade = Habilidade::find($id);

        return view('habilidade.show', compact('habilidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habilidade = Habilidade::find($id);

        return view('habilidade.edit', compact('habilidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Habilidade $habilidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidade $habilidade)
    {
        request()->validate(Habilidade::$rules);

        $habilidade->update($request->all());

        return redirect()->route('habilidades.index')
            ->with('success', 'Habilidade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $habilidade = Habilidade::find($id)->delete();

        return redirect()->route('habilidades.index')
            ->with('success', 'Habilidade deleted successfully');
    }
}
