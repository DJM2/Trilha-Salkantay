<?php

namespace App\Http\Controllers;

use App\Models\Buscadore;
use App\Models\Djmblog;
use App\Models\Tour;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;

/**
 * Class DjmblogController
 * @package App\Http\Controllers
 */
class DjmblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $djmblogs = Djmblog::query()->with('categorias')->get();
        return view('djmblog.index', compact('djmblogs'));
    }
    public function djmblogs()
    {
        $blogs = Djmblog::query()->with('categorias')->get();
        $tours = Tour::all();
        return view('djmblog.listadoblogs', compact('blogs', 'tours'));
    }
    public function mostrar($slug)
    {
        $tours = Tour::all();
        $blog = Djmblog::query()->where('slug', $slug)->with('categorias')->firstOrFail();
        $djmblogs = Djmblog::query()->latest()->take(4)->whereNotIn('id', [$blog->id])->get();
        $update = $blog->updated_at->format('d/m/Y');
        return view('djmblog.mostrar', compact('blog', 'tours', 'update', 'djmblogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $djmblog = new Djmblog();
        $categorias = Buscadore::query()->pluck('nombre', 'id');
        return view('djmblog.create', compact('djmblog', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|unique:djmblogs',
            'descripcion' => 'required|max:255',
            'cuerpo' => 'required',
            'img' => 'required',
            'keywords' => 'required|max:255',
            'categorias' => 'required|array',
            'slug' => 'required|unique:djmblogs|max:255'
        ]);

        $djmblog = new Djmblog();
        $djmblog->nombre = $request->get('nombre');
        $djmblog->descripcion = $request->get('descripcion');
        $djmblog->cuerpo = $request->get('cuerpo');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $djmblog->img = '/img/blog/' . $filename;
        }
        $djmblog->keywords = $request->get('keywords');
        $djmblog->slug = $request->get('slug');

        if (!$djmblog->save()) {
            return redirect()->back()->with('error', 'El nombre del blog ya esta en uso, utilize otro nombre.');
        }
        $djmblog->categorias()->sync(request('categorias'));

        return redirect()->route('djm.index', $djmblog->id)->with('success', 'El blog se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        /* $djmblog = Djmblog::query()->with('categorias')->find($slug); */
        $djmblog = Djmblog::query()->where('slug', $slug)->with('categorias')->firstOrFail();
        return view('djmblog.show', compact('djmblog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $djmblog = Djmblog::with('categorias')->findOrFail($id);
        $categorias = Buscadore::query()->pluck('nombre', 'id');
        return view('djmblog.edit', compact('djmblog', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Djmblog $djmblog
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $djmblog = Djmblog::query()->findOrFail($id);
        $djmblog->nombre = $request->get('nombre');
        $djmblog->descripcion = $request->get('descripcion');
        $djmblog->cuerpo = $request->get('cuerpo');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $djmblog->img = '/img/blog/' . $filename;
        }

        $djmblog->keywords = $request->get('keywords');
        $djmblog->slug = $request->get('slug');

        // Actualizar el modelo en la base de datos
        $djmblog->update();

        // Asignar las categorías al modelo
        $djmblog->categorias()->sync(request('categorias'));

        // Redireccionar a la vista del detalle del registro actualizado
        return redirect()->route('djm.index', $djmblog->id)->with('success', 'El blog se ha actualizado correctamente.');
    }



    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $djmblog = Djmblog::query()->findOrFail($id);

        // Eliminar las relaciones de las categorías con este blog antes de eliminar el blog
        $djmblog->categorias()->detach();

        // Eliminar la imagen asociada al blog si existe
        if (file_exists(public_path($djmblog->img))) {
            unlink(public_path($djmblog->img));
        }

        // Eliminar el modelo de la base de datos
        $djmblog->delete();

        return redirect()->route('djm.index')
            ->with('success', 'Djmblog deleted successfully');
    }
}