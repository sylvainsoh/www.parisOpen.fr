<?php

namespace App\Http\Controllers;

use App\data;
use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function Rechercher(Request $request){
        $this->validate($request, [
            'rechercher' => 'required|min:1',
        ]);
        $uploads = DB::table('uploads')
            ->select('*')
            ->where('description', 'like', '%'.$request->rechercher.'%')
            ->get();
        if (count($uploads)>0){
            session()->flash('notification.message', "Résultat de la recherche pour ' ".$request->rechercher." ' ");
            session()->flash('notification.type', "info");
            return view('rechercher',compact('uploads'));
        }else{
            session()->flash('notification.message', "Aucun résultat trouvé pour  ' ".$request->rechercher." ' ");
            session()->flash('notification.type', "danger");
            return view('rechercher',compact('uploads'));
        }
    }
    public function telecharger($id){
        $upload=upload::findOrFail($id);
        $upload->datas;

        $fp = fopen('upload/fichier.csv', 'w');

        foreach ( $upload->datas as $data) {
            $tabs=$upload->datas->toArray();
        }
        if (!isset($tabs)){
            return redirect()->route('home');
        }
        foreach ($tabs as $tab){
            fputcsv($fp, $tab);
        }
        fclose($fp);

        return view('voirUpload', compact('upload'));
    }
    public function consulter($id){
        $upload=upload::findOrFail($id);
        return view('voirUpload', compact('upload'));
    }
    public function api($id){
        $upload=upload::findOrFail($id);
        $datas=$upload->datas;
        return response()->json([
            'status' => 'success',
            'data' => $datas
        ]);
    }

    public function importExel(Request $request){
        $this->validate($request,[
            'file' => 'required',
        ]);

        $updload=$file=$request->file('file');
        $filePath=$updload->getRealPath();
        $file=fopen($filePath,'r');
        $header=fgetcsv($file);
        $entetes=[];

        // Récuperer l'entête
        foreach ($header as $key => $value){
            $lheader=strtolower($value);
            $escapededItem=explode(";",$lheader);
            array_push($entetes,$escapededItem);
        }
        $donnees=[];
        // Parcours des lignes
        while ($columns=fgetcsv($file)){
            if($columns[0]==""){
                continue;
            }
            //Récuperation des datas
            foreach ($columns as $key => $value){
                $value=explode(";",$value);
                array_push($donnees,$value);
            }
        }
        foreach ($donnees as $donnee){
            data::create([
                'identifiant' =>  $donnee[0],
                'nom' =>  $donnee[1],
                'valeur' => $donnee[2],
                'id_upload' => $request->jeuxDeDonnees
            ]);
        }
        session()->flash('notification.message', "Jeux de données approvisionné !  ");
        session()->flash('notification.type', "success");
        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:1',
            'producteur' => 'required',
            'licence' => 'required'
        ]);

        upload::create(
            [
                'description' => $request->description,
                'producteur' => $request->producteur,
                'licence' => $request->licence,
                'user_id' => Auth::user()->id,
                'categorie_id' => $request->categorie
            ]);
        session()->flash('notification.message', "Votre Jeu de données a été créé, vous pouvez dès maintenant y importer des données ! ");
        session()->flash('notification.type', "success");
        return redirect()->route('home');
    }

}
