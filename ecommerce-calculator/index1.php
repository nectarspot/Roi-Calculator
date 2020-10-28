<!DOCTYPE html>
<html>
<head>
	<title>eCommerce Calculator</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
	.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}

.form-control {
    display: block;
    width: 59%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.result{
  background-color: #002e5b;
    border-radius: 20px;
    color: #ffffff;
    padding-right: 35px;
    text-align: center;
    padding-left: 30px;
    margin-right: 16px;
}
</style>
<body>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h2>eCommerce Conversion Rate</h2>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label class="label">Average Monthly Visitors</label>
                                <input type="text" class="form-control" id="month_visitor" value="24000" />
                            </div>
                            <div class="form-group">
                                <label class="label">Average Orders Per Month</label>
                                <input type="text" class="form-control" id="orders" value="300" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-group">
                            	<label class="label">Average Monthly Sales</label>
                                <input type="text" class="form-control" id="month_sales" value="80000" />
                            </div>
                            <div class="form-group">
                                <label class="label">Average Markup/Gross Profit</label>
                                <input type="text" class="form-control" id="profit" value="30" />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit" onClick="calculeteBy();">Calculate</button>
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


                <div><h2>Increase Your Sites Conversion Rate:</h2> </div>
    <table class="table table-bordered" >
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
        <td><span id = "visits">0</span></td>
        <td><span id = "c_rate">0</span>%</p></td>
        <td><span id = "order1">0</span></td>
        <td>$<span id = "avg_order">0</td>
        <td>$<span id = "sales_revenue">0</td>
        <td>N/A</td>
        <td>N/A</td>
      </tr>

       <tr>
        <td><span id = "visits1">0</span></td>
        <td><span id = "c_rate1">0</span>%</p></td>
        <td><span id = "order2">0</span></td>
        <td>$<span id = "avg_order1">0</td>
        <td>$<span id = "sales_revenue1">0</td>
        <td>$<span id = "sales_increase">0</td>
        <td>$<span id = "grass_profit">0</td>
      </tr>

      <tr>
        <td><span id = "visits2">0</span></td>
        <td><span id = "c_rate2">0</span>%</p></td>
        <td><span id = "order3">0</span></td>
        <td>$<span id = "avg_order2">0</td>
        <td>$<span id = "sales_revenue2">0</td>
        <td>$<span id = "sales_increase1">0</td>
        <td>$<span id = "grass_profit1">0</td>
      </tr>

      <tr>
        <td><span id = "visits3">0</span></td>
        <td><span id = "c_rate3">0</span>%</p></td>
        <td><span id = "order4">0</span></td>
        <td>$<span id = "avg_order3">0</td>
        <td>$<span id = "sales_revenue3">0</td>
        <td>$<span id = "sales_increase2">0</td>
        <td>$<span id = "grass_profit2">0</td>
      </tr>

     <!--  <tr>
        <td><span id = "visits4">0</span></td>
        <td><span id = "c_rate4">0</span>%</p></td>
        <td><span id = "order5">0</span></td>
        <td>$<span id = "avg_order4">0</td>
        <td>$<span id = "sales_revenue4">0</td>
        <td>$<span id = "sales_increase3">0</td>
        <td>$<span id = "grass_profit3">0</td>
      </tr> -->

      
    </tbody>
  </table>

  <div><h2>Increase Your Sites Traffic:</h2> </div>
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
        <td><span id = "visits5">0</span></td>
        <td><span id = "c_rate_traffic">0</span>%</p></td>
        <td><span id = "traffic_order">0</span></td>
        <td>$<span id = "avg_order_traffic">0</td>
        <td>$<span id = "sales_revenue_traffic">0</td>
        <td>N/A</td>
        <td>N/A</td>
      </tr>

       <tr>
        <td><span id = "visits6">0</span></td>
        <td><span id = "c_rate_traffic1">0</span>%</p></td>
        <td><span id = "traffic_order1">0</span></td>
        <td>$<span id = "avg_order_traffic1">0</td>
        <td>$<span id = "sales_revenue_traffic1">0</td>
        <td>$<span id = "sales_increase_traffic">0</td>
        <td>$<span id = "grass_profit_traffic">0</td>
      </tr>

      <tr>
        <td><span id = "visits7">0</span></td>
        <td><span id = "c_rate_traffic2">0</span>%</p></td>
        <td><span id = "traffic_order2">0</span></td>
        <td>$<span id = "avg_order_traffic2">0</td>
        <td>$<span id = "sales_revenue_traffic2">0</td>
        <td>$<span id = "sales_increase_traffic1">0</td>
        <td>$<span id = "grass_profit_traffic1">0</td>
      </tr>

      <tr>
        <td><span id = "visits8">0</span></td>
        <td><span id = "c_rate_traffic3">0</span>%</p></td>
        <td><span id = "traffic_order3">0</span></td>
        <td>$<span id = "avg_order_traffic3">0</td>
        <td>$<span id = "sales_revenue_traffic3">0</td>
        <td>$<span id = "sales_increase_traffic2">0</td>
        <td>$<span id = "grass_profit_traffic2">0</td>
      </tr>

      
    </tbody>
  </table>

  
            </div>
        </div>

        <script type="text/javascript">
    function calculeteBy() 
{ 
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits").innerHTML = Visits;
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits1").innerHTML = Visits;
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits2").innerHTML = Visits; 
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits3").innerHTML = Visits;
            // var Visits =   document.getElementById("month_visitor").value;
            // document.getElementById( "visits4").innerHTML = Visits;

            var Visits1 =   document.getElementById("month_visitor").value;
            document.getElementById( "visits5").innerHTML = Math.round(Visits1);
            var Visits2 =   document.getElementById("month_visitor").value;
            document.getElementById( "visits6").innerHTML = Math.round(Visits2*1.05);
            var Visits3 =   document.getElementById("month_visitor").value;
            document.getElementById( "visits7").innerHTML =Math.round(Visits3*1.1); 
            var Visits4 =   document.getElementById("month_visitor").value;
            document.getElementById( "visits8").innerHTML =Math.round(Visits3*1.25); 

      
     var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("result").innerHTML =Math.round( num1 / num2);

     var num3 = document.getElementById("orders").value;
     var num4 = document.getElementById("month_visitor").value;
document.getElementById("result1").innerHTML =  (num3 / num4*100).toFixed(2);

 var num5 = document.getElementById("result").innerHTML =Math.round( num1 / num2);
    var num6 = document.getElementById("profit").value;
document.getElementById("result2").innerHTML = Math.round( num5 * num6/100);

		var num3 = document.getElementById("orders").value;
     	var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate").innerHTML =  (num3 / num4*100).toFixed(2);
var c_rate1 = document.getElementById("c_rate1").innerHTML =  (num3 / num4*100 +0.2).toFixed(2);
var c_rate2 = document.getElementById("c_rate2").innerHTML =  (num3 / num4*100 +0.4).toFixed(2);
 var c_rate3 = document.getElementById("c_rate3").innerHTML =  (num3 / num4*100 +0.6).toFixed(2);
 // var c_rate4 = document.getElementById("c_rate4").innerHTML =  (num3 / num4*100 +0.8).toFixed(2);

 var num3 = document.getElementById("orders").value;
        var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate_traffic").innerHTML =  (num3 / num4*100).toFixed(2);
 var num3 = document.getElementById("orders").value;
        var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate_traffic1").innerHTML =  (num3 / num4*100).toFixed(2);
 var num3 = document.getElementById("orders").value;
        var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate_traffic2").innerHTML =  (num3 / num4*100).toFixed(2);
 var num3 = document.getElementById("orders").value;
        var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate_traffic3").innerHTML =  (num3 / num4*100).toFixed(2);

	 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order1").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order2").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order3").innerHTML =Math.round( num1 / num2);

 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order_traffic").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order_traffic1").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order_traffic2").innerHTML =Math.round( num1 / num2);
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order_traffic3").innerHTML =Math.round( num1 / num2);
 //  var num1 = document.getElementById("month_sales").value;
 //     var num2 = document.getElementById("orders").value;
 // document.getElementById("avg_order4").innerHTML =Math.round( num1 / num2);

var order = document.getElementById("order1").innerHTML =  parseInt(Math.round(Visits*((num3 / num4*100))/100));
var order1 = document.getElementById("order2").innerHTML = parseInt(Math.round(Visits*c_rate1)/100);
var order2 = document.getElementById("order3").innerHTML =  parseInt(Math.round(Visits*c_rate2)/100);
var order3 = document.getElementById("order4").innerHTML =  parseInt(Math.round(Visits*c_rate3)/100);
// var order4 = document.getElementById("order5").innerHTML =  parseInt((Visits*c_rate4)/100).toFixed(0);

var traffic_order = document.getElementById("traffic_order").innerHTML =  parseInt(Math.round(Visits1*((num3 / num4*100))/100));
var traffic_order1 = document.getElementById("traffic_order1").innerHTML =  parseInt(Math.round(Visits2*1.05)*((num3 / num4*100))/100);
var traffic_order2 = document.getElementById("traffic_order2").innerHTML =  parseInt(Math.round(Visits3*1.1)*((num3 / num4*100))/100);
var traffic_order3 = document.getElementById("traffic_order3").innerHTML =  parseInt(Math.round(Visits4*1.25)*((num3 / num4*100))/100);


var sales_revenue  = document.getElementById("sales_revenue").innerHTML =  order*Math.round( num1 / num2)-100;
var sales_revenue1  = document.getElementById("sales_revenue1").innerHTML =  order1*Math.round( num1 / num2)-116;
var sales_revenue2  = document.getElementById("sales_revenue2").innerHTML =  order2*Math.round( num1 / num2)-132;
var sales_revenue3  = document.getElementById("sales_revenue3").innerHTML =  order3*Math.round( num1 / num2)-148;
// var sales_revenue4  = document.getElementById("sales_revenue4").innerHTML =  order4*Math.round( num1 / num2)-164;


var sales_revenue_traffic  = document.getElementById("sales_revenue_traffic").innerHTML =  traffic_order*Math.round( num1 / num2)-100;
var sales_revenue_traffic1  = document.getElementById("sales_revenue_traffic1").innerHTML =  traffic_order1*Math.round( num1 / num2)-105;
var sales_revenue_traffic2  = document.getElementById("sales_revenue_traffic2").innerHTML =  traffic_order2*Math.round( num1 / num2)-110;
var sales_revenue_traffic3  = document.getElementById("sales_revenue_traffic3").innerHTML =  traffic_order3*Math.round( num1 / num2)-125;

var sales_increase  = document.getElementById("sales_increase").innerHTML =  sales_revenue1-sales_revenue;
var sales_increase1  = document.getElementById("sales_increase1").innerHTML =  sales_revenue2-sales_revenue;
 var sales_increase2  = document.getElementById("sales_increase2").innerHTML =  sales_revenue3-sales_revenue;
 // var sales_increase3  = document.getElementById("sales_increase3").innerHTML =  sales_revenue4-sales_revenue;

 var sales_increase_traffic  = document.getElementById("sales_increase_traffic").innerHTML =  sales_revenue_traffic1-sales_revenue_traffic;
 var sales_increase_traffic1  = document.getElementById("sales_increase_traffic1").innerHTML =  sales_revenue_traffic2-sales_revenue_traffic;
 var sales_increase_traffic2  = document.getElementById("sales_increase_traffic2").innerHTML =  sales_revenue_traffic3-sales_revenue_traffic;



var num7 = document.getElementById("profit").value;
var grass_profit  = document.getElementById("grass_profit").innerHTML = Math.round((sales_increase*num7)/100);
var num8 = document.getElementById("profit").value;
var grass_profit1  = document.getElementById("grass_profit1").innerHTML = Math.round((sales_increase1*num8)/100);
var num9 = document.getElementById("profit").value;
var grass_profit2  = document.getElementById("grass_profit2").innerHTML = Math.round((sales_increase2*num9)/100);


 var num10 = document.getElementById("profit").value;
 var grass_profit_traffic = document.getElementById("grass_profit_traffic").innerHTML = Math.round((sales_increase_traffic*num10)/100);
 var num11 = document.getElementById("profit").value;
 var grass_profit_traffic1 = document.getElementById("grass_profit_traffic1").innerHTML = Math.round((sales_increase_traffic1*num11)/100);
 var num12 = document.getElementById("profit").value;
 var grass_profit_traffic2 = document.getElementById("grass_profit_traffic2").innerHTML = Math.round((sales_increase_traffic2*num12)/100);


   
}
</script>
</body>
</html>