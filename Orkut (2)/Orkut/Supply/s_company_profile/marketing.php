<?php include 'header.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <title>Marketing</title>
</head>
<body style="background-color: #D9E6F7;">
    


    <div class="container">
        <p style="">* Indicates a required field</p> <h3 style="font-weight: 400;"> Standard Profile Features</h3>

<hr> 

        <b style="">Social networking links</b>
        <p style="">Add links to your social media channels so that buyers can engage with your company</p>


       <img src="img/fb.jpg" alt="" width="2%"> <span style="color: #759CCF; width: 160px;">facebook.com/</span> <input type="text" style="width: 250px padding: 2px; border: 3px solid #759CCF;"><br><br>
       <img src="img/twit.png" alt="" width="2%"> <span style="color: #759CCF; width: 160px;">twitter.com/</span> &nbsp;&nbsp;&nbsp; <input type="text" style="width: 250px padding: 2px; border: 3px solid #759CCF;"><br><br>
       <img src="img/link.png" alt="" width="2%"> <span style="color: #759CCF; width: 160px;">linkedin.com/</span> &nbsp;&nbsp;<input type="text" style="width: 250px padding: 2px; border: 3px solid #759CCF;"><br><br>


       <b style="">Company Description</b>
       <p style="">Enter a full company description that gives buying organisation a more completeview of your company then the breif description on the Basic profile page</p>
       <textarea name="editor1" id="editor1" rows="10" cols="80">
                
            </textarea>
<br><br>
            <b style="">Credit and Risk Information from D&B</b>
        <p style="">Add your Dun & Badstreet credit and risk scores to your pposting responses so that buyers can identify you as qualified partner</p>

        <b style="">D&B D-U-N-S Number&#174; </b> | <a href="">Add</a>

        <p style="">* Indicates a required field</p> <h3 style="font-weight: 400;"> Standard Profile Features</h3>
<hr>

<b style="">Company Logo</b>
<br><br>

<div class="img">
    <img src="img/images.png" alt="" width="10%">


   <span><p>Upload your logo to appear with your company description. Logo must be a .gif file with a maximum width of 250 pixels, a maximum height 
        of 250 pixels an a size of 200 kB.
    </p></span> <br><br>


    <center><h5 style="">Logo File: </h5> <span><input type="file" name="" id=""></span><br>
        <button class="btn btn-primary">Upload</button>

        <li style="">Use ".gif" file format</li>
        <li style="">Less than 200kb</li>
        <li style="">Max width / height: 250px</li>
        <li style="">Remove background, <a href="#" style="text-decoration: none;">see example</a></li>

  
  </center>


    </div>

        <h3 style="font-weight: 400;"> Attachements</h3>
        <p>Add attachments to showcase your company, including customer presentations, case studies, and certifications.</p>

        <div class="row" style=" background-color: #EBEBEB;">
          <div class="col-lg-3">
            URL
          </div>

          <div class="col-lg-3">
            Description
          </div>

          <div class="col-lg-3">
            Type
          </div>

          <div class="col-lg-3">
            Status
          </div>
        </div>
<center>
          <p>No items</p>
          </center>

          <div class="row" style=" background-color: #EBEBEB;">
          <div class="col-lg-12">
            <button class="btn btn-primary">Add</button>
          </div>
                </div>

                <br><br>


       <h3 style="font-weight: 400;"> Showcase</h3>
         <hr>

         <div class="row" style=" background-color: #EBEBEB;">
          <div class="col-lg-4">
            Title
          </div>

          <div class="col-lg-4">
            Category
          </div>

          <div class="col-lg-4">
            Description
          </div>
        </div>

        <center><p>No Items</p></center>

        <div class="row" style=" background-color: #EBEBEB;">
          <div class="col-lg-12">
            <button class="btn btn-primary">Create</button>
          </div>
                </div>




    </div>



    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
</body>
</html>