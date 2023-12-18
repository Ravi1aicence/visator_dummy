<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Remix Icon Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <title>Admin Dashboard</title>

  <!-- Custom CSS File -->
  <link rel="stylesheet" href="./css/style2.css">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>

<?php 
include("sidebar.php");
?>

<!-- testteing varifieed -->







  <!-- Enquery Content Started Here -->
  <div id="main" class="main2">
    <div class="main-div-section1">

      <div class="row inquiry-row">
        <div class="col-md-12">
          <div class="portlet light bordered">
            <div class="portlet-body">
              <table id="tbl_data" class="table table-bordered inuiry-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Created On</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    include 'dbconn.php';
                    $conn = new mysqli($servername, $username, $password, $db);
                    $i = 1;
                    $q = "select  * from contact_info";


                    $res_tbl = mysqli_query($conn, $q);


                    while ($fetch = $res_tbl->fetch_array()) {

                      ?>
                      <tr>

                        <td>
                          <?php echo $fetch['name']; ?>
                        </td>
                        <td>
                          <?php echo $fetch['email'] ?>
                        </td>
                        <td>
                          <?php echo $fetch['contact_no'] ?>
                        </td>
                        <td>
                          <?php echo $fetch['create_date'] ?>
                        </td>
                        <td class="enquery-modal-open"
                          onclick="openname('<?php echo $fetch['name']; ?>','<?php echo $fetch['message']; ?>' )">View
                          Message
                        </td>

                      </tr>
                <?php
                $i++;
                }
                ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>



  <!-- Form Preload Modal Section Started Here -->
  <div class="popup-modal-content hidden" id="show_details<?php echo $fetch['name']; ?>">

    <i class="ri-close-line fa-xmark"></i>

    <div class="container">

      <div class="row">


        <div class="col-12">
          <div class="form-input-div">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-input" id="modal-name" placeholder="Name">
          </div>
        </div>
        <div class="col-12">
          <div class="form-textarea-div">
            <label for="" class="form-label">Description</label>
            <input type="text" id="modal-message" class="form-input form-textarea" placeholder=""></input>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="modal-container hidden">
  </div>
  <!-- Form Preload Modal Section Ended Here -->









  <!-- Custom JS Link -->
  <script src="./js/script.js"></script>
  <script src="./js/modal-form.js"></script>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

  <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>




  <script src="vendor1/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="vendor1/DataTables/jquery.datatables.min.css">
  <script src="vendor1/DataTables/jquery.dataTables.min.js" type="text/javascript"></script>

  <link rel="stylesheet" href="vendor1/DataTables/buttons.datatables.min.css">
  <script src="vendor1/DataTables/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="vendor1/DataTables/jszip.min.js" type="text/javascript"></script>
  <script src="vendor1/DataTables/pdfmake.min.js" type="text/javascript"></script>
  <script src="vendor1/DataTables/vfs_fonts.js" type="text/javascript"></script>
  <script src="vendor1/DataTables/buttons.html5.min.js" type="text/javascript"></script>



  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })




    $(document).ready(function () {
      var table = $('#tbl_data').DataTable({
        columnDefs: [{
          "defaultContent": "-",
          "target": "_all"
        }],
        "paging": false,
        "bDestroy": true,
        dom: 'Bfrtip',
        buttons: [{
          text: 'Export Options:'
        },
          //'copyHtml5',
          //'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ],
        // {extend: 'copy', attr: {id: 'allan'}}, 'csv', 'excel', 'pdf'

      });

    });


    function openname(id, message) {
      var name = id;
      var message = message;
      document.getElementById('modal-name').value = name;
      document.getElementById('modal-message').value = message;
    }
  </script>


</body>

</html>