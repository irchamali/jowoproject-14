<?php namespace App\Controllers;

use App\Models\InformasiModel;
use Config\Services;

class Indonesia extends BaseController
{
	protected $M_informasi;
	protected $request;

	public function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->request = Services::request();
	  	$this->M_informasi = new InformasiModel($this->request);
	}

	// Halaman utama aplikasi
	public function index()
	{
		$nasional =json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'),true);
		$provinsi =json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'),true);
		$petaprov =json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);

		$data['petaprov'] = $petaprov; 
		$data['nasional'] = $nasional;
		$data['provinsi'] = $provinsi;
		
		$data ['title']   = "Satgas Covid-19 | NU Care";
		$data ['tanggal'] = $this->M_informasi->first();
		return view('v_nasional/index', $data);
	}

}
