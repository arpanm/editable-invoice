<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">Equilibrium
Haldibati-Samir Bhawan , 144, R.P.M Road, 
Uttarpara, Hooghly, West Bengal, Pin:712258</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/equilibrium_small.jpg" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <table id="meta">
                <tr>
                    <td colspan="1" class="meta-head">Name</td>
                    <td colspan="4"><textarea style="width:300px">Amit Das</textarea></td>
                    <td colspace="1" class="meta-head">Phone</td>
                    <td colspan="2"><textarea>9999999999</textarea></td>
                    <td colspan="1" class="meta-head">Age</td>
                    <td colspan="1"><textarea>29Y</textarea></td>
                </tr>
                <tr>
                    <td colspan="1" class="meta-head">Referred by</td>
                    <td colspan="3"><textarea>Dr Rahuldeb Chatterjee</textarea></td>
                    <td colspan="1" class="meta-head">Date</td>
                    <td colspan="1"><textarea id="date">April 16, 2016</textarea></td>
                    <td colspan="1" class="meta-head">Invoice #</td>
                    <td colspan="1" ><textarea>000123</textarea></td>
                    <td colspan="1" class="meta-head">Sex</td>
                    <td colspan="1"><textarea>M</textarea></td>
                </tr>
            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>PTA</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Diagnostic Test</textarea></td>
		      <td><textarea class="cost">INR 500.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">INR 500.00</span></td>
		  </tr>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Discount</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>10%</textarea></td>
		      <td><textarea class="cost">INR -50.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">INR -50.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">INR 450.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">INR 0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">INR 450.00</div></td>
		  </tr>
		
		</table>
	</div>
	<div id="hiderow" style="text-align: center;">
		<input type="button" value="Print" id="printbtn" onclick="window.print()" />
	</div>
</body>

</html>
