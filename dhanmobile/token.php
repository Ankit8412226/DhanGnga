<?php include "conn.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Naye Soch Naya Kadam ! Invoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 90%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {

  html, body {
    height:100%; 
    margin: 0 !important; 
    padding: 0 !important;
    overflow: hidden;
  }

}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--Author      : @arboshiki-->



<div id="invoice">
<?php
							         $ORDERID=$_GET['id'];
                                    $query = "SELECT * FROM transaction as t join nayesoch as n on n.tid=t.ORDERID WHERE ORDERID = '$ORDERID'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?><?php  $s= $row['STATUS'];?>
                                    <?php  $orde= $row['tid'];?>
                                    <?php  $data= $row['TXNDATE'];?>
                                    <?php  $total= $row['TXNAMOUNT'];?>
                                    <?php     $man= $row['pid'];?>
                                     <?php  $inamount= $row['amount'];?>
                                      <?php  $ser= $row['ser'];?>
                                    <?php     $subser= $row['subser'];?>
                                     <?php  $adv= $row['man'];?>
                                     <?php $res=$row['RESPMSG'];?>


<?php if($s=='TXN_FAILURE')
{
    echo $res;
    echo"<br><br>";
    echo '<a href="http://nayesochnayakadam.com/dhanmobile/">Go Back And Try Again!</a>';


}else{

?>

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        </div>
        <hr>
    </div>
    
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                   
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="#">
                            Naye Soch Naya Kadam
                            </a>
                        </h2>
                        <div>GST :   10CGAPS9590R1ZM</div>
                        <div>NAYATOLA TINPULYA (GANESHPUR)</div>
                        <div>P.O.- KHIRIBANDH, P.S.- JAGDISHPUR. DIST.- BHAGALPUR , BIHAR</div>
                        <div>(+91) 9234692692 , 7764026786</div>
                        <div>nayesochnayakadam@gmail.com</div>
                    </div>
                </div>
            </header>
            <?php
                                    $query = "SELECT * FROM paidmember where mmobile = '$man'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?php  echo $row['mname'];?></h2>
                        <div class="address"><?php  echo $row['mmobile'];?></div>
                        <div class="email"><a href="mailto:<?php  echo $row['email'];?>"><?php  echo $row['email'];?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE No.:  NSNK<?php echo $orde;?></h1>
                        <div class="date">Date of Invoice: <?php echo $data;?></div>
                    </div>
                </div>
              
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">Service</th>
                            <th class="text-right"></th>
                             <th class="text-right">PRICE</th>

                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3><?php echo $subser;?>
                            </h3><br><h3>(<?php echo $ser;?>)</h3><br>
                            <h3>By:-<?php echo $adv;?></h3>
                            </td>
                            <td class="qty"></td>
                             <td class="unit"><?php echo $inamount;?></td>

                            <td class="unit">₹<?php echo $a=$inamount;?></td>
                        </tr>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>₹<?php echo $inamount;?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Commission or  servic charge 11 %</td>
                            <td>₹<?php echo $ser= $inamount*11/100;?></td>
                        </tr>
                           <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GST On Commission or servic charge 18%</td>
                            <td>₹<?php echo $b=$ser*18/100;?></td>
                        </tr>
                        <tr><?php  $aaa=$a+$ser+$b;?><?php  $bbb=round($aaa);?>
                            <td colspan="2"></td>
                            <td colspan="2">Round Off</td>
                              <td>₹<?php echo number_format($aaa-$bbb,2);?></td>

                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>₹<?php echo $total;?></td>
                        </tr>
                    </tfoot>
                </table>
               
              
              <!--  <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>-->
            </main>
<center><button onclick="location.href='https://nayesochnayakadam.com/dhanmobile/'" type="button">
         Back</button></center><br><br>
         
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
                    
       <?php } ?>

        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<script type="text/javascript">
 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
</body>
</html>
