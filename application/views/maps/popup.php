		 <html>
		 <head>
		 <style>
		 table {
		     font-family: arial, sans-serif;
		     border-collapse: collapse;
		     width: 100%;
				 font-size: 13px;
		 }

		 td, th {
		     border: 1px solid #dddddd;
		     text-align: left;
		     padding: 8px;
		 }

		 tr:nth-child(even) {
		     background-color: #dddddd;
		 }
		 </style>
		 </head>
		 <body>
			 <?php
			 $nama;
			 $email;
			 $web;
			 $no_tlp;
			 $alamat;
			 $foto;
			 		 foreach($lihat as $data_pelkes){
						 $nama=$data_pelkes->nama_pelayanan_kesehatan;
						 $email=$data_pelkes->email;
						 $web=$data_pelkes->web;
						 $no_tlp=$data_pelkes->no_tlp;
						 $alamat=$data_pelkes->alamat;
						 $foto=$data_pelkes->foto;
			 	 	}
			 		 ?>
		 <table>
		   <tr>
		     <td colspan="3" ><center><img src="<?php echo site_url(); ?>uploads/<?php echo $foto ?>" width="50%"></center></td>

		   </tr>
		   <tr>
		     <td width="30%">Nama</td>
		     <td width="1%">:</td>
		     <td><?php echo $nama ?></td>
		   </tr>
		   <tr>
		     <td>Email</td>
		     <td>:</td>
		     <td><?php echo $email ?></td>
		   </tr>
		   <tr>
		     <td>Situs Web</td>
		     <td>:</td>
		     <td><?php echo $web ?></td>
		   </tr>
		   <tr>
		     <td>No Telepon</td>
		     <td>:</td>
		     <td><?php echo $no_tlp ?></td>
		   </tr>
		   <tr>
		     <td>Alamat</td>
		     <td>:</td>
		     <td><?php echo $alamat ?></td>
		   </tr>
		   </table>

		 </body>
		 </html>
