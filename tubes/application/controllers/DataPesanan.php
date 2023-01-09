<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPesanan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('M_dataPesanan');
    }
	
	public function index()
	{
        $data_pesanan = $this->M_dataPesanan->getAllPesanan();
		$this->load->view('template/top');
		$this->load->view('DataPesanan', ['data'=>$data_pesanan]);
		$this->load->view('template/bottom');
	}

    public function tambahpesanan()
	{
		
		// Create variabel and use it for input data to database.
		$tipe = $this->input->post('tipe');
		$nama = $this->input->post('nama');
		$kg = $this->input->post('kg');
		$harga = $this->input->post('harga');
        $alamat = $this->input->post('alamat');
		$data = array(
			'tipe_laundry'=>$tipe,
			'nama_pemesan'=>$nama,
			'kg'=>$kg,
			'harga'=>$harga,
            'alamat'=>$alamat
		);

		// Load tambah_mahasiswa($data) from M_web
		$this->M_dataPesanan->tambah_pesanan($data); 
		// Redirect to index.php/web/mahasiswa after add data.
		redirect('DataPesanan');

	}

    public function editpesanan($id)
	{

		// Create variabel and use it for edit data from database.
		$tipe = $this->input->post('tipe');
		$nama = $this->input->post('nama');
		$kg = $this->input->post('kg');
		$harga = $this->input->post('harga');
        $alamat = $this->input->post('alamat');
		$data = array(
			'tipe_laundry'=>$tipe,
			'nama_pemesan'=>$nama,
			'kg'=>$kg,
			'harga'=>$harga,
            'alamat'=>$alamat
		);
		// Load edit_mahasiswa($nim,$data) from M_web
		$this->M_dataPesanan->edit_pesanan($id,$data);
		// Redirect to index.php/web/mahasiswa after edit data.
		redirect('DataPesanan');

	}

    public function hapuspesanan($id)
	{

		//Load function hapus_mahasiswa from M_web
		$this->M_dataPesanan->hapus_pesanan($id);
		// make it to index.php/web/mahasiswa after delete complete
		redirect('DataPesanan');

	}
}