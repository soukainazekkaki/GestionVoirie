<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdVoirie;

// On l'utilise pour valider les régles posées
use App\Http\Requests\AjoutVoirie;
//pour que la classe auth soit acceptable
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;

class AdvoirieController extends Controller
{
    //cette fonction nous permet d'ajouter notre données entrées dans la page addvoirie vers bdd 
    public function ajout(AjoutVoirie $request)
    {
       $validated = $request->validated();
       
       $advoirie = new AdVoirie(); 
       $advoirie->nomcommune = $validated['nomcommune'];
       $advoirie->titre = $validated['titre'];
       $advoirie->description = $validated['description'];
       $advoirie->nomresponsable = $validated['nomresponsable'];
       $advoirie->ville = $validated['ville'];
       $advoirie->x = $validated['x'];
       $advoirie->y = $validated['y'];
       $advoirie->save();
       return redirect()->route('responsable.allvoirie')->with('success','votre voirie a été postée.');
    }

    //fonction permet d'afficher tous les voiries en detail existent dans bdd vers la page allvoirie
  /*  public function display() 
    { 
        $data=AdVoirie::all();
        //return view ('responsable.allvoirie')->with('advoiries',$advoiries);
      return view ('responsable.allvoirie',['advoiries'=>$data]);
       //return redirect()->route('AllvoirieTest')->with('advoiries',$data);
      // return redirect()->route('responsable.allvoirie')->with('advoiries',$data);
    }*/


//fonction permet d'afficher tous les voiries en detail existent dans bdd vers la page principal home
    public function list()
    {
        $advoiries = AdVoirie::orderBy('id')->get();
        return view('dashboard.responsable.home', compact ('advoiries'));
        
    }

//fonction permet d'afficher tous les voiries en detail existent dans bdd vers la page allvoirie
    public function affichage()
    {
        $advoiries = AdVoirie::orderBy('id')->get();
        return view('dashboard.responsable.allvoirie', compact ('advoiries'));
        
    }

    //fonction permer modifier les données ajoutés 
    public function edit($id)
    {
           $advoiries=AdVoirie::find($id);
           return view ('dashboard.responsable.editvoirie')->with('advoiries',$advoiries);
    }


    
    //cette fonction nous permet donner la page qu'on va faire les modification sur des données des voiries en détail déja existe dans systéme
    public function update(AjoutVoirie $request,$id)
    {
        $validated = $request->validated();

        $advoiries=AdVoirie::find($id);
        $advoiries->nomcommune = $validated['nomcommune'];
        $advoiries->titre = $validated['titre'];
        $advoiries->description = $validated['description'];
        $advoiries->nomresponsable = $validated['nomresponsable'];
        $advoiries->ville = $validated['ville'];
        $advoiries->x = $validated['x'];
        $advoiries->y = $validated['y'];
        $advoiries->save();
    
    return redirect()->route('responsable.allvoirie')->with('success','Les données sont bien modifiés.');
    }



    //fonction permet supprimer les données selon un nom selectionnées
    public function delete($id)
    {
        $advoiries=AdVoirie::find($id);
        $advoiries->delete();
        return redirect()->route('responsable.allvoirie')->with('advoiries,$advoiries');
    }
    
//Fonction pour voir en détail (sur carte) la voirie concerné 
    public function show($id)
    {
        $advoiries=AdVoirie::findOrfail($id);
        return view('dashboard.responsable.showvoirie',compact('advoiries'));
    }

/*  public function allvoirie()
    {
        return view ('allvoirie');
    }*/



    //J'ai fait deux méthode pour export pdf
    //PDF
    public function exportPDF()
    {
        $advoiries=AdVoirie::all();
        $pdf = PDF::loadView('dashboard.responsable.allvoirie',compact('advoiries'))->setOptions(['defaultFont' => 'sans-serif']);
      //  $pdf = PDF::loadView('dashboard.responsable.allvoirie',compact('advoiries'));
     return $pdf->download('voiries-pdf');
    }


   /* public function index()
    {
        $advoiries = $this->get_voirie_data();
        return view('allvoirie')->with('advoiries',$advoiries);
    } */
    public function get_voirie_data()
    {
        $advoiries = DB::table('ad_voiries')
                           ->limit(10)
                           ->get();
          return $advoiries;
    } 

public function pdf()
{
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->convert_voirie_data_to_html());
    return $pdf->stream();
}

public function convert_voirie_data_to_html()
{
    $advoiries = $this->get_voirie_data();
    $output = '
    <h3 align="center">Liste des voiries</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Numéro de voirie</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Nom de la commune</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Ville</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Titre</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Description</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Nom de responsable</th>
    <th style="border: 1px solid; padding:12px;" width="20%">X</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Y</th>
   </tr>
     '; 
     foreach($advoiries as $advoirie)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->nomcommune.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->ville.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->titre.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->description.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->nomresponsable.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->x.'</td>
       <td style="border: 1px solid; padding:12px;">'.$advoirie->y.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
}

public function save()
    {
        return('save');
    }
}
