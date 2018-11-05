<?php 
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db"; //isi sesuai nama database anda
	var $conn = "";
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);//buatlah koneksi secara OOP
		if ($this->conn) {
			echo "Connection Success";
		}else{
			echo "Connection Failed";
		}
	}
	function tampil_data(){
	
		//lengkapilah method tampil data
		//query select user
		$data = mysqli_query($this->conn, "SELECT * FROM user");
		$hasil = [];
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nama,$alamat,$usia,$genre,$wisata){
		//buatlah method input
		//query inset into user
		$genre = implode(", ", $genre);
		$wisata = implode(", ", $wisata);
		mysqli_query($this->conn, "INSERT INTO user(nama, alamat, usia, genre, wisata) VALUES('$nama, $alamat, $usia, $genre, $wisata') WHERE id='$id'");
	}
	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		mysqli_query($this->conn, "DELETE FROM user WHERE id='$id'");
	}
	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn, "SELECT * FROM user WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$genre = implode(", ", $genre);
		$wisata = implode(", ", $wisata);
		mysqli_query($this->conn, "UPDATE user SET nama = '$nama', alamat = '$alamat', usia = '$usia', genre = '$genre', wisata = '$wisata' WHERE id='$id'");
	}
} 
?>