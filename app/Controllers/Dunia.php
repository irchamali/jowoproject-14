<?php namespace App\Controllers;

use App\Models\InformasiModel;
use Config\Services;

class Dunia extends BaseController
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
		$positif =json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
		$sembuh =json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'),true);
		$meninggal =json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'),true);
		$global =json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
		$nasional =json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'),true);
		// $petaprov =json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);

		$data = [
			'positif' => $positif,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
			'global' => $global,
			'nasional' => $nasional,
			
			'title' => 'Satgas Covid-19 | NU Care',
			'tanggal' => $this->M_informasi->first()
		];
		return view('v_global/index', $data);
	}

}
