<?php

namespace App\Http\Controllers\Admin;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Anouar\Fpdf\Fpdf as baseFpdf;


class PDF extends baseFpdf
{
  // Page header
  function Header()
  {
       // Logo
      $this->Image('img/logo.png',10,15,50);
      // Arial bold 15
      $this->SetFont('Arial','B',10);
      // Move to the right
      $this->Cell(55);
      // Title
      $this->Cell(90,20,iconv('UTF-8', 'ISO-8859-2','INSSABUC'),0,0,'C');
      // Line break
      $this->Ln(5);
      $this->Cell(55);
      // Title
      $this->Cell(90,20,iconv('UTF-8', 'ISO-8859-2','CLINICA DE SALUD BUCAL'),0,0,'C');
      // Line break
      $this->Ln(5);
      $this->Cell(55);
      // Title
      $this->Cell(90,20,iconv('UTF-8', 'ISO-8859-2','C.D. Juober Payé Luna - COP. 19326'),0,0,'C');
      // Line break
      $this->Ln(5);
      $this->SetFont('Arial','',8);
      $this->Cell(190,20,iconv('UTF-8', 'ISO-8859-2','Cirugia Bucal - Endodoncia - Ortodoncia - Rehabilitacion oral - Maquillaje Dental'),0,0,'C');
      $this->Ln(5);
      $this->Cell(190,20,iconv('UTF-8', 'ISO-8859-2','Av. Velasco Astete. Urb. Kennedy "B" F 11 - Urb. Ttio la Florida, Jr. Los Sauces LL-1 2do Piso Of. 204 (Frente al templo de Ttio)'),0,0,'C');
      $this->Ln(5);
      $this->Cell(190,20,iconv('UTF-8', 'ISO-8859-2','Citas y Emergencias: 984 745 898 - 084 607435'),0,0,'C');
      $this->Ln(14);
      $this -> Cell(190,0,'',1,0,'C');
      // Line break
      $this->Ln(7);
  }

  // Page footer
  function Footer()
  {
      // Position at 1.5 cm from bottom
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
}
class TagController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
    	$tags = Tag::orderBy('id', 'ASC')->paginate();
        return view('admin.tags.index')->with('tags', $tags);
    }
    public function edit($id)
    {
    	$tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }
    public function show($id)
    {
        //
        
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        
        $tag->fill($request->all());
        $tag->save();
        flash('The row "'.$tag->name.'" was updated!', 'success')->important();
        return redirect()->route('tags.index');
        

    }
    public function create()
    {
    	return view('admin.tags.create');
    }
    public function store(TagRequest $request)
    {
    	$tag = new Tag;
    	$tag->name = $request->name;
    	$tag->latitude = $request->latitud;
    	$tag->longitude = $request->longitud;
    	$tag->save();
    	flash('The row "'.$tag->name.'" was saved', 'success')->important();
        return redirect()->route('tags.index');
    }
    public function destroy($id)
    {
    	$tag = Tag::find($id);
        $tag->delete();

        flash('The row "'.$tag->name.'" was deleted!', 'danger')->important();
        return redirect()->route('tags.index');
    }

    public function mostrarReporte(Request $request)
    {
      //$dni = $request->dni;
        //$name = $request->name;
      
      //$name = Tag::where('name',$dni)->get();
      /*$historial = Historial::where('dni',$dni)->get();
      $odontograma = Odontograma::where('dni',$dni)->get();
      $odon = Odontograma::where('dni',$dni)->pluck('idOdontograma');

      $det = DetalleOdontograma::whereIn('idOdontograma',$odon)->get();*/
      $name = DB::table('tags')
                ->select('tags.*')
                ->get();

      


      /*$odontograma_paciente = DB::table('pacientes')
                ->join('odontogramas', 'pacientes.dni', '=', 'odontogramas.dni')
                ->select('pacientes.*', 'odontogramas.*')->where('odontogramas.dni',$dni)
                ->get();

      $costo_odontograma = DB::table('pacientes')
                ->join('detalle_odontogramas', 'pacientes.dni', '=', 'detalle_odontogramas.dni')
                ->select('pacientes.*', 'detalle_odontogramas.*')->where('detalle_odontogramas.dni',$dni)
                ->get();*/

      /*foreach($odontograma as $odo) 
          
          foreach($det as $detalle) { 
              if($odo->idOdontograma == $detalle->idOdontograma){
                $detalle->concepto ; $detalle->precio;
              }
              else
              {

              }        
          }        
      }*/
      

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(50,20,iconv('UTF-8', 'ISO-8859-2','DATOS GENERALES'),0,0,'');
        $pdf->Ln(5);

        //foreach($paciente as $pac)
        foreach($name as $nam)
        {
          $pdf->SetFont('Times','B',10);
          $pdf->Cell(50,20,iconv('UTF-8', 'ISO-8859-2','Nombre Completo:'),0,0,'');
          $pdf->SetFont('Times','',10);
          $pdf->Cell(0,20,utf8_decode($nam->name.' '.$name->latitude.' '.$name->longitude),0,1,'');
          $pdf->Ln(-4);
          //$pdf->SetFont('Times','B',10);
          //$pdf->Cell(50,0,iconv('UTF-8', 'ISO-8859-2','Sexo:'),0,0,'');
          //$pdf->SetFont('Times','',10);
          //$pdf->Cell(50,0,utf8_decode($pac->sexo),0,1);
          //$pdf->Ln(7);
          //$pdf->SetFont('Times','B',10);
          //$pdf->Cell(50,0,iconv('UTF-8', 'ISO-8859-2','Teléfono:'),0,0,'');
          //$pdf->SetFont('Times','',10);
          //$pdf->Cell(50,0,utf8_decode($pac->telefono),0,1);
          //$pdf->Ln(7);
          //$pdf->SetFont('Times','B',10);
          //$pdf->Cell(50,0,iconv('UTF-8', 'ISO-8859-2','Edad:'),0,0,'');
          //$pdf->SetFont('Times','',10);
          //$pdf->Cell(50,0,utf8_decode($pac->edad),0,1);
          //$pdf->Ln(0);

        }
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(50,20,iconv('UTF-8', 'ISO-8859-2','HISTORIALES ODONTOLÓGICOS'),0,0,'');
        $pdf->Ln(5);
        
        /*foreach($odontograma_paciente as $odonto)
        {
          $pdf->SetFont('Times','B',10);
          $pdf->Cell(50,20,iconv('UTF-8', 'ISO-8859-2','Fecha:'),0,0,'');
          $pdf->Cell(0,20,utf8_decode($odonto->created_at),0,1);
          $pdf->Ln(12);
          $pdf->SetFont('Times','',10);
          $pdf->Cell(10,3,iconv('UTF-8', 'ISO-8859-2',''),0,0,'');$pdf->Image($odonto->imagen);

          $pdf->setX(20);
          $pdf->Ln(-4);
          

          $pdf->Ln(0);

        }

        foreach($costo_odontograma as $costo)
        {
          $pdf->SetFont('Times','B',10);
          $pdf->Cell(50,20,iconv('UTF-8', 'ISO-8859-2','Costo:'),0,0,'');
          $pdf->Cell(0,20,utf8_decode($costo->precio),0,1);
          $pdf->Ln(12);
          $pdf->Ln(-4);
          
          $pdf->Ln(0);

        }*/


        $pdf->Output();
    }

}
