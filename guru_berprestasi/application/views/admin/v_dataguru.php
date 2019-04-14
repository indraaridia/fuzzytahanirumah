<?php
$this->load->view('admin/v_header2');
//$this->load->view('admin/v_detaildatamahasiswa');
?>
 <div class="col-lg-12">
 <div class="card">
    <div class="card-header bg-primary">
       <h6 style="color: white;">DATA GURU</h6>
        
    </div>
    
     <div class="card-body">
        <a href="<?php echo site_url('admin/c_admin/formentridataguru')?>"><button class="btn btn-success">Tambah Data</button></a>   
     <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTable">
            <thead>
                <tr>
                <th>No</th>
                <th>Nip/No.KK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tgl lahir</th>
                <th>Jk</th>
                <th>Jenjang</th>
                <th>Program Studi</th>
                <th>Status</th>
                <th>Kehadiran</th>
                <th>Kinerja</th>
                <th>Evaluasi Belajar</th>
                <th>Peng. Materi</th>
                <th>Aksi</th>           
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                foreach($this->data->tampildata() as $row)  
                {
                    echo "<tr>  
                                <td>$no</td>  
                                <td>$row->nip</td>                                  
                                <td>$row->nama</td>  
                                <td>$row->alamat</td> 
                                <td>$row->ttl</td>
                                <td>$row->jk</td> 
                                <td>$row->jenjang</td>
                                <td>$row->program_studi</td>
                                <td>$row->status</td>
                                <td>$row->kehadiran</td>
                                <td>$row->kinerja</td>
                                <td>$row->evaluasi</td>
                                <td>$row->peng_materi</td>   
                    "; 
                ?>
                    <td align="center">
                    <a href="<?php echo site_url()?>/admin/c_admin/formeditdataguru/<?=$row->nip?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
        	  	    <a href="<?php echo site_url()?>/admin/c_admin/hapusdataguru/<?=$row->nip?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
    	           </td> 
                <?php
                    echo "</tr>";
                    $no=$no+1;
                }
            ?>
            </tbody>                
        </table>
     </div>
     </div>
    
 </div>
 </div>

