<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<html>
<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>Nama</th>

 <th>Username</th>

 <th>Password</th>

 </tr>

</thead>

<tbody>

<?php $i=1; foreach($user as $user) { ?>

<tr>

 <td><?php echo $user->nama ?></td>

 <td><?php echo $user->username ?></td>

 <td><?php echo $user->password ?></td>

 </tr>

<?php $i++; } ?>

</tbody>

</table>