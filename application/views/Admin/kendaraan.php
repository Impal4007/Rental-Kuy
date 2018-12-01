      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>Kendaraan">Kendaraan</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <a class="nav-link" href="<?php echo base_url();?>tambahk">
              <button style="background-color: white">
                  <i class="fas fa-fw fa-plus"></i>
                  <span>TAMBAH KENDARAAN</span>
            </button>
          </a><br>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Kendaraan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id Kendaraan</th>
                      <th>Kondisi</th>
                      <th>Jenis</th>
                      <th>No Plat</th>
                      <th>Status</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php
                        foreach ($mobil->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->id_kendaraan.'</td>';
                        if ($row->kondisi == 1){
                          echo '<td>'.'BAIK'.'</td>';
                        }else{
                          echo '<td>'.'RUSAK'.'</td>';
                        }                     
                        if ($row->kondisi == 1){
                          echo '<td>'.'AVANZA'.'</td>';
                        }else if ($row->kondisi == 2){
                          echo '<td>'.'ERTIGA'.'</td>';
                        } else{                        
                          echo '<td>'.'HRV'.'</td>';
                        }
                        echo '<td>'.$row->noplat.'</td>';
                        if ($row->noplat == 1){
                        echo '<td>'.'TERSEWA'.'</td>';
                       }else{
                        echo '<td>'.'TERSEDIA'.'</td>';
                       }
                        echo '</tr>';
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

        </div>
      </div>

    </div>

