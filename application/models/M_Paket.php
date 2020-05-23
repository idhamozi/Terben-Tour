<?php
/**
 *
 */
class M_Paket extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function insertPaket($id, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga, $bed, $bath, $tv, $inet)
  {
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['admin_id'];
    $data = array(	'paket_id' => $id,
          'admin_id' => $username,
          'kategori_id' => $kategori,
          'img_paket' => $image,
          'judul' => $title,
          'deskripsi' => $deskripsi,
          'max_person' => $max_person,
          'durasi' => $durasi,
          'harga' => $harga,
          'fas_bedroom' => $bed,
          'fas_bathroom' => $bath,
          'fas_tv' => $tv,
          'fas_inet' => $inet);

    $result = $this->db->insert('paket',$data);

  }

  function updatePaket($id, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga, $bed, $bath, $tv, $inet)
  {
    $oldimgPaket = $this->getPaket($id);
    if(!isset($image)){
      $image = $oldimgPaket[0]->img_paket;
    }
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['admin_id'];
    $data = array(	'paket_id' => $id,
          'admin_id' => $username,
          'kategori_id' => $kategori,
          'img_paket' => $image,
          'judul' => $title,
          'deskripsi' => $deskripsi,
          'max_person' => $max_person,
          'durasi' => $durasi,
          'harga' => $harga,
          'fas_bedroom' => $bed,
          'fas_bathroom' => $bath,
          'fas_tv' => $tv,
          'fas_inet' => $inet);

    $result = $this->db->replace('paket',$data);
  }

    function bookingPaket($id, $user_id, $google_id, $paket_id, $harga, $tgl_pesan, $tgl_berangkat)
    {
      $data = array('temp_id' => $id,
                    'user_id' => $user_id,
                    'google_id' => $google_id,
                    'paket_id' => $paket_id,
                    'harga' => $harga,
                    'tgl_pesan' => $tgl_pesan,
                    'tgl_berangkat' => $tgl_berangkat);

      $this->db->insert('temp_transaksi',$data);

    }

    function getBooking($id)
    {
      $paket = $this->db->get_where('temp_transaksi',array('temp_id'=>$id))
              ->result();
      return $paket;
    }

    function getPercentOfNumber($number){
    return (10 / 100) * $number;
    }

  function getAllPaket(){
		return $this->db->get('paket')->result();

	}

  function getAllPay(){
    return $this->db->get('checkout')->result();

  }

  function getPaketEx(){
    return $this->db->get_where('paket', array('kategori_id' => 1))->result();

  }

  function getPaketBis(){
    return $this->db->get_where('paket', array('kategori_id' => 2))->result();

  }

  function getPaketEko(){
    return $this->db->get_where('paket', array('kategori_id' => 3))->result();

  }

  function getPaket($paket_id){
  $paket = $this->db->get_where('paket',array('paket_id'=>$paket_id))
          ->result();
  return $paket;
  }

  function getPaketKategori($kategori_id){
  $paket = $this->db->get_where('paket',array('kategori_id'=>$kategori_id))
          ->result();
  return $paket;
  }

  function isValid($checkout_id)
  {
    $data = array('is_pay' => 1 );
    $this->db->where('checkout_id', $checkout_id);
    $this->db->update('checkout', $data);
  }

  function Reject($checkout_id)
  {
    $data = array('is_pay' => 2 );
    $this->db->where('checkout_id', $checkout_id);
    $this->db->update('checkout', $data);
  }

  function checkoutData($checkout_id)
  {
    return $this->db->get_where('checkout',array('checkout_id'=>$checkout_id))->result();
  }

  public function delete_paket($paket_id)
  {
    $this->db->where('paket_id', $paket_id);
    $this->db->delete('paket');
  }

  public function insertPay($id, $user_id, $google_id, $paket_id, $bank, $namapengirim, $image, $harga, $email, $temp_id)
  {
    $data = array('checkout_id' => $id,
                  'user_id' => $user_id,
                  'google_id' => $google_id,
                  'paket_id' => $paket_id,
                  'bank' => $bank,
                  'nama_pengirim' => $namapengirim,
                  'img_transfer' => $image,
                  'total_harga' => $harga,
                  'email' => $email);

    $this->db->insert('checkout',$data);

    $this->db->where('temp_id', $temp_id);
    $this->db->delete('temp_transaksi');
  }
}

 ?>
