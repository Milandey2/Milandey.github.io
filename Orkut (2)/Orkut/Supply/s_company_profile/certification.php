<?php
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile </title>
    <style>
      input[type='checkbox'] {
    -webkit-appearance:none;
    width:30px;
    height:30px;
    background:white;
    border-radius:5px;
    border:1px solid #555;
}
input[type='checkbox']:checked {
    background: #abd;
}
    </style>
    </style>
</head>
<body style="background-color: #b8d2fc;">



        <div class="container">
        <p style="">*Indicates the overview</p> <br> 

        <h2>Certifications</h2>
    <hr>
    <form action="certification_db.php" method="POST">

<div class="row">
  <div class="col-lg-1">
    <br><br><br>
  <input type="checkbox" name="sustain" id="" value="sustain"><br><br><br><br>
  <input type="checkbox" name="plan" id=""><br><br>
  <input type="checkbox" name="energy" id="" value="Engry"><br><br><br>
  <input type="checkbox" name="carbon" id=""><br><br>
  
  
  </div>

  <div class="col-lg-11">
  <h5>Add Attachments</h5> <p><input type="file"></p>
  <h5>Sustanability Initiatives</h5> <p> Your business has undertaken sustainability initiatives in one of the following categories: Plan, Products and Services, Energy, Carbon, Transportation, Other.</p>
  <h5>Plan</h5> <p>Your company is a vendor of products or services that claim to reduce harmful environmental impact in measureable ways.</p>
  <h5>Energy</h5> <p>Your company is pursuing initiatives in energy efficiency or renewable energy.</p>
  <h5>Carbon</h5> <p>Your company is pursuing initiatives in carbon reporting, reduction, or offsetting.</p>

  </div>
<br>

<div class="sec" style="border: 2px solid #759CCF;"><br>
<div class="container">
  <div class="row">

    <div class="col-lg-1">
    <input type="checkbox" name="measure" id=""><br><br><br><br><br>
    <input type="checkbox" name="GHG" id=""><br><br><br>
    </div>

    <div class="col-lg-11">
  <h5> Measured and taken steps to reduce greenhouse gas emissions (GHG)</h5> <p> For how many years?</p><input type="text" name="mes"><br><br>
  <h5>  GHG and climate change strategy reported to the Carbon Disclosure Project (CDP)</h5>
    </div>
  </div>
  </div>
</div>
<br><br>

<div class="col-lg-1">
  <br>
  <input type="checkbox" name="transport" id=""><br><br><br>
  <input type="checkbox" name="other" id=""><br><br><br><br><br><br>
  <input type="checkbox" name="small" id=""><br><br>
  <input type="checkbox" name="women" id=""><br><br><br><br>
  <input type="checkbox" name="minority" id=""><br><br><br>
  <input type="checkbox" name="LGBT" id=""><br><br><br><br>
  <input type="checkbox" name="veteran" id=""><br><br><br><br><br>
  <input type="checkbox" name="ISO" id=""><br><br><br><br><br>
  <input type="checkbox" name="ISO9000" id=""><br><br><br>
  <input type="checkbox" name="ISO9001" id="">

  
  </div>

  <div class="col-lg-11">
    <br>
  <h5>Transportation</h5> <p> Your company is pursuing initiatives in efficiency for transportation and logistics or fleet management.</p>

  <h5>Other</h5> <p> Your company is pursuing other sustainability initiatives, such as water use and solid waste reduction, social compliance at the manufacturing level, and community involvement.</p><br><hr>

  <h5>Small Disadvantage Business</h5> <p> Your business is SDB certified, 8(a) certified, HUBZone certified, or certified as a small disadvantaged business by a state government agency.</p>

  <h5>Women-Owned Business</h5> <p> Your business is at least 51% owned by a woman or women who exercise the power to make policy decisions and who are actively involved in the day-to-day management of the business.</p>

  <h5>Minority-Owned Business</h5> <p>  Your business is at least 51% owned by one or more minority U.S. citizens. In the case of a publicly owned business, at least one or more such individuals own 51% of the stock, and
     one or more such individuals control itsmanagement and daily operations.</p>
  <h5>LGBT-Owned Business</h5> <p>  Your business is at least 51% owned by a Lesbian, Gay, Bisexual and/or Transgender (LGBT) person or persons and exercises independence from any non-LGBT business enterprise (LGBTBE).</p>

  <h5>Veteran-Owned Business</h5> <p>  Your business is at least 51% owned by an individual who served in the active military, naval, or air service, and who was discharged or released under conditions other than dishonorable
     or is at least 51% owned by an individualwho can be considered by the government as a Service-Disabled Veteran. The terms "veteran" and "service-disabled veteran" are defined in 38 U.S.C 101(2) and (16).</p>
     <hr>
  <h5>ISO certification</h5> <p> The International Organization for Standardization (ISO) family of standards relate to quality management systems and are designed to help organizations ensure they meet the needs of customers
     and other stakeholders. The standards are published by the ISO and are available through National standards bodies.</p>

  <h5>ISO 9000 Certified (Quality Management-Fundamentals And Vocabulary)</h5><p></p><br><br>

  <h5>ISO 9001 Certified (Quality Management)</h5><p></p><br>
</div>

  <div class="sec" style="border: 2px solid #759CCF;"><br>
<div class="container">
  <div class="row">

    <div class="col-lg-3">
    <label for="">Year of publication :</label><br><br>
    <label for="">certification Number :</label><br><br>
    <label for="">Certification Issuer :</label><br><br>
    <label for="">Certified location :</label><br><br>
    <label for="">Effective date :</label><br><br>
    <label for="">Expiration date :</label><br><br>

    </div>

    <div class="col-lg-3">
    <input type="text" name="year"><br><br>
    <input type="text" name="certi"><br><br>
    <input type="text" name="issue"><br><br>
    <input type="text" name="location"><br><br>
    <input type="date" name="effective"><br><br>
    <input type="date" name="expiration"><br><br>
    </div>
  </div>
  </div>
</div>
<br>


<div class="col-lg-1">
  <br>
  <input type="checkbox" name="TS16949" id=""><br><br><br>
  <input type="checkbox" name="TS16494" id=""><br><br><br>
  <input type="checkbox" name="ISO13485" id=""><br><br><br>
  <input type="checkbox" name="ISO14000" id=""><br><br><br>
  <input type="checkbox" name="ISO4001" id=""><br><br><br><br>
  <input type="checkbox" name="ISO17025" id=""><br><br><br>
  <input type="checkbox" name="ISO18000-1" id=""><br><br><br>
  <input type="checkbox" name="ISO2000" id=""><br><br><br>
  <input type="checkbox" name="ISO27001" id=""><br><br><br>
  <input type="checkbox" name="ISO50001" id=""><br><br><br>
  <input type="checkbox" name="ISO31000" id=""><br><br><br>
  <input type="checkbox" name="ISO26000" id=""><br><br><br>
  <input type="checkbox" name="ISOcom" id=""><br><br><br>  

  
  </div>
<br>
  <div class="col-lg-11">
    <br>
  <h5>TS 16949 Certified (Quality Specification Automotive Industry)</h5><br><br>

  <h5>TS 16494 Certified (Quality Specification Automotive Industry)</h5><br><br>

  <h5>ISO 13485 Certified (Quality Management)</h5><br><br>

  <h5>ISO 14000 Certified (Environmental Management)</h5><br><br>

  <h5>ISO 14001 Certified (Environmental Management)</h5><br><br><br>

  <h5>ISO 17025 Certified (Competence Of Testing And Calibration Laboratories)</h5><br><br><br>

  <h5>ISO 18000-1 Certified (Information Technology-Globally Accepted Radio Frequency Identification)</h5><br><br>
    
  <h5>ISO 20000 Certified (Information Technology-Service Management)</h5><br><br>

  <h5>ISO 27001 Certified (Information Technology-Security Techniques)</h5><br><br>

  <h5>ISO 50001 Certified (Energy Management)</h5><p></p><br><br>

  <h5>ISO 31000 Certified (Risk Management)</h5><p></p><br><br>

  <h5>ISO 26000 Certified (Social Responsibility)</h5><p></p><br><br>

  <h5>ISO Compliant (Other)</h5><p></p><br><br>

</div>




  </div>
</div>
<button type="submit" class="btn btn-primary">SAVE</button>
</form>

    
        </div>
</body>