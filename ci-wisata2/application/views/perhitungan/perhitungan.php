     <div class="col-lg-12">
        <br>
        <h2>Perhitungan</h2>
        <br>
     <div class="card">
        <div class="card-header bg-danger">
            <h6 style="color: white;">Data Wisata</h6>
        </div>
        <div class="table-responsive " style="height: 500px;" >
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="scroll">
               
        <table class="table table-stripped table-bordered">
            <thead align="center">
       
                <tr>
                <th>Id Wisata</th>
                <th>Nama Pantai</th>
                <th>Jenis</th>
                <th>Biaya</th>
                <th>Jarak (Km)</th>
                <th>Akses Jalan (%)</th>
                <th>penginapan</th>
                <th>fasilitas (%)</th>
                </tr>

            </thead>

            <tbody align="center">
                 <?php foreach($wisata as $wst){ ?>
                <tr>
                <td><?php echo $wst['idwisata']; ?></td>
                <td><?php echo $wst['nama']; ?></td>
                <td><?php echo $wst['jenis'];; ?></td>
                <td><?php echo $wst['biaya']; ?></td>
                <td><?php echo $wst['jarak']; ?></td>
                <td><?php echo $wst['akses_jalan']; ?></td>
                <td><?php echo $wst['penginapan']; ?></td>
                <td><?php echo $wst['fasilitas']; ?></td>
                </tr>

                 <?php  } ?>

            </tbody>
        </table>
            </div>
                 </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12">
        <br>
     <div class="card">
        <div class="card-header bg-danger">
            <h6 style="color: white;">Nilai Fuzzyfikasi</h6>
        </div>
         <div class="table-responsive" style="height: 500px;">
            <div class="row mt-3" style="width: 300px;">
            <div class="col-md-12">
           <table class="table table-striped table-bordered table-hover" id="dataTable">
            <thead >
                <tr>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Wisata</th>
                    <th colspan="3" style="text-align: center;" >Biaya</th>
                    <th colspan="3" style="text-align: center;">Jarak</th>
                    <th colspan="3" style="text-align: center;">Akses Jalan</th>
                    <th colspan="3" style="text-align: center;">Penginapan</th>
                    <th colspan="3" style="text-align: center;">Fasilitas</th>
                    
                </tr>
                <tr style="width: 20px;">
                    <th style="text-align: center;">Murah</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Mahal</th>
                    
                    <th style="text-align: center;">Dekat</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Jauh</th>
                    
                    
                    <th style="text-align: center;">Gampang</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Sulit</th>
                   
                    <th style="text-align: center;">Banyak</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Sedikit</th>

                    <th style="text-align: center;">Banyak</th>
                    <th style="text-align: center;">Sedang</th>
                    <th style="text-align: center;">Sedikit</th>
                   
                </tr>
            </thead>
            <tbody align="center">
                <?php 
               //proses fuzzyfikasi data wisata yang ada di database
                function fuzzyfikasi($p1,$p2,$p3,$aj){
                    $biaya1="";
                    $id=1;
                    $murah;
                    $sedang;
                    $mahal;
                //ini fuzzyfikasi [biaya murah], [jarak dekat], [akses jalan gampang], [penginapan banyak], [fasilitas banyak]    
                        if ($aj<=$p1)
                            {
                                 $murah=1;
                            }else if($aj>=$p1 && $aj<=$p2)
                            {
                                $murah = ($p2 - $aj)/($p2-$p1);
                            }else if($aj>=$p2){
                                $murah = 0;
                            }
                //ini fuzzyfikasi [biaya sedang], [jarak sedang], [akses jalan sedang], [penginapan sedang], [fasilitas sedang]
                        if ($aj<=$p1 || $aj>=$p3){
                                $sedang=0;
                            }
                            else if($aj>=$p1 && $aj<=$p2)
                            {
                                $sedang=($aj - $p1)/($p2-$p1);
                            }
                            else if($aj >=$p2 && $aj <=$p3){
                                $sedang=($p3-$aj)/($p3-$p2);
                            }
                //ini fuzzyfikasi [biaya mahal], [jarak jauh], [akses jalan sulit], [penginapan sedikit], [fasilitas sedikit]

                        if ($aj>=$p3)
                            {
                                $mahal=1;
                            }else if($aj>=$p2 && $aj<=$p3)
                            {
                                $mahal = ($aj - $p2)/($p3-$p2);
                            }else if($aj<=$p2){
                                $mahal=0;

                            }
                    return array($murah,$sedang,$mahal);
                            
                             }
                    //coba manggil dengan echo
                             $id=0;
                             // $f=fujikasi(45,75,100,100);
                             // echo $f[0];
                    //ini prosess perulangan untuk menentukan batas bawah, batas sedang, batas atas pada kriteria         
                      foreach($wisata as $v){
                        $id ++;
                            $biaya=fuzzyfikasi(15000,30000,50000,$v['biaya']);
                            $jarak=fuzzyfikasi(15,25,30,$v['jarak']);
                            $akses_jalan=fuzzyfikasi(45,75,100,$v['akses_jalan']);
                            $penginapan=fuzzyfikasi(15,25,30,$v['penginapan']);
                            $fasilitas=fuzzyfikasi(45,75,100,$v['fasilitas']);
                        ?>
                        <tr>

                        <td><?=$id;?></td>
                        <td><?=$v['nama'];?></td>
                    
                        <td><?=$biaya[0];?></td>
                        <td><?=$biaya[1];?></td>
                        <td><?=$biaya[2];?></td>

                        <td><?=$jarak[0];?></td>
                        <td><?=$jarak[1];?></td>
                        <td><?=$jarak[2];?></td>

                        <td><?=$akses_jalan[2];?></td>
                        <td><?=$akses_jalan[1];?></td>
                        <td><?=$akses_jalan[0];?></td>

                        <td><?=$penginapan[2];?></td>
                        <td><?=$penginapan[1];?></td>
                        <td><?=$penginapan[0];?></td>

                        <td><?=$fasilitas[2];?></td>
                        <td><?=$fasilitas[1];?></td>
                        <td><?=$fasilitas[0];?></td>
                        
                        </tr>

                    
                    <?php  } ?>
            
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 </div>






    


