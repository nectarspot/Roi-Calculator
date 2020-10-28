<!DOCTYPE html>
<html>
<head>
	<title>eCommerce Calculator</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 -->
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
    width: 32%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}

.form-control {
    display: block;
    width: 70%;
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
#div2 {
  display: none;
}
</style>
<body>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h2>eCommerce Conversion Rate</h2>
                </div>

                <div class="form-content">
                    <form  method="post" name="myform" onkeyup="calculate()" >
                   
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group">
                            	<label class="label">Average Monthly Visitors</label>
                                <input type="text" class="form-control mobile_valid" id="month_visitor" name="month_visitor" placeholder="Enter Monthly Visitors" required />
                            </div>
                            
                            <div class="form-group">
                                <label class="label">Average Monthly Sales</label>
                                <input type="text" class="form-control mobile_valid" id="month_sales" name="month_sales" placeholder="Enter Monthly Sales" required/>
                            </div>
                            </div>

                            <div class="col-md-6">
                            
                            <div class="form-group">
                                <label class="label">Average Orders Per Month</label>
                                <input type="text" class="form-control mobile_valid" id="orders" name="orders" placeholder="Enter Orders per month" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Average Markup/Gross Profit</label>
                                <input type="text" class="form-control mobile_valid" id="profit" name="profit" placeholder="Enter Gross Profit" required/>
                            </div>
                        </div> 
                        </div>
                        </div>
                       
                       
                    
 
<div class="col-md-4">
   
                <div class="row">
                <div class="col-sm-12">
                <p class="label result" >Your Average Order Size<br>
                 $<span  id = "result">0</span> </p>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-12">
                <p class="label result" >Your Conversion Rate<br>
                     <span  id = "result1">0</span>%</p>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-12">
                <p class="label result" >Your Gross Profit pre Order<br> 
                    $<span  id = "result2">0</span></p>
                </div>
                </div>

            
            
  </div>

                         <button type="button" class="btnSubmit" onClick="calculeteBy();">Calculate Total Operation Cost</button>
                    
                
</div>
 <div id="div1"></div>



            </form>  
                
           
                
               

                     <div id="div2">
                <div><h2>Increase Your Sites Conversion Rate:</h2> </div>
    <table class="table table-bordered" >
    <thead>
      <tr>
        <th>Visits</th>
        <th>Conversion Rate</th>
        <th>Orders</th>
        <th>Avg Order</th>
        <th>Sales Revenue</th>
        <th>Sales Increase</th>
        <th>Gross Profit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span id = "visits">0</span></td>
        <td><span id = "c_rate">0</span>%</p></td>
        <td><span id = "order1">0</span></td>
        <td>$<span id = "avg_order">0</span></td>
        <td>$<span id = "sales_revenue">0</span></td>
        <td>N/A</td>
        <td>N/A</td>
      </tr>

       <tr>
        <td><span id = "visits1">0</span></td>
        <td><span id = "c_rate1">0</span>%</p></td>
        <td><span id = "order2">0</span></td>
        <td>$<span id = "avg_order1">0</span></td>
        <td>$<span id = "sales_revenue1">0</span></td>
        <td>$<span id = "sales_increase">0</span></td>
        <td>$<span id = "grass_profit">0</span></td>
      </tr>

      <tr>
        <td><span id = "visits2">0</span></td>
        <td><span id = "c_rate2">0</span>%</p></td>
        <td><span id = "order3">0</span></td>
        <td>$<span id = "avg_order2">0</span></td>
        <td>$<span id = "sales_revenue2">0</span></td>
        <td>$<span id = "sales_increase1">0</span></td>
        <td>$<span id = "grass_profit1">0</span></td>
      </tr>

      <tr>
        <td><span id = "visits3">0</span></td>
        <td><span id = "c_rate3">0</span>%</p></td>
        <td><span id = "order4">0</span></td>
        <td>$<span id = "avg_order3">0</span></td>
        <td>$<span id = "sales_revenue3">0</span></td>
        <td>$<span id = "sales_increase2">0</span></td>
        <td>$<span id = "grass_profit2">0</span></td>
      </tr>

     

      
    </tbody>
  </table>
</div>
</div>
</div>



        <script type="text/javascript">

function calculate()
{

var month_visitor = document.getElementById('month_visitor');
var orders = document.getElementById('orders');
var month_sales = document.getElementById('month_sales');
var profit = document.getElementById('profit');

month_sales.addEventListener("input", sum);
orders.addEventListener("input", sum);
month_visitor.addEventListener("input", sum);
profit.addEventListener("input", sum);

function sum() {
  
 var ms = parseFloat(month_sales.value || 0 );
var or = parseFloat(orders.value || 0 );

var or1 = parseFloat(orders.value || 0);
var mv = parseFloat(month_visitor.value || 0);

var pro = parseInt(profit.value || 0,0)+0;

  
var ordersize =(Math.round(ms/or) || 0);
var conversionRate =((or1 / mv * 100).toFixed(2) ||0);
var Profit = (Math.round((ms/or)*pro/100)||0 );


result.innerHTML =  ordersize;
result1.innerHTML =  conversionRate;
result2.innerHTML = Profit;

}


}

    function calculeteBy() 
{ 

    if (document.getElementById('div1')) {

                if (document.getElementById('div1').style.display == 'none') {
                    document.getElementById('div1').style.display = 'block';
                    document.getElementById('div1').style.display = 'none';
                }
                else {
                    document.getElementById('div1').style.display = 'none';
                    document.getElementById('div2').style.display = 'block';
                }
            }



            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits").innerHTML = Visits || 0;
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits1").innerHTML = Visits || 0;
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits2").innerHTML = Visits || 0; 
            var Visits =   document.getElementById("month_visitor").value;
            document.getElementById( "visits3").innerHTML = Visits || 0;
            

		var num3 = document.getElementById("orders").value;
     	var num4 = document.getElementById("month_visitor").value;
document.getElementById("c_rate").innerHTML =  (num3 / num4*100) || 0 .toFixed(2) ;
var c_rate1 = document.getElementById("c_rate1").innerHTML =  (num3 / num4*100 +0.2) || 0 .toFixed(2);
var c_rate2 = document.getElementById("c_rate2").innerHTML =  (num3 / num4*100 +0.4) || 0 .toFixed(2);
 var c_rate3 = document.getElementById("c_rate3").innerHTML =  (num3 / num4*100 +0.6) || 0 .toFixed(2);
 

	 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;

 document.getElementById("avg_order").innerHTML =Math.round( num1 / num2) || 0;
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order1").innerHTML =Math.round( num1 / num2) || 0;
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order2").innerHTML =Math.round( num1 / num2) || 0;
 var num1 = document.getElementById("month_sales").value;
     var num2 = document.getElementById("orders").value;
 document.getElementById("avg_order3").innerHTML =Math.round( num1 / num2) || 0;
 

 

var order = document.getElementById("order1").innerHTML =  parseInt(Math.round(Visits*((num3 / num4*100))/100)) || 0;
var order1 = document.getElementById("order2").innerHTML = parseInt(Math.round(Visits*c_rate1)/100) || 0;
var order2 = document.getElementById("order3").innerHTML =  parseInt(Math.round(Visits*c_rate2)/100) || 0;
var order3 = document.getElementById("order4").innerHTML =  parseInt(Math.round(Visits*c_rate3)/100) || 0;



var sales_revenue  = document.getElementById("sales_revenue").innerHTML =  order*Math.round( num1 / num2)-100 || 0;
var sales_revenue1  = document.getElementById("sales_revenue1").innerHTML =  order1*Math.round( num1 / num2)-116 || 0;
var sales_revenue2  = document.getElementById("sales_revenue2").innerHTML =  order2*Math.round( num1 / num2)-132 || 0;
var sales_revenue3  = document.getElementById("sales_revenue3").innerHTML =  order3*Math.round( num1 / num2)-148 ||0;

var sales_increase  = document.getElementById("sales_increase").innerHTML =  sales_revenue1-sales_revenue;
var sales_increase1  = document.getElementById("sales_increase1").innerHTML =  sales_revenue2-sales_revenue;
 var sales_increase2  = document.getElementById("sales_increase2").innerHTML =  sales_revenue3-sales_revenue;




var num7 = document.getElementById("profit").value;
var grass_profit  = document.getElementById("grass_profit").innerHTML = Math.round((sales_increase*num7)/100);
var num8 = document.getElementById("profit").value;
var grass_profit1  = document.getElementById("grass_profit1").innerHTML = Math.round((sales_increase1*num8)/100);
var num9 = document.getElementById("profit").value;
var grass_profit2  = document.getElementById("grass_profit2").innerHTML = Math.round((sales_increase2*num9)/100);


 

 
   
}

</script>
<script type="text/javascript">
     $(document).ready(function() {
         $('.mobile_valid').on('keypress', function(e) {
 var $this = $(this);
 var regex = new RegExp("^[0-9\b]+$");
 var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
  if ($this.val().length > 6) {
    e.preventDefault();
    return false;
  }
  if (e.charCode < 49 && e.charCode > 45) {
      if ($this.val().length == 0) {
        e.preventDefault();
        return false;
      } else {
        return true;
      }
  }
  if (regex.test(str)) {
    return true;
  }
  e.preventDefault();
  return false;
  });
    
 });
</script>
</body>
</html>