<script>
    // Dapatkan checkbox master dan semua checkbox baris
    const masterCheckbox = document.getElementById('checkbox-all-search');
    const rowCheckboxes = document.querySelectorAll('.data-checkbox');

    // Tambahkan event listener ke checkbox utama
    masterCheckbox.addEventListener('change', function () {
        // Perbarui status semua checkbox baris sesuai dengan master checkbox
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = masterCheckbox.checked;
        });
    });
</script>
