<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Bill</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
@page {
    size: A4;
    margin: 20mm;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f9f9f9;
    font-size:12px;
}

.invoice {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px; /* Adjust as necessary */
}

.logo {
    height: 50px; /* Adjust the height as necessary */
    margin-right: 20px; /* Adjust the space between the logo and the title as necessary */
}

.invoice-title {
    flex-grow: 1;
    text-align: center;    
    margin: 0; /* Remove default margin */
}

.top-right-text {
    margin: 0;
    text-align: right; /* Ensure the text is aligned to the right */
}

h1 {
    text-align: center;
}

.header-section, .footer-section {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.address-section {
    border: 1px solid #000;
    padding: 10px;
    margin-bottom: 20px;
}

.left, .right {
    width: 22%;
}

.buyer-section {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 5px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.text-right {
    text-align: right;
}

.tax th, .tax td {
    text-align: center;
}

.computer-generated {
    text-align: center;
    margin-top: 6px;    
}

.no-border td {
    border-top: none !important;
    border-bottom: none !important;
}

.no_border td {
    border-bottom: none !important;
}

.footer {
    position: fixed;
    bottom: 20mm; /* Adjust according to your page margin */
    width: 100%;
    text-align: center;
    display: none;
}

.continue {
    display: none;
    text-align: center;
    padding-top: 10px;
}
.mitechdetails{
    
    margin: 10px 0 10px;
}
p {
    margin: 0 0 -4px !important;
}

@media print {
    .invoice {
        width: 100%;
        max-width: 100%;
        page-break-after: always;
    }
    
    .continue {
        display: block;
    }

    .footer {
        display: block;
    }

    .page-break {
        page-break-before: always;
    }
}




    </style>
</head>
<body>

<?php 
 $adminModel = new \App\Models\Admin_model();
 $wherecond = [];


 if(!empty($billing_data)){ 

 $wherecond = [
    'tbl_bill_items.is_deleted' => 'N',
    'tbl_bill_items.bill_id' =>$billing_data->id
];

 }


 

$item_data = $adminModel->getalldatawithwhere('tbl_bill_items', $wherecond);



// echo'<pre>';print_r($item_data);die;





?>
    <div class="invoice">
        <div class="header">
        <img src="<?=base_url();?>public/frontend/assets/images/logo.png" alt="Logo" class="logo"> 
            <h1 class="invoice-title">Invoice</h1>
            <p class="top-right-text">(ORIGINAL FOR RECIPIENT)</p>
        </div>
        <table class="address-section " style="margin-bottom: 0px !important;">
        <tr class="row">
            
                <td class="col-md-6"  style="padding: 5px 11px !important; ;
                    ">
                        <p> <b>One Place</b><br>
                           97/25 , PCNT,<br>
                              Nigdi, Pune 411-044
                              <br><b>Phone No.:</b> 7057778221 <br>
                              <b>Email ID :</b> deokar.rahul@gmail.com 

                        <p>
                </td>
                <td class="col-md-6" style="padding-right: 0px !important;
                        padding-left: 0px !important; padding:0px !important;
                    ">
                    <table style="margin-bottom: 0px !important;">
                        <tr >
                            <td   style="padding: 5px !important; border:none;"><b>Invoice No.</b>
                                <br>
               
               
                                <?php if(!empty($billing_data)){ echo $billing_data->id; }?>

                            </td>
                          
                        </tr>
                        <tr >
                           
                            <td  style="padding: 5px !important">
                                <b>Dated</b><br>
                                <?php if(!empty($billing_data)){ echo $billing_data->created_on; }?>
                            </td>
                        </tr>

                      
                      
                    </table>
                </td>
        </tr>
        <tr class="row">
            <td class="col-md-6"  style="padding-right: 15px !important;
                        padding-left: 15px !important;   vertical-align: top;
            ">
                <p> <p><b>To </b><br>
                            <!-- <b></b><br> -->
               One Place<br>
                            GST No.<b>ABC123bjc</b><br>
               Pune, Maharashtra, 41102<br>
                           
                <!-- State Name : Maharashtra, Code : 27<br> -->
                
               
            </p>
            </td>
                <td class="col-md-6" style="padding-right: 0px !important;
                        padding-left: 0px !important; padding:0px !important;
                    ">
                    <table style="margin-bottom: 0px !important;">
              
                        
                        <tr >
                            <td style="padding: 5px !important" ><b>Vendor Code : </b><br>
                          28918291
                            </td>
                  
                             
                        </tr>

                        <tr >
                           
                             <td  style="padding: 5px !important" > 
                           
                            <b>Kind Attention : </b><br> Plz Pay
                           
                          

                            </td> 
                             
                        </tr>


                       

                    </table>
                </td>
            </tr>

        </table>

        <table  style="margin-bottom: 0px !important;">
            <thead>
                <tr>
                    <th  class="text-center">Sr. No</th>
                    <th  class="text-center">Product Name</th>
   
                  
                    <th  class="text-center">Quantity</th>
                    <th  class="text-center">Rate</th>
                 
                    <th  class="text-center">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; if(!empty($item_data)) { 
                    foreach($item_data as $data){
                    ?>
            <tr>
                    <td><?=$i++; ?></td>
                    <td><?=$data->product_name; ?></td>
               
                    <td> <?=$data->quantity; ?></td>
                    <td>₹ <?=$data->unit_price; ?></td>
                    <td>₹ <?=$data->total; ?></td>
                </tr>
      
                <?php } }?>
             
                <tr class="no-border" style="vertical-align: baseline; height: 140px;">
                    <td></td>
                    <td  class="text-right"><b></b></td>
                 
                   
                    <td></td>
                    <td></td>
                    <td><b></b></td>
                </tr>
                <tr>
                    <td></td>
              
                    <td></td>
                  
                    <td colspan=2 class="text-right"><strong>Sub Total</strong></td>

                    <td class="text-right"><b><?php if(!empty($billing_data)){ echo $billing_data->total_amount; }?></b></td>
                </tr>

                <tr>
                    <td></td>
           
                    <td></td>
                    
           
                    <td  colspan=2 class="text-right"><strong>SGST</strong></td>

                    <td class="text-right">
                    <?php if(!empty($billing_data)){ echo $billing_data->gst_amount; }?>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td></td>
           
                    <td></td>
                    
           
                    <td  colspan=2 class="text-right"><strong>CGST</strong></td>

                    <td class="text-right">
                    <?php if(!empty($billing_data)){ echo $billing_data->cgst_amount; }?>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td></td>
              
                    <td></td>
                    <td colspan=2 class="text-right"><strong>Total</strong></td>

                  <td style="text-align: right;"><b> <?php if(!empty($billing_data)){ echo $billing_data->final_total; }?></b></td>
                </tr>
                <tr>
                <?php
                    $amountInWords = '';
                    if (!empty($billing_data)) {
                        $finalAmount = $billing_data->final_total;
                        $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                        $amountInWords = ucfirst($formatter->format($finalAmount)) . " Rupees Only";
                    }
                    ?>
                    <td colspan=5>
                        <p>Amount (in words): <span style="float: right;">E.& O.E</span> <br>
                            <strong>
                                <?= $amountInWords; ?>
                            </strong>
                        </p>
                    </td>

                </tr>
            </tbody>
        </table>

        <table style="margin-bottom: 0px !important;">
   
     

    <tbody>
   
                <tr>
                    <td colspan="5">
                        <p class="mitechdetails">GST No.: <b>27571103949C</b></p>
                        <p class="mitechdetails">PAN No. : <b>AMGPP0554J</b></p>
                        <b>Online Payment Details</b> <br>
                        <b>Bank & Branch Name:</b> Kotak Mahindra Bank Ltd.<br>
                        <b>Acc. Name: </b> One Place<br>
                        <b>Account No.: </b> 1012075826<br>
                        <b>IFSC Code: </b> KKBK0001757<br>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="vertical-align: top;">
                        <div class="text-right">
                            <strong class="d-block pr-5">One Place</strong><br>
                            <div class="d-flex justify-content-end pr-5">
                                <img src="<?=base_url();?>public/assests/images/demoStamp1.png" alt="Stamp" class="img-fluid" style="width: 10%; margin-right: 10px;">
                                <img src="<?=base_url();?>public/assests/images/sign.jpeg" alt="Signature" class="img-fluid" style="width: 10%;">
                            </div>
                            <p class="pr-5">
                                <span class="d-block pr-4">Ram Sharma</span><br>
                                <span class="d-block pr-5">Authorised Signatory</span>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>



            
            </table>


      

            <p class="computer-generated">This is a Computer Generated Invoice</p>
    </div>
</body>
</html>