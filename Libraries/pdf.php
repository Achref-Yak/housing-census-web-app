<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
 
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
	
	var $htmlHeader;
	 var $imageHeader;
	var $employeur;
	var $typeSte;

	/*
	* Donner du HTML personnalisé à l'entête
	*/
    public function setHtmlHeader($htmlHeader) {
        $this->htmlHeader = $htmlHeader;
    }
	
	/*
	* Donner une image d'entête personnalisé à l'entête
	*/
	 public function setImageHeader($imageHeader) {
        $this->ImageHeader = $imageHeader;
    } 

	public function setEmployeur($employeur) {
        $this->employeur = $employeur;
    }

    public function setTypeSte($typeSte) {
        $this->typeSte = $typeSte;
    }

	/*
	* Header personnalisé
	*/
    public function Header() {
        // image d'entête de l'entreprise
		$bigFont = 14;
		$smallFont = ( 16.0 / 26.0 ) * $bigFont;
		//$image_file = $this->ImageHeader;
		// taille d'une image de l'entête : L=160, H=80
		// je dois déterminer si je dois faire un redimensionnement
	/*	$dimensions=getimagesize($image_file); 
		$hauteur= $dimensions[1]; 
		$largeur= $dimensions[0];
		if($dimensions[1]<470 && $dimensions[0]<940){
		$hauteur=7473;//$dimensions[1]; 
		$largeur=9945;//$dimensions[0];
		}
		 
		$division = $hauteur-80;
		if ($division ===0) $division += 1;
		
    	$imageScale = abs((( $largeur-160) / $division ) *3);
	
		$this->setImageScale($imageScale); */
		/*
		$img = file_get_contents($image_file);
		$this->Image('@' . $img);
		
		
		$this->Cell( 0, 0, $imageScale, 0, 1 );
		$this->Cell( 0, 0, "image scale :".(( $largeur-160) / $division ), 0, 1 );
		$this->Cell( 0, 0, "division :".$division, 0, 1 );
		$this->Cell( 0, 0, "largeur - 160 :".($largeur-160), 0, 1 );
		
		$this->Cell( 0, 0, "hauteur :".$hauteur, 0, 1 );
		$this->Cell( 0, 0, "largeur :".$largeur, 0, 1 );
		
		$this->Output();
		$this->getImageScale($image_file);*/
	//	$this->Image($image_file, '', 6, '', '', '', false, '', false, 00, '', false, false, 0, false, false, false);
        //$this->Image($image_file, '', '', $w=0, $h=0, $type='', $link='',$align='T', 
		//	$resize=true, 300, '', false, false, 0, false, false,'L');
	// $this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$dimensions=getimagesize(  base_url('assets/logo/'.$this->employeur->getLogo())); 
		$hauteur= $dimensions[1]; 
		$largeur= $dimensions[0];
		$img_Src= base_url('assets/logo/'.$this->employeur->getLogo());
$Wmax=50;
$Hmax=50;
		$sizeimg = GetImageSize($img_Src);  
   $Src_W = $sizeimg[0]; // largeur
   $Src_H = $sizeimg[1]; // hauteur
 // ------------------------------------------------------------------
   // Teste les dimensions tenant dans la zone
   $test_H = round(($Wmax / $Src_W) * $Src_H);
   $test_W = round(($Hmax / $Src_H) * $Src_W);
 // ------------------------------------------------------------------
   // Si Height final non précisé (0)
   if(!$Hmax) $Hmax = $test_H;
   // Sinon si Width final non précisé (0)
   elseif(!$Wmax) $Wmax = $test_W;
   // Sinon teste quel redimensionnement tient dans la zone
   elseif($test_H>$Hmax) $Wmax = $test_W;
   else $Hmax = $test_H;
 // ------------------------------------------------------------------
   // (procédure : ne retourne aucune valeur mais ...)
   // AFFICHE les dimensions optimales
  // echo 'width='.$Wmax.' height='.$Hmax;
		// $this->Cell( 0, 0, $hauteur, 0, 1,'R' );
		  //  $this->Cell( 0, 0, $largeur, 0, 1,'R' );
		//  	$img=' <img src="'.   base_url('assets/logo/'.$this->employeur->getLogo())  .'" style="height: 80px  !important;  width: 160px !important; margin-left: 20px;" alt=""/>' ;
		 //$this->writeHTML($img, false, false, 0, false, false,'L');
		 
	 //	$img=' <img src="'.   base_url('assets/logo/'.$this->employeur->getLogo())  .'" style="height: 80px  !important;  width: 160px !important; margin-left: 20px;" alt=""/>' ;
		//$this->writeHTML($img, false, false, 0, false, false,'L');
   
//	 $this->Image( base_url('assets/logo/'.$this->employeur->getLogo()) , 10, 5, $Wmax, $Hmax, '', '', '', false, 300, '', false, false, 0, false, false, false);
 $this->Image( base_url('assets/logo/'.$this->employeur->getLogo()) ,15,5,40,30);

		// exemple d'utilisation de HTML dans l'entête
		/*$this->writeHTMLCell(
            $w = 0, $h = 0, $x = '', $y = '',
            $this->htmlHeader, $border = 0, $ln = 1, $fill = 0,
            $reseth = true, $align = 'top', $autopadding = true);*/
			
			// global $webcolor;

    # The image is this much larger than the company name text.
   

	//$this->ImagePngAlpha($image_file, 72, 36, 128, 128, $imageScale, 
		//$imageScale, '', null, 'T', false, 72, 'L' );
            $mf='MF: ';
            $codeape='';
            $tvaintra="";
            $mfiscale = $mf.$this->employeur->getMatriculeFiscale().'/'.$this->employeur->getCodeTva().'/'
						.$this->employeur->getCodeCategorie().'/'.$this->employeur->getEtabSecondaire(); 

            if($this->typeSte=='fr'){
            	$mf='SIRET: ';
            	$codeape='Code APE: ';
            	$tvaintra="TVA intra.: ";
            	
            	$mfiscale = $mf.$this->employeur->getRegistreDuCommerce(); 

            }

    $this->SetFont('times', 'b', $bigFont );
    $this->Cell( 0, 0, $this->employeur->getRaisonSociale(), 0, 1,'R' );
    $this->SetFont('times', 'i', $smallFont );
    $this->Cell( 0, 0, $this->employeur->getAdresse1(), 0, 1,'R' );
    $this->Cell( 0, 0, $this->employeur->getAdresse2(), 0, 1,'R' );
		
	$this->Cell( 0, 0, $mfiscale, 0, 1,'R' );
	if($this->typeSte=='fr'){
		   $this->Cell( 0, 0, $codeape.$this->employeur->getNumAffiliationCNSS(), 0, 1,'R' );
		   $this->Cell( 0, 0, $tvaintra.$this->employeur->getMatriculeFiscale(), 0, 1,'R' );
	}
	$telephone='';
		if($this->employeur->getTelephone() !=''){
			$telephone = 'Tél.:'.$this->employeur->getTelephone().' / '.$this->employeur->getTelephone2();
	$this->Cell( 0, 0, $telephone, 0, 1,'R' );
	}
	
	$fax='';
	if($this->employeur->getFAX() !=''){
		$fax = 'Fax :'.$this->employeur->getFAX();
		$this->Cell( 0, 0, $fax, 0, 1,'R' );
	}
	
	if($this->employeur->getSiteWeb()!=''){ 
	$this->Cell( 0, 0, $this->employeur->getSiteWeb(), 0, 1,'R' );
	}
 
	//Ligne de séparation de l'entête
    $this->Line(15, 40, 195, 40);
    }
	
	/*
	* Titre d'un document centré après entête
	*/
	public function Titre($titre) {
		$bigFont = 18;
		$this->SetFont('helveticaBI', 'b', $bigFont );
		$this->Cell( 0, 0, $titre, 0, 1,'C' );
	}
	
	/*
	* Fonction pour écrire des TextBox
	*/
	public function CreateTextBox($textval, $x = 0, $y, $width = 0, $height = 10, $fontsize = 10, $fontstyle = '', $align = 'L') {
		$this->SetXY($x+20, $y); // 20 = margin left
		$this->SetFont(PDF_FONT_NAME_MAIN, $fontstyle, $fontsize);
		$this->Cell($width, $height, $textval, 0, false, $align);
	}
}
 
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */