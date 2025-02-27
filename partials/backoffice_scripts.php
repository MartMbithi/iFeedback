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
<script>
    function updateDepartments() {
        let directorate = document.getElementById("directorate").value;
        let departmentDropdown = document.getElementById("department");

        if (directorate === "") {
            departmentDropdown.innerHTML = '<option value="">Select department</option>';
            return;
        }

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "fetch_departments.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (xhr.status === 200) {
                departmentDropdown.innerHTML = xhr.responseText;
            }
        };

        xhr.send("directorate=" + encodeURIComponent(directorate));
    }

    function updateEmail() {
        let department = document.getElementById("department").value;
        let emailInput = document.getElementById("department_email");

        if (department === "") {
            emailInput.value = "";
            return;
        }

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "fetch_department_email.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (xhr.status === 200) {
                emailInput.value = xhr.responseText;
            }
        };

        xhr.send("department=" + encodeURIComponent(department));
    }
</script>