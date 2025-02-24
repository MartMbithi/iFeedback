<!-- Logout Modal -->
<?php include('../modals/logout.php'); ?>
<!-- Bundle Js -->
<script src="../public/js/bundle.js?ver=1.4.0"></script>
<!-- Theme Base Script -->
<script src="../public/js/scripts.js?ver=1.4.0"></script>
<!-- Sweet Alert Js -->
<script src="../public/js/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="../public/js/apps/inbox.js?ver=1.4.0"></script>
<!-- Stepper -->
<script src="../public/js/libs/bs-stepper/js/bs-stepper.min.js"></script>

<!-- Init Js -->
<?php include('../partials/alert.php'); ?>
<script defer>
    function updateDepartments() {
        const directorate = document.getElementById('directorate').value;
        const department = document.getElementById('department');
        department.innerHTML = '';
        const options = directorate === 'Administration' ? ['Transport', 'Security', 'Finance'] : ['Testing', 'Analysis'];
        options.forEach(dep => {
            let opt = document.createElement('option');
            opt.innerHTML = dep;
            department.appendChild(opt);
        });
    }
</script>