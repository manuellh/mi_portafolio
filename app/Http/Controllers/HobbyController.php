<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

/**
 * Class HobbyController
 * @package App\Http\Controllers
 */
class HobbyController extends Controller
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
        $hobbies = Hobby::paginate();

        return view('hobby.index', compact('hobbies'))
            ->with('i', (request()->input('page', 1) - 1) * $hobbies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hobby = new Hobby();
        return view('hobby.create', compact('hobby'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hobby::$rules);

        $hobby = Hobby::create($request->all());

        return redirect()->route('hobbies.index')
            ->with('success', 'Hobby created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobby = Hobby::find($id);

        return view('hobby.show', compact('hobby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobby = Hobby::find($id);

        return view('hobby.edit', compact('hobby'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hobby $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobby $hobby)
    {
        request()->validate(Hobby::$rules);

        $hobby->update($request->all());

        return redirect()->route('hobbies.index')
            ->with('success', 'Hobby updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hobby = Hobby::find($id)->delete();

        return redirect()->route('hobbies.index')
            ->with('success', 'Hobby deleted successfully');
    }
}
