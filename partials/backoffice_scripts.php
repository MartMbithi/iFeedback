<!-- Logout Modal -->
<?php include('../modals/logout.php'); ?>
<!-- Bundle Js -->
<script src="../public/js/bundle.js?ver=1.4.0"></script>
<!-- Theme Base Script -->
<script src="../public/js/scripts.js?ver=1.4.0"></script>
<!-- Sweet Alert Js -->
<script src="../public/js/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="../public/js/apps/inbox.js?ver=1.4.0"></script>
<!-- Init Js -->
<?php include('../partials/alert.php'); ?>

<script>
    /* Prevent double resubmission on browser refresh */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>