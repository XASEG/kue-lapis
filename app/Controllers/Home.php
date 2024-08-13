<?php

namespace App\Controllers;
use Codeigniter\Controller;
use App\Models\M_kue;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;
use Dompdf\Options;
class Home extends BaseController
{
public function dashboard()
    {
        if (session()->get('level')>0){
        $model = new M_kue;
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header', $data);
        echo view('menu', $data);
        echo view('dashboard');
        echo view('footer');
      } else{
        return redirect()->to('home/login');
      }
}
    public function login()
    {
        echo view('header');
        echo view('login');
    }
   public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('pw');

        $model = new M_kue();
        $where=array(
            'username'=> $u,
             'pw' => md5($p)
        );

        $model = new M_kue();
        $cek = $model->getWhere('user',$where);
        
        if ($cek>0){
         session()->set('id_user',$cek->id_user);
         session()->set('username',$cek->username);
         session()->set('level',$cek->level);
         return redirect()->to('home/dashboard');
     }else{
        return redirect()->to('home/login');
    }
}
public function signup()
{
         if (session()->get('level')>0){
        $model = new M_kue;

        $data ['manda'] = $model ->join('user', 'level','user.level=level.level','id_user');
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('signup',$data);
         } else{
        return redirect()->to('home/login');
      }
}
public function aksi_signup()
{
    $model = new M_kue();
    $a = $this->request->getPost('username');
    $b = $this->request->getPost('pw');
    $c = $this->request->getPost('level');

    $isi = array(
        'username' => $a,
        'pw' => md5($b),
        'level' => '3'

    );
    $model ->tambah('user', $isi);

    return redirect()->to('home/login');
}
 public function user()
    {
        if (session()->get('level')>0){
        $model = new M_kue();
        $data ['manda'] = $model ->tampil('user','id_user');
        $where=array('id_user'=>session()->get('id'));
        $data['jes'] = $model->tampilgambar('toko');
        echo view ('header');
        echo view('user', $data);
          } else{
              return redirect()->to('home/login');
           }
    }
 public function tambah_user() {
          if (session()->get('level')>0){
        $model = new M_kue();
        $data['manda'] = $model->tampil('user', 'id_user');
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('tambah_user', $data);
         } else{
              return redirect()->to('home/login');
           }
    }
  public function aksi_t_user() {
        $model = new M_kue();
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('pw');
        $e = $this->request->getPost('level');

        $isi = array(
            'username' => $b,
            'pw' => md5($c),
            'level' => $e

        );
        $model->tambah('user', $isi);

        return redirect()->to('home/user');
    }
public function aksi_e_user()
{
    $model = new \App\Models\M_kue();

    $id = $this->request->getPost('id_user');
    $username = $this->request->getPost('username');
    $level = $this->request->getPost('level');
    $pw = md5($this->request->getPost('pw')); // Using MD5 for password hashing (consider stronger hashing like bcrypt)

    // Logging to ensure data is received
    log_message('info', 'Data diterima: ID=' . $id . ', Username=' . $username . ', level=' . $level);

    $where = ['id_user' => $id];
    $data = [
        'username' => $username,
        'level' => $level,
        'pw' => $pw
    ];

    // Execute update
    if ($model->edit('user', $data, $where)) {
        return redirect()->to(base_url('home/user'))->with('status', 'User updated successfully');
    } else {
        return redirect()->to(base_url('home/user'))->with('status', 'Failed to update user');
    }
}

 

public function hapus_user($id){
    $model = new M_kue();
    $where=array('id_user'=>$id);
    $model->hapus('user',$where);
    return redirect()->to('home/user');
}
public function kue()
{
         if (session()->get('level')>0){
        $model = new M_kue();
        $data ['manda'] = $model ->tampil('menu');

        $where=array('id_menu'=>session()->get('id'));
        $data['jes'] = $model->tampilgambar('toko');
        echo view ('header', $data);
        echo view ('kue', $data);
          } else{
              return redirect()->to('home/login');
           }
}
public function tambah_kue() {
          if (session()->get('level')>0){
        $model = new M_kue();
        $data['manda'] = $model->tampil('menu', 'id_menu');
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('tambah_kue', $data);
         } else{
              return redirect()->to('home/login');
           }
    }
public function aksi_t_kue() {
        $model = new M_kue();
        $b = $this->request->getPost('nama_kue');
        $c = $this->request->getPost('stok');
        $d = $this->request->getPost('harga');
        $isi = array(
            'nama_kue' => $b,
            'stok' => $c,
            'harga' => $d

        );
        $model->tambah('menu', $isi);

        return redirect()->to('home/kue');
    }



  public function edit_kue($id){
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $where = ['id_menu' => $id];
        $data['satu'] = $model->getWhere('menu', $where);
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('e_kue', $data);
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}
public function edit_user($id){
        if (session()->get('level')>0){
     $model = new M_kue();
     $where=array('id_user'=>$id);
     $data['jes'] = $model->tampilgambar('toko');
     $data['satu']=$model->getWhere('user',$where);
     echo view ('header');
     echo view ('e_user',$data);
           } else{
              return redirect()->to('home/login');
           }
 }


 public function aksi_e_kue()
{
    // Check if the form is submitted
    if ($this->request->getMethod() == 'post') {
        // Get form data
        $id_menu = $this->request->getPost('id_menu');
        $nama_kue = $this->request->getPost('nama_kue');
        $stok = $this->request->getPost('stok');
        $harga = $this->request->getPost('harga');

        // Load the Kue model
        $kueModel = new M_kue();

        // Prepare the data to update
        $data = [
            'nama_kue' => $nama_kue,
            'stok' => $stok,
            'harga' => $harga,
        ];

        // Specify the where condition
        $where = ['id_menu' => $id_menu];

        // Update the kue data in the database using the edit method
        $kueModel->editkue('menu', $data, $where);

        // Redirect to the kue list page
        return redirect()->to(base_url('home/kue'));
    }

    // If not a POST request, redirect to login page
    return redirect()->to(base_url('home/login'));
}
public function hapus_kue($id)
{
    $model = new M_kue(); // Make sure to use M_kue here
    $where = ['id_menu' => $id];
    $model->hapuskue('menu', $where);
    return redirect()->to(base_url('home/kue'));
}

public function form() {
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $where1 = array('form.id_form' => session()->get('id'));
        $data['jes'] = $model->jointigawhere('form', 'menu','transaksi','form.id_menu=menu.id_menu','form.id_transaksi=transaksi.id_transaksi','form.id_form=form.id_form', $where1);
        $data['jes'] = $model->tampilgambar('toko'); // Assuming this is needed for the view
        echo view('header');
        echo view('form', $data);
    } else {
        return redirect()->to('home/login');
    }
}


public function tambah_form() {
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $data['manda'] = $model->tampil('form');
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('tambah_form', $data);
    } else {
        return redirect()->to('home/login');
    }
}
public function aksi_t_form() {
        $model = new M_kue();
        $b = $this->request->getPost('nama_kue');
        $c = $this->request->getPost('nama');
        $g = $this->request->getPost('jumlah');
        $d = $this->request->getPost('uang_pembayaran');
        $e = $this->request->getPost('alamat');
        $f = $this->request->getPost('catatan');
        $isi = array(
            'nama_kue' => $b,
            'nama' => $c,
            'jumlah' => $g,
            'uang_pembayaran' => $d,
            'alamat' => $e,
            'catatan' => $f

        );
        $model->tambah('form', $isi);

        return redirect()->to('home/form');
    }
public function edit_form() {
          if (session()->get('level')>0){
        $model = new M_kue();
        $data['manda'] = $model->tampil('form', 'id_form');
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('e_form', $data);
         } else{
              return redirect()->to('home/login');
           }
    }
public function aksi_e_form()
 {
    $model = new M_kue();
    $a = $this->request->getPost('id_menu');
    $b = $this->request->getPost('jumlah');
    $c = $this->request->getPost('metode_pembayaran');
    $d = $this->request->getPost('alamat');
    $e = $this->request->getPost('catatan');
    $id = $this->request->getPost('id');

    $where=array('id_form'=>$id);

    $isi = array(
       'username' => $a,
       'password' => $b,
       'jk' => $c,
       'level' => $d,
       'catatan' => $e
   );

    $model ->edit('user', $isi, $where);

    return redirect()->to('home/user');
}
    public function hapus_form($id){
    $model = new M_kue();
    $where=array('id_form'=>$id);
    $model->hapus('form',$where);
    return redirect()->to('home/form');
}
public function logout()
{
    session()->destroy();
    return redirect()->to('home/login');
}
public function aksi_reset($id)
{
    $model = new M_kue();

    $where= array('id_user'=>$id);

    $isi = array(

        'pw' => md5('123')      

    );
    $model->editpw('user', $isi,$where);

    return redirect()->to('home/user');
}

/*public function tambah_transaksi() {
    $model = new M_kue();
    // Retrieve form data
    $id_menu = $this->request->getPost('id_menu');
    $jumlah = $this->request->getPost('jumlah');
    $harga_per_unit = $this->request->getPost('harga_per_unit');  // Tambahkan harga per unit di form
    $total_harga = $jumlah * $harga_per_unit;
    $tanggal_transaksi = date('Y-m-d H:i:s');
    
    // Prepare data to be inserted
    $data = [
        'id_menu' => $id_menu,
        'jumlah' => $jumlah,
        'total_harga' => $total_harga,
        'tanggal_transaksi' => $tanggal_transaksi
    ];
    
    // Insert data into the database
    $model->tambah_transaksi($data);

    // Redirect to the desired page
    return redirect()->to('home/transaksi');
}*/
public function tambah_transaksi() {
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $data['manda'] = $model->tampil('menu'); // Fetch data from the 'menu' table
        $data['jes'] = $model->tampilgambar('toko');
        echo view('header');
        echo view('tambah_transaksi', $data);
    } else {
        return redirect()->to('home/login');
    }
}


// public function aksi_t_transaksi() {
//     $model = new M_kue();
    
//     $id_menu = $this->request->getPost('id_menu');
//     $jumlah = $this->request->getPost('jumlah');
//     $total_harga = $this->request->getPost('total_harga');
//     $tgl_transaksi = $this->request->getPost('tgl_transaksi');
//     $kode_transaksi = $this->request->getPost('kode_transaksi');
//     $nama_user = $this->request->getPost('nama_user');
//     $uang_cust = $this->request->getPost('uang_cust');
//     $kembalian = $this->request->getPost('kembalian');
    
//     if(is_array($id_menu) && is_array($jumlah)) {
//         foreach($id_menu as $key => $value) {
//             $data = [
//                 'id_menu' => $value,
//                 'jumlah' => $jumlah[$key],
//                 'total_harga' => $total_harga, // Assuming total_harga is calculated per item in your front-end script
//                 'tgl_transaksi' => $tgl_transaksi,
//                 'kode_transaksi' => $kode_transaksi,
//                 'nama_user' => $nama_user,
//                 'uang_cust' => $uang_cust
//             ];
//             $model->tambah('transaksi', $data);
//         }
//     }

//     return redirect()->to('home/transaksi');
// }

public function aksi_t_transaksi() {
    $model = new M_kue();
    
    $id_menu = $this->request->getPost('id_menu');
    $jumlah = $this->request->getPost('jumlah');
    $total_harga = $this->request->getPost('grand_total'); // Use grand_total from the form
    $tgl_transaksi = $this->request->getPost('tgl_transaksi');
    $nama_user = $this->request->getPost('nama_user');
    $uang_cust = $this->request->getPost('uang_cust');
    $kembalian = $this->request->getPost('kembalian');

    // Generate a unique transaction code
    $kode_transaksi = $this->generateTransactionCode();

    if (is_array($id_menu) && is_array($jumlah)) {
        foreach ($id_menu as $key => $value) {
            $data = [
                'id_menu' => $value,
                'jumlah' => $jumlah[$key],
                'total_harga' => $total_harga, // Assuming total_harga is calculated per item in your front-end script
                'tgl_transaksi' => $tgl_transaksi,
                'kode_transaksi' => $kode_transaksi,
                'nama_user' => $nama_user,
                'uang_cust' => $uang_cust,
                'kembalian' => $kembalian
            ];
            $model->tambah('transaksi', $data);
        }
    }

    return redirect()->to('home/transaksi');
}

// Function to generate a unique transaction code
private function generateTransactionCode() {
    // Example format: YYYYMMDD-HHMMSS-RANDOM
    $timestamp = date('YmdHis'); // Current date and time
    // Random number between 1000 and 9999

    return $timestamp ;
}


public function transaksi() {
    if (session()->get('level') > 0) {
        $model = new M_kue();
        // Fetch data from the database and group by kode_transaksi
        $data['manda'] = $model->join('transaksi', 'menu', 'transaksi.id_menu=menu.id_menu');
        $grouped_data = [];
        foreach ($data['manda'] as $kin) {
            $grouped_data[$kin->kode_transaksi][] = $kin;
        }

        // Menyimpan data yang sudah digabungkan dalam array baru
        $data['grouped_jel'] = $grouped_data;
        echo view('header');
        echo view('transaksi', $data);
        // echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}
public function hapus_transaksi($kode_transaksi)
{
    $model = new M_kue();
    $where = array('kode_transaksi' => $kode_transaksi);

    // Hapus semua transaksi yang memiliki kode transaksi yang sama
    $model->hapus('transaksi', $where);

    return redirect()->to('home/transaksi')->with('message', 'Transaksi dengan kode ' . $kode_transaksi . ' berhasil dihapus.');
}

public function setting()
{
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $data['jes'] = $model->tampilgambar('toko'); // Mengambil data dari tabel 'toko'
        
        echo view('header');
        // Mengirimkan data ke menu.php
        echo view('setting', $data); // Mengirimkan data ke setting.php
    } else {
        return redirect()->to('home/login');
    }
}

public function aksietoko()
{
    $model = new M_kue();
    $nama = $this->request->getPost('nama');
    $id = $this->request->getPost('id');
    $uploadedFile = $this->request->getFile('foto');

    $where = array('id_toko' => $id);

    $isi = array(
        'nama_toko' => $nama
    );

    // Handle the file upload if there's a new file
    if ($uploadedFile && $uploadedFile->isValid() && !$uploadedFile->hasMoved()) {
        $foto = $model->uploadgambar($uploadedFile, $id); // Pass the store ID
        $isi['logo'] = $foto; // Save the new file name in the database
    }

    $model->editgambar('toko', $isi, $where);

    return redirect()->to('home/dashboard');
}

public function detailpesanan($id_transaksi)
{
    // Checking user level
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $where = array('transaksi.id_transaksi' => $id_transaksi);

        // Fetch data from the database based on transaction ID
        $data['details'] = $model->joinwhere('transaksi', 'menu', 'transaksi.id_menu=menu.id_menu', $where);

        echo view('header');
        echo view('detailpesanan', $data);
    } else {
        return redirect()->to('/home/login');
    }
}
public function edit_pesanan($kode_transaksi)
{
    // Mengambil data transaksi yang sudah dikelompokkan dari $data['grouped_jel']
    $grouped_data = $this->grouped_jel();

    // Cek apakah kode transaksi ada di dalam grouped data
    if (isset($grouped_data[$kode_transaksi])) {
        $data['transaksi'] = $grouped_data[$kode_transaksi];
    } else {
        // Jika kode transaksi tidak ditemukan, arahkan ke halaman error atau notifikasi
        return redirect()->to('home/transaksi')->with('error', 'Kode Transaksi tidak ditemukan.');
    }

    // Load view dengan data transaksi yang sesuai
    return view('edit_pesanan', $data);
}

private function grouped_jel()
{
    // Contoh pengelompokan data transaksi berdasarkan kode_transaksi
    $model = new M_kue();
    $all_transaksi = $model->findAll();

    $grouped_data = [];
    foreach ($all_transaksi as $transaksi) {
        $kode_transaksi = $transaksi['kode_transaksi'];
        if (!isset($grouped_data[$kode_transaksi])) {
            $grouped_data[$kode_transaksi] = [];
        }
        $grouped_data[$kode_transaksi][] = $transaksi;
    }

    return $grouped_data;
}


public function update_pesanan()
{
    // Load model
    $model = new M_kue();

    // Ambil data dari formulir
    $id_transaksi = $this->request->getPost('id_transaksi');
    $kode_transaksi = $this->request->getPost('kode_transaksi');
    $id_menu = $this->request->getPost('id_menu');
    $jumlah = $this->request->getPost('jumlah');
    $total_harga = $this->request->getPost('total_harga');
    $tgl_transaksi = $this->request->getPost('tgl_transaksi');
    $nama_user = $this->request->getPost('nama_user');
    $uang_cust = $this->request->getPost('uang_cust');
    $kembalian = $this->request->getPost('kembalian');

    // Siapkan data untuk update
    $data = [
        'id_menu' => $id_menu,
        'jumlah' => $jumlah,
        'total_harga' => $total_harga,
        'tgl_transaksi' => $tgl_transaksi,
        'nama_user' => $nama_user,
        'uang_cust' => $uang_cust,
        'kembalian' => $kembalian
    ];

    // Update data transaksi
    $model->update($id_transaksi, $data);

    // Alihkan kembali ke halaman transaksi dengan pesan sukses
    return redirect()->to('home/transaksi')->with('success', 'Data transaksi berhasil diperbarui.');
}









//tinggal download composer pdf dan excel
public function history()
{
    // Mengecek level pengguna dari session
    if (session()->get('level') > 0) {
        $model = new M_kue();
        // $where1 = array('user.id_user' => session()->get('id'));

        $data['manda'] = $model->join('transaksi', 'menu', 'transaksi.id_menu=menu.id_menu');
        $grouped_data = [];
        foreach ($data['manda'] as $kin) {
            $grouped_data[$kin->kode_transaksi][] = $kin;
        }

        // Menyimpan data yang sudah digabungkan dalam array baru
        $data['grouped_jel'] = $grouped_data;
        echo view('header');
        echo view('menu');
        echo view('history', $data);
    } else {
        // Redirect ke halaman login jika level pengguna tidak cukup
        return redirect()->to('/home/login');
    }
}


public function pesanan()
{
    // Mengecek level pengguna dari session
    if (session()->get('level') > 0) {
        $model = new M_kue();
        $where1 = array('user.id_user' => session()->get('id'));

        // Fetch data from the database
        $data['manda'] = $model->jointigawhere('transaksi', 'menu', 'user', 'transaksi.id_menu=menu.id_menu', 'transaksi.id_user=user.id_user', 'transaksi.id_transaksi', $where1);

        // Grouping data by kode_transaksi
        $grouped_data = [];
        foreach ($data['manda'] as $kin) {
            $grouped_data[$kin->kode_transaksi][] = $kin;
        }

        // Storing grouped data into a new array
        $data['grouped_jel'] = $grouped_data;

        echo view('header');
        echo view('pesanan', $data);
    } else {
        // Redirect ke halaman login jika level pengguna tidak cukup
        return redirect()->to('/home/login');
    }
}
public function detail_nota($kode_transaksi)
{
    $model = new M_kue();
    $where = array('transaksi.kode_transaksi' => $kode_transaksi);

    // Fetch the data
    $data['nota'] = $model->jointigawhere('transaksi', 'menu', 'user', 'transaksi.id_menu=menu.id_menu', 'transaksi.id_user=user.id_user', 'transaksi.id_transaksi', $where);

    echo view('header');
    echo view('detail_nota', $data); // Buat view baru bernama detail_nota.php
}

public function cetak_nota($kode_transaksi)
{
    $model = new M_kue();
    $where = array('transaksi.kode_transaksi' => $kode_transaksi);

    // Fetch the data
    $data['nota'] = $model->jointigawhere('transaksi', 'menu', 'user', 'transaksi.id_menu=menu.id_menu', 'transaksi.id_user=user.id_user', 'transaksi.id_transaksi', $where);

    echo view('cetak_nota', $data); // Buat view baru bernama cetak_nota.php yang diformat untuk printer
}


public function edit_transaksi($id_transaksi)
{
    // Mengecek level pengguna dari session
    if (session()->get('level') > 0) {
        $model = new M_kue();

        // Mendapatkan data transaksi berdasarkan ID
        $data['transaksi'] = $model->getTransaksiById($id_transaksi);

        // Memeriksa apakah data transaksi ditemukan
        if (!$data['transaksi']) {
            return redirect()->to('/home/transaksi')->with('error', 'Data transaksi tidak ditemukan.');
        }

        // Mengirim data ke view
        echo view('header');
        echo view('edit_transaksi', $data);
    } else {
        // Redirect ke halaman login jika level pengguna tidak cukup
        return redirect()->to('/home/login');
    }
}

public function update_transaksi($id_transaksi)
{
    if (session()->get('level') > 0) {
        $model = new M_kue();

        // Mengambil input dari form
        $data = [
            'nama_kue' => $this->request->getPost('nama_kue'),
            'jumlah' => $this->request->getPost('jumlah'),
            'total_harga' => $this->request->getPost('total_harga'),
        ];

        // Melakukan update data transaksi
        $model->updateTransaksi($id_transaksi, $data);

        return redirect()->to('/home/transaksi')->with('success', 'Transaksi berhasil diupdate.');
    } else {
        return redirect()->to('/home/login');
    }
}














//laporan
public function laporan() {
    if (session()->get('level') > 0) {
        echo view('header');
        echo view('laporan');
    } else {
        return redirect()->to('home/login');
    }
}
    public function generate_pdf()
    {
        if (session()->get('level') > 0) {
            $this->laporan_pdf();
        } else {
            return redirect()->to('home/login');
        }
    }

    private function laporan_pdf()
    {
        $model = new M_kue();

        $start_date = $this->request->getPost('start_date'); 
        $end_date = $this->request->getPost('end_date'); 

        $data['laporan'] = $model->getLaporanByDate($start_date, $end_date); 
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);


        $html = view('laporan_pdf', $data);

        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("laporan.pdf");
    }

    public function generate_excel()
    {
    $model = new M_kue(); // Ensure this model is properly defined and extends the base Model class
    $start_date = $this->request->getPost('start_date'); 
    $end_date = $this->request->getPost('end_date'); 

    // Fetch data for the given date range
    $data['laporan'] = $model->getLaporanByDateForExcel($start_date, $end_date);

    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()
    ->setCreator("Your Name")
    ->setLastModifiedBy("Your Name")
    ->setTitle("Laporan Transaksi")
    ->setSubject("Laporan Transaksi")
    ->setDescription("Laporan Transaksi")
    ->setKeywords("Spreadsheet")
    ->setCategory("Report");

    // Set the active sheet
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'ID Transaksi')
    ->setCellValue('B1', 'Tanggal Transaksi')
    ->setCellValue('C1', 'Kode Transaksi')
    ->setCellValue('D1', 'ID menu')
    ->setCellValue('E1', 'Jumlah')
    ->setCellValue('F1', 'Total Harga');

    // Populate the spreadsheet with data
    $rowCount = 2;
    foreach ($data['laporan'] as $row) {
        $sheet->setCellValue('A'.$rowCount, $row['id_transaksi'])
        ->setCellValue('B'.$rowCount, $row['tgl_transaksi'])
        ->setCellValue('C'.$rowCount, $row['kode_transaksi'])
        ->setCellValue('D'.$rowCount, $row['id_menu'])
        ->setCellValue('E'.$rowCount, $row['jumlah'])
        ->setCellValue('F'.$rowCount, $row['total_harga']);
        $rowCount++;
    }

    // Set the headers for the Excel file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="laporan_transaksi.xlsx"');
    header('Cache-Control: max-age=0');

    // Write the file and output to the browser
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
}

public function generate_window()
{
    if (session()->get('level') > 0) {
        echo view('header');
        echo view('menu');
        echo view('laporan');
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}

public function generate_window_result()
{
    if (session()->get('level') > 0) {
        // Ambil data formulir berdasarkan rentang waktu dari request POST
        $start_date = $this->request->getPost('start_date');
        $end_date = $this->request->getPost('end_date');
        $model = new M_kue();
        $data['formulir'] = $model->getLaporanByDate($start_date, $end_date);

        echo view('cetak_hasil', $data);
    } else {
        return redirect()->to('home/login');
    }


}


}
