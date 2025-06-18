  <!-- Start Register Modal -->
        <div class="modal fade ed-auth__modal" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " style="max-width: 460px !important;">
                <div class="ed-auth__modal-content modal-content">
                    <button type="button" class="ed-auth__modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi-rr-cross"></i>
                    </button>

                   <div>
                       <img src="assets/images/pop-up.jpg" width="100%" alt="#" />
                   </div>
                </div>
            </div>
        </div>
        <!-- End Register Modal -->
        
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the current page name
    const path = window.location.pathname;
    const page = path.substring(path.lastIndexOf("/") + 1);

    // Show modal only if on index.php
    if (page === "index.php" || page === "") {
      var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
      registerModal.show();
    }
  });
</script>
