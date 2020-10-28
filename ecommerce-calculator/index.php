<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>eCommerace Calculator</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">eCommerace Conversion Rate</h2>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Average Monthly Visitors</label>
                                    <input class="input--style-4" type="text" id="month_visitor" value="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Average Monthly Sales</label>
                                    <input class="input--style-4" type="text" id="month_sales" >
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Average Orders Per Month</label>
                                    <input class="input--style-4" type="text" id="orders">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Average Markup/Gross Profit</label>
                                    <input class="input--style-4" type="text" id="profit" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="button" onClick="calculeteBy()"  style="margin-left: 170px;">Calculete</button>
                            <!-- <input type="button"  onClick="calculeteBy()" Value="Calculate" /> -->

                        </div>
                    
                </div>
            <div class="row">
                <div class="col-sm-3">
                <p class="label result" >Your Average Order Size<br>$ 
                <span id = "result">0</span></p>
                </div>

                <div class="col-sm-4">
                <p class="label result" >Your Conversion Rate<br>
                <span id = "result1">0</span>%</p>
                </div>

                <div class="col-sm-5">
                <p class="label result" >Your Gross Profit pre Order<br> $
                <span id = "result2">0</span></p>
                </div>
                </div>

<div><h2>Incerase Your Sites Conversion Rate</h2> </div>
    <table class="table table-bordered" style="padding-right: 20px;">
    <thead>
      <tr>
        <th>Visits</th>
        <th>Conversion Rate</th>
        <th>Orders</th>
        <th>Avg Order</th>
        <th>Sales Revenue</th>
        <th>Sales Incerase</th>
        <th>Grass Profit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>24000</td>
        <td>1.25</td>
        <td>300</td>
        <td>267</td>
        <td>80000</td>
        <td>N/A</td>
        <td>N/A</td>
      </tr>
      
    </tbody>
  </table>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function calculeteBy() 
{ 
     var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;

       

 document.getElementById("result").innerHTML =Math.round( num1 / num2);

     var num3 = document.getElementById("orders").value;
     var num4 = document.getElementById("month_visitor").value;
document.getElementById("result1").innerHTML =  num3 / num4*100;

    var num5 = document.getElementById("result").innerHTML =Math.round( num1 / num2);
    var num6 = document.getElementById("profit").value;
document.getElementById("result2").innerHTML = Math.round( num5 * num6/100);
}
</script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->