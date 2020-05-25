<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Photo;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all()->sortByDesc('id');
        $title = 'Tutte le Photo';
        $data = [
            'photos' => $photos,
            'title' => $title
        ];
        return view('photos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crea una Foto';
        return view('photos.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
//Il Validator serve per controllare i parametri emessi
// dall'utente nel form siano corretti per il DB
        $validator = Validator::make($data, [
            'title'=> 'required|string|max:150',
            'description' => 'required|string|max:200',
            'path' => 'required|string'
        ]);
//condizone di controllo del $validator, se i dati inseriti
//risultano errati riporta alla pagina di inserimento dati con $id
        if ($validator->fails()) {
            return redirect()->route('photos.create' )
                ->withErrors($validator)
                ->withInput()->with('status', 'Errore');
        }
        $photo = new Photo;
        $photo->fill($data);
        $saved = $photo->save();
        if (!$saved) {
            redirect()->back()->with('status', 'La Foto non è stata salvata' );

        }
        return redirect()->route('photos.index')->with('status', 'Foto id  N° ' .  $photo->id . ' Salvata!!!Bravo bello BEH!!!!!! ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        if(empty($photo)){
            abort('404');
        }
        $title = 'Photo' . $photo->id;
        return view('photos.show', compact('photo', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        if(empty($photo)) {
            abort('404');
        }
        $title = 'Modifica la foto' . $photo->id;
        return view('photos.edit', compact('photo', 'title'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $photo = Photo::find($id);

        if(empty($photo)) {
            abort('404');
        }
        if (empty($data['title'])) {
            unset($data['title']);
        }
        if (empty($data['description'])) {
            unset($data['description']);
        }
        if (empty($data['path'])) {
            unset($data['path']);
        }
//Il Validator serve per controllare i parametri emessi
// dall'utente nel form siano corretti per il DB
        $validator = Validator::make($data, [
            'title'=> 'string|max:150',
            'description' => 'string|max:200',
            'path' => 'string'
        ]);
//condizone di controllo del $validator, se i dati inseriti
//risultano errati riporta alla pagina di inserimento dati con $id
        if ($validator->fails()) {
            return redirect()->route('photos.edit', $id)
                ->withErrors($validator)
                ->withInput()->with('status', 'Errore');
        }
        $photo->fill($data);
        $updated = $photo-> update();

        if (!$updated) {
            return redirect()->back()->with('status' , 'Photo non aggiornata');
        }

        return redirect()->route('photos.index')->with('status', 'Foto id  N° ' .  $id . ' Aggiornata ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $delete = $photo->delete();
        if (!$delete) {
            return redirect()->back()->with('status' , 'Foto non ssssssscccancellata');
        }
        return redirect()->route('photos.index')->with('status', 'Foto id  N° ' .  $photo->id . ' è stata sssssscccancellata ');

    }
}
