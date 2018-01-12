<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = '';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>

<center> 
MENAMPILKAN DATA  
<br>
<br>

<table  border='1' Width='800'>  
<tr>
    <th> Id </th>
    <th> FirstName</th>
    <th> LastName</th>
    <th> Email</th>
	<th> Reg Date</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From myguests" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "    
        <tr>
        <td>".$data['id']."</td>
        <td>".$data['firstname']."</td>
        <td>".$data['lastname']."</td>
        <td>".$data['email']."</td>
        <td>".$data['reg_date']."</td>
        </tr> 
        ";
     }

?>
</table>