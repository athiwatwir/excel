
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<?= $this->Html->script('/datatable/pdf/pdfmake.min.js'); ?>
<?= $this->Html->script('/datatable/pdf/vfs_fonts.js'); ?>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable({
            "lengthChange": false,
            "lengthMenu": [[20,50, -1], [20,50, "All"]],
            "ordering": false,
            responsive: true,
            columnDefs: [
                {responsivePriority: 1, targets: 0},
                {responsivePriority: 2, targets: -1}
            ]
        });
       

         var table = $('#datatable-buttons').DataTable({
            dom: 'Bfrtip',
            lengthChange: false,
            buttons: [
                {
                extend: 'excelHtml5',
                
                 header: true
            }
            ],
            "ordering": false,
            responsive: true,
            "searching": false,
            "pageLength": 50
        });

        table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });

</script>
