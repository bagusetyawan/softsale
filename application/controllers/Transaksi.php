<?php
class Transaksi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
        $this->load->model('m_barang');
	}
	function index(){
		$this->load->view('transaksi/v_transaksi');
	}

    function getID(){
        $this->m_transaksi->getID();
    }

    function getAutocomplete(){
        
        if (isset($_GET['term'])) {
            $result = $this->m_barang->getSuggestionBarang($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row){
                $arr_result[] = array(
                    "id" => $row->id_barang,
                    "label" => $row->nama_barang,
                    "harga" => $row->harga
                );
            }
                echo json_encode($arr_result);
            }
        }
    }

    function data_tmp_trans(){
        $data=$this->m_transaksi->tmp_trans_list();
        echo json_encode($data);
    }


	function get_tmp_trans(){
        $kobar=$this->input->get('id');
        $data=$this->m_transaksi->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
    function add_barang(){
        $idBarang = $this->input->post('idBarang');
        $namaBarang = $this->input->post('namaBarang');
        $idTrans = $this->m_transaksi->getID();
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $subTotal = $this->input->post('subTotal');
        $data=$this->m_transaksi->add_barang($idTrans, $idBarang, $namaBarang, $jumlah, $harga, $subTotal);
        echo json_encode($data);
    }
 
    function update_tmp_trans(){
        $id=$this->input->post('id');
        $jumlah=$this->input->post('jumlah');
        $subtotal=$this->input->post('subtotal');
        
        $data=$this->m_transaksi->update_tmp_trans($id, $jumlah, $subtotal);
        echo json_encode($data);
    }
 
    function hapus_tmp_trans(){
        $kobar=$this->input->post('kode');
        $data=$this->m_transaksi->hapus_tmp_trans($kobar);
        echo json_encode($data);
    }
}