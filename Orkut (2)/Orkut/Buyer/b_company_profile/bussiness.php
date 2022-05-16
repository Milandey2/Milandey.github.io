<?php include 'header.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile </title>
    <style>
        label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }
    </style>
</head>
<body style="background-color: #F7D5E6;">




    <div class="container">
        <p >* Indicates a required field</p>

        <h3 style="font-weight: 400;"> Bussiness Information</h3>

        <hr>    

        <center>
            <form action="bussiness_db.php" method="post">
            <label style="color: #CE74A3; width: 160px;">Year Founded: </label>
            <input type="text" name="year" style="padding: 2px; width: 250px; border: 3px solid #CE74A3;"><br>

            <label style="color: #CE74A3; width: 162px;">Number of Employees: </label>
            <input type="text" name="employ" style="padding: 2px; width: 250px; border: 3px solid #CE74A3;"><br>

            <label style="color: #CE74A3; width: 160px;"><b>Annual Revenue: </b></label>

            <select name="revenue" id="" style=" width: 150px; padding: 2px; width: 250px; border: 3px solid #CE74A3;">
                <option value="" ></option>
            </select><br>


            <label style="color: #CE74A3; width: 162px;">Number of Employees: </label>
            <input type="text" name="employ2" style="padding: 2px; width: 250px; border: 3px solid #CE74A3;"><br>
        </center>


        <h3 style="font-weight: 400;"> Financial Information</h3>
        <hr>

        <center>
        <label style="color: #CE74A3; width: 160px;"><b>Supplier Legal Form: </b></label>

        <select name="legal" id="" style=" width: 150px; padding: 2px; width: 250px; border: 3px solid #CE74A3;">
            <option value="" ></option>
        </select><br>


        <label style="color: #CE74A3; width: 180px;">D-N-U-S Number &#174;: </label>
            <input type="text" name="dnus" style=" width: 50px; padding: 2px; border: 3px solid #CE74A3;"> - <input type="text" style=" width: 50px; border: 3px solid #CE74A3;"> - <input type="text" style=" width: 50px; border: 3px solid #CE74A3;"><br>


            <label style="color: #CE74A3; width: 200px;">Global Location Number : </label>
            <input type="text" name="global" style=" width: 150px; padding: 2px; width: 250px; border: 3px solid #CE74A3;">
        
        </center>


        <h3 style="font-weight: 400;"> Tax Information</h3>
<hr>

<center>

<label style="color: #CE74A3; width: 160px;"><b>Tax Classification: </b></label>

<select name="classification" id="" style=" width: 150px; border: 3px solid #CE74A3;">
    <option value="" ></option>
</select><br>   

<label style="color: #CE74A3; width: 160px;"><b>Taxation Type: </b></label>

<select name="type" id="" style=" width: 150px; border: 3px solid #CE74A3;">
    <option value="" ></option>
</select><br>

<label style="color: #CE74A3; width: 160px;">Tax ID: </label>
            <input type="text" name="taxid" style=" width: 150px; border: 3px solid #CE74A3;"><br>

            <label style="color: #CE74A3; width: 160px;"> State Tax ID: </label>
            <input type="text" name="stateid" style=" width: 150px; border: 3px solid #CE74A3;"><br>

            <label style="color: #CE74A3; width: 160px;">Regional Tax ID: </label>
            <input type="text" name="regionalid" style=" width: 150px; border: 3px solid #CE74A3;"><br>


            <label style="color: #CE74A3; width: 160px;">VAT ID: </label>
            <input type="text" name="vatid" style=" width: 150px; border: 3px solid #CE74A3;"><br>

            <input type="checkbox"> VAT Registered <br>


            <label style="color: #CE74A3; width: 200px;">VAT Registration Document: </label>
            <input type="file" name="registration" style=" width: 150px; border: 3px solid #CE74A3;"><br>


            <label style="color: #CE74A3; width: 180px;">Tax clearance expiry date: </label>
            <input type="date" name="date" style=" width: 150px; border: 3px solid #CE74A3;">
</center>   

<h3 style="font-weight: 400;"> Shareholders</h3>

        <div style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col-lg-3">
                  <input type="checkbox" name="" id="">
                </div>

                <div class="col-lg-3">
                    <p>Name</p>
                </div>

                <div class="col-lg-3">
                    <p>% of shares</p>
                </div>

                <div class="col-lg-3">
                    <p>Type</p>
                </div>
            </div>

        </div>

        <br>

        <div style="color: #EBEBEB;">
        
                

                
                 <button class="btn btn-primary" >Edit</button>

                    <button class="btn btn-primary" >Delete</button>

                    <button class="btn btn-primary" >Create</button>
               


        </div>
<br><br>

<h3 style="font-weight: 400;"> Executive Boards</h3>

<div style=" background-color: #EBEBEB;">
    <div class="row">
        <div class="col-lg-3">
          <input type="checkbox" name="" id="">
        </div>

        <div class="col-lg-3">
            <p>Member Name</p>
        </div>

        <div class="col-lg-3">
            <p>Company Name</p>
        </div>

        <div class="col-lg-3">
            <p>Bussiness Title</p>
        </div>
    </div>

</div>

<br>

<div style=" color: #EBEBEB;">
         <button class="btn btn-primary" >Edit</button>

            <button class="btn btn-primary" >Delete</button>

            <button class="btn btn-primary" >Create</button>
        

</div>

<br><br>

<h3 style="font-weight: 400;"> Bank Information</h3>

<div style=" background-color: #EBEBEB;">
    <div class="row">
        <div class="col-lg-2">
          <input type="checkbox" name="" id="">
        </div>

        <div class="col-lg-2">
            <p>Account type</p>
        </div>

        <div class="col-lg-2">
            <p>Bank Institution Name</p>
        </div>

        <div class="col-lg-2">
            <p>Account Holder Name</p>
        </div>

        <div class="col-lg-2">
            <p>Branch Name</p>
        </div>

        <div class="col-lg-2">
            <p>Branch Code</p>
        </div>
    </div>

</div>

<br>

<div style=" color: #EBEBEB;">
   
         <button class="btn btn-primary" >Edit</button>

            <button class="btn btn-primary" >Delete</button>

            <button class="btn btn-primary" >Create</button>


</div>
<br><br>


<h3 style="font-weight: 400;">Bussiness Type</h3>
<hr>

    <div class="row">
        <div class="col-lg-6"> 
            <input type="checkbox"> Broker <br>
            <input type="checkbox"> Contractor/Consultant <br>
            <input type="checkbox"> Distributor/Wholesaler <br>
            <input type="checkbox"> Government/Public Agency <br>
            <input type="checkbox"> Manufacturer <br>
            <input type="checkbox"> Other <br>
            <input type="checkbox"> Producer <br>
        </div>

        <div class="col-lg-6"> 
            <input type="checkbox"> Retailer <br>
            <input type="checkbox"> Sales Agent/Manufacturer's Representative <br>
            <input type="checkbox"> Service Provider <br>
            <input type="checkbox"> System Integrator <br>
            <input type="checkbox"> Transportation/Logistics <br>
            <input type="checkbox"> Utilities <br>
            <input type="checkbox"> Value Added Reseller <br>
        </div>  
    </div>
<br><br>

    <button class="btn btn-primary" style="float: right;">Cancel</button> <button class="btn btn-primary" style="float: right;">Save</button> 
    </form>
    </div>
</body>
</html>