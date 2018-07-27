<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pastel;


class PastelesController extends Controller
{
    public function index(){
      $pasteles = Pastel::get();
      return view('pasteles.index')->with('pasteles', $pasteles);
    }

    public function create(){
      return view('pasteles.create');
    }

    public function store(Request $request)
    {
        $pastel = new Pastel;
        $pastel->nombre = $request->input('nombre');
        $pastel->sabor  = $request->input('sabor');

        $pastel->save();

        return redirect()->route('pasteles.index');
    }

    public function edit($id)
    {
        $pastel = Pastel::find($id);
        return view('pasteles.edit')->with('pastel',$pastel);
    }

    public function update(Request $request, $id)
   {
       $pastel = Pastel::find($id);
       $pastel->nombre = $request->input('nombre');
       $pastel->sabor  = $request->input('sabor');
       $pastel->save();
       return redirect()->route('pasteles.index');
   }

   // Esta es la primer opcion
   public function destroy($id)
   {
       $pastel = Pastel::find($id);
       $pastel->delete();
       return redirect()->route('pasteles.index');
   }


}
