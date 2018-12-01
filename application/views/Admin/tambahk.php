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
                  <tbody>
                    <form action="<?php echo base_url(). 'tambahk/tambahk_aksi'; ?>" method="post">
                    <tr>
                      <th>Id Kendaraan</th>
                      <th><input class="form-control" id="inlineFormInputGroup" placeholder="Id Kendaraan" style="background-color:#efeded; font-size:12px" type="text" name="id"></th>
                    <tr>
                      <th>Jenis</th>
                      <th><select class="form-control" id="inlineFormInputGroup" name="jenis">
                              <option value="1">Avanza</option>
                              <option value="2">Ertiga</option>
                              <option value="3">HRV</option>
                          </select>
                      </th>
                    </tr>   
                    <tr>
                      <th>No Plat</th>
                      <th><input class="form-control" id="inlineFormInputGroup" placeholder="No Plat" style="background-color:#efeded; font-size:12px" type="text" name="noplat"></th>
                    </tr>      
                  </tbody>
                </table>
              </div>
                  <button class="btn mt-4 mb-3 btn-light rounded btn-lg text-light" style="background-color:#1f58ba; font-color:#ffffff" type="submit">Tambah Mobil</button>
              </form>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

        </div>
      </div>

    </div>

