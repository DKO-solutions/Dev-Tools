<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            language: {
                search: "",
                searchPlaceholder: "Search..."
            },
            columnDefs: [
                // Center align the headers
                {
                    className: "dt-head-center",
                    targets: [0, 1, 2, 3]
                },
            ],
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    }
                },
                {
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    }
                },
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    }
                },

            ]
        });
    });
</script>
</body>

</html>