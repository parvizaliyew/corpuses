      <!-- partial:../../partials/_footer.html -->
    </div>
    <!-- content-wrapper ends -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Perviz {{ date('Y') }}</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('manager/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('manager/') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('manager/') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('manager/') }}/assets/js/misc.js"></script>
<script src="{{ asset('manager/') }}/assets/js/settings.js"></script>
<script src="{{ asset('manager/') }}/assets/js/todolist.js"></script>

@stack('js')
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>                                                                                                                                         