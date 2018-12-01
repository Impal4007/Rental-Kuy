    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">siap logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin untuk logout?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url();?>logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script>

  </body>

</html>
