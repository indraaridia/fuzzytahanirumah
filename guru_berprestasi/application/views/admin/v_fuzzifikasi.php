<?php
$this->load->view('admin/v_header2');
//$this->load->view('admin/v_detaildatamahasiswa');

function obj2array($obj)
{
    
    if(is_object($obj))
        $obj=get_object_vars($obj);
    
    if(is_array($obj))
        return array_map(__FUNCTION__,$obj);
    else
        return $obj;
}

?>
 <div class="col-lg-12">
 <div class="card">
    <div class="card-header bg-danger">
      <h6 style="color: white;">PROSES FUZZIFIKASI (PERHITUNGAN BOBOT/NILAI DERAJAT KEANGGOTAAN)</h6>
    </div>
    
     <div class="card-body">
     <center><a href="<?php echo site_url('admin/c_fuzzifikasi/hitungBobot')?>"><button class="btn btn-primary">HITUNG</button></a></center>    
     <br /><br />
     
     <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTable">
            <thead>
                <tr>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Nip/No.KK</th>
                    <th colspan="3" style="text-align: center;" >Kehadiran</th>
                    <th colspan="3" style="text-align: center;">Kinerja</th>
                    <th colspan="3" style="text-align: center;">Evaluasi Belajar</th>
                    <th colspan="3" style="text-align: center;">Peng. Materi</th>
                    
                </tr>
                <tr>
                    <th style="text-align: center;">Rendah</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Tinggi</th>
                    
                    <th style="text-align: center;">Rendah</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Tinggi</th>
                    
                    
                    <th style="text-align: center;">Rendah</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Tinggi</th>
                   
                    <th style="text-align: center;">Rendah</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Tinggi</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php
                
                $kehadiran=obj2array($kehadiran);
                $kinerja=obj2array($kinerja);
                $evaluasi=obj2array($evaluasi);
                $peng_materi=obj2array($peng_materi);
                
                for($i=1;$i<=sizeof($kehadiran);$i++)
                {
                    $nip=$kehadiran[$i-1]['nip'];
                    $kehadiran1=$kehadiran[$i-1]['rendah'];
                    $kehadiran2=$kehadiran[$i-1]['sedang'];
                    $kehadiran3=$kehadiran[$i-1]['tinggi'];
                  
                    //$totalipk=$ipk1+$ipk2+$ipk3+$ipk4;
                    
                    $kinerja1=$kinerja[$i-1]['rendah'];
                    $kinerja2=$kinerja[$i-1]['sedang'];
                    $kinerja3=$kinerja[$i-1]['tinggi'];
                   
                   // $totalpenghasilan=$penghasilan1+$penghasilan2+$penghasilan3+$penghasilan4;
                    
                  
                    $evaluasi1=$evaluasi[$i-1]['rendah'];
                    $evaluasi2=$evaluasi[$i-1]['sedang'];
                    $evaluasi3=$evaluasi[$i-1]['tinggi'];
                   
                    //$totaltanggungan=$tanggungan1+$tanggungan2+$tanggungan3+$tanggungan4;
                    
                    $peng_materi1=$peng_materi[$i-1]['rendah'];
                    $peng_materi2=$peng_materi[$i-1]['sedang'];
                    $peng_materi3=$peng_materi[$i-1]['tinggi'];
                   
                    //$totalsertifikat=$sertifikat1+$sertifikat2+$sertifikat3+$sertifikat4;
                    
                    //$totalrata2=($totalipk+$totalpenghasilan+$totalpekerjaan+$totaltanggungan+$totalsertifikat)/20;
                    
                    echo("
                        <tr>
                            <td>$i</td>
                            <td>$nip</td>
                            <td>$kehadiran1</td>
                            <td>$kehadiran2</td>
                            <td>$kehadiran3</td>
                           
                            <td>$kinerja1</td>
                            <td>$kinerja2</td>
                            <td>$kinerja3</td>
                           
                            <td>$evaluasi1</td>
                            <td>$evaluasi2</td>
                            <td>$evaluasi3</td>
                          
                            <td>$peng_materi1</td>
                            <td>$peng_materi2</td>
                            <td>$peng_materi3</td>
                            
                            
                        </tr>
                    ");
                }
            ?>
            </tbody>                
        </table>
     </div>
     </div>
     </div>
    
 </div>
 </div>

