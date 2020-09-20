<?php
  include 'header.php';
  include 'sql.php';
?>

<html>
    <head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/handsontable/0.35.1/handsontable.min.css" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

      <title>Time Sheet</title>
    </head>
    <body>
        <div class="wrapper">
          <h2>Time Sheet</h2>
          <p>Date: <input type="text" id="datepicker"></p>
        </div>
          <div id="employee"></div>
    </body>

    <!--table-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handsontable/0.35.1/handsontable.min.js"></script>
    <!--datepicker-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
      var date_picked = 0;
      var data =  [
        ['', 'Tesla', 'Nissan', 'Toyota', 'Honda', 'Mazda', 'Ford'],
        ['2017', 10, 11, 12, 13, 15, 16],
        ['2018', 10, 11, 12, 13, 15, 16],
        ['2019', 10, 11, 12, 13, 15, 16],
        ['2020', 10, 11, 12, 13, 15, 16],
        [date_picked, 10, 11, 12, 13, 15, 16]
        ]
        var container = document.getElementById('employee');
        var hot = new Handsontable(container, {
          data: data,
          colHeaders: false,
          columnSorting: true,
          sortIndicator: true
        });
        $(function() {
          $( "#datepicker" ).datepicker();

//          $( "#employee" ).load(location.href + " #employee" );

        });
        //use to update date selector
        const input = document.querySelector('input');
        const datepicker = document.getElementById('datepicker');
        datepicker.addEventListener('input',updateValue);
        function updateValue(e) {
          log.textContent = e.target.value;
        }
        //----------
    </script>
</html>
