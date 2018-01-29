<?

/**
* 
*/
class tambah extends WebService 
{
	
	function tambahfranchise()
	{

if(isset($_POST['nama'])){
$nama=$_POST['nama'];
$email=$_POST['email'];
$notelp=$_POST['notelp'];
$alamat=$_POST['alamat'];
$pesan=$_POST['pesan'];
if($nama&&$email&&$notelp&&$alamat&&$pesan){
$count=mysql_num_rows(mysql_query("select * from franchise_form"));
if($count < 0){
echo"<script>alert('username sudah digunakan');window.location.href='"._SPPATH."'</script>";
}else{
mysql_query("insert into franchise_form(nama,email,notelp,alamat,pesan)values('$nama','$email','$notelp','$alamat','$pesan')");
echo"<script>alert('anda berhasil bergabung menjadi franchise kami, silahkan tunggu info selanjutnya dari kami');window.location.href='"._SPPATH."';</script>";
}
}else{
echo"<script>alert('semua form wajib di isi');window.location.href='"._SPPATH."';</script>";
}
}

	// $franchise= new FranchiseModel();
	// $franchise->id=$_POST['id'];
	// $franchise->nama=$_POST['nama'];
	// $franchise->email=$_POST['email'];
	// $franchise->notelp=$_POST['notelp'];
	// $franchise->alamat=$_POST['alamat'];
	// $franchise->pesan=$_POST['alamat'];
	// $franchise->save();
}


function tambahcontact()
	{
// if(isset($_POST['nama'])){
// $nama=$_POST['nama'];
// $email=$_POST['email'];
// $pesan=$_POST['pesan'];
// if($nama&&$email&&$pesan){
// $insert="insert into contact_from values('$nama','$email','$pesan')";
// $hasil=mysql_query($insert);
// echo"<script>alert('buku telah ditambah');window.location.href='"._SPPATH."';</script>";
// }else{
// echo"semua form harus diisi!";
// }
// }

	$contact= new ContactModel();
	$contact->id=$_POST['id'];
	$contact->nama=$_POST['nama'];
	$contact->email=$_POST['email'];
	$contact->pesan=$_POST['pesan'];
	$contact->save();
echo"<script>alert('pesan anda telah diterima');window.location.href='"._SPPATH."';</script>";

}
}
