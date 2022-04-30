<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/box/Spout/Autoloader/autoload.php';


use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;




class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');

		$filePath = FCPATH. '/resolvido.xlsx';

		$reader = ReaderEntityFactory::createReaderFromFile($filePath);

			$reader->open($filePath);

		foreach ($reader->getSheetIterator() as $sheet) {
    	foreach ($sheet->getRowIterator() as $row) {
			
        // do stuff with the row
        $cells = $row->getCells();
		$A = $cells[0]->getValue();		
		$B = $cells[1]->getValue();	
		$C = $cells[2]->getValue();
		$D = $cells[3]->getValue();
		$E = $cells[4]->getValue();
		$F = $cells[5]->getValue();
		$G = $cells[6]->getValue();
		$H = $cells[7]->getValue();
		$I = $cells[8]->getValue();
		$J = $cells[9]->getValue();
		$K = $cells[10]->getValue();
		$L = $cells[11]->getValue();
		$M = $cells[12]->getValue();
		$N = $cells[13]->getValue();
		$O = $cells[14]->getValue();
		$P = $cells[15]->getValue();
		$Q = $cells[16]->getValue();
		$R = $cells[17]->getValue();
		$S = $cells[18]->getValue();
		$T = $cells[19]->getValue();
		$U = $cells[20]->getValue();
		$V = $cells[21]->getValue();
		$W = $cells[22]->getValue();
		$X = $cells[23]->getValue();
		$Y = $cells[24]->getValue();
		$Z = $cells[24]->getValue();
		$AA = $cells[25]->getValue();
		$AB = $cells[1]->getValue();	
		$AC = $cells[2]->getValue();
		$AD = $cells[3]->getValue();
		$AE = $cells[4]->getValue();
		$AF = $cells[5]->getValue();
		$AG = $cells[6]->getValue();
		$AH = $cells[7]->getValue();
		$AI = $cells[8]->getValue();
		$AJ = $cells[9]->getValue();
		$AK = $cells[10]->getValue();
		
		
		echo 'ID:' .$A; 
		echo' Title:  ' .$B; 
		echo' Type:  ' .$C; 
		echo' Author 3:  ' .$D; 
		echo 'Author 3 Institution:' .$E;
		echo' Author 3:  ' .$F; 
		echo 'Author 3 Institution:' .$G;
		echo' Author 3:  ' .$H; 
		echo 'Author 3 Institution:' .$I;
		echo' Author 4:  ' .$J;  
		echo' Author 4 Institution:  ' .$K;  
		echo 'Author 5:' .$L; 
		echo' Author 5 Institution:  ' .$M;  
		echo' Author 6:  ' .$N;  
		echo' Author 6 Institution:  ' .$O;	
		echo' Author 7:  ' .$P;	 
		echo' Author 7 Institution:  ' .$Q;	
		echo' Author 8:  ' .$R;	
		 echo' Author 8 Institution:  ' .$S;
		echo' Author 9:  ' .$T;	 
		echo' Author 9 Institution:  ' .$U;
		echo' Author 10:  ' .$V;	
		 echo' Author 10 Institution:  ' .$W;
		echo' Author 11:  ' .$X;	 
		echo' Author 11 Institution:  ' .$Y;
		echo' Author 12:  ' .$Z;	 
		echo' Author 12 Institution:  ' .$AA;
		echo' Author 13:  ' .$AB;	 
		echo' Author 13 Institution:  ' .$AC;
		echo' Author 14:  ' .$AD;	
		 echo' Author 14 Institution:  ' .$AE;
		echo' Author 15:  ' .$AF;	
		 echo' Author 15 Institution:  ' .$AG;
		echo' Author 15:  ' .$AH;	 
		echo' Author 15 Institution:  ' .$AI;
		echo' Author 15:  ' .$AJ;	 
		echo' Author 15 Institution:  ' .$AK;

		echo ' </p> '; 
		
		 
			
				

		echo '<br>'; 


      
    }
}

$reader->close();
	}
}
