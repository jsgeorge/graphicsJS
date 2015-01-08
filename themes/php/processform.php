<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/page_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Citrus Cafe</title>
<!-- InstanceEndEditable -->
<link href="../css/master_mq.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]>
<script type="text/javascript" src="javascript/html5.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="container">
  <header id="logo">
    <h1>Citrus Cafe</h1>
    <h2>Sustainable,organic and natural</h2>
    <nav>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../about.html">Menus</a></li>
        <li><a href="../reservations.html">Reservations</a></li>
        <li><a href="../gallery.html">Gallery</a></li>
        <li><a href="../contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- InstanceBeginEditable name="content" -->
  <div id="maincontent">
  <section class="page_pod">
  <h3>Thank you for your Reservation</h3>
  <hr/>
<?php
echo "Name: ";
echo $_POST['Name'];
echo "<br/>";
echo "Company ";
echo $_POST['company'];
echo "<br/>";
echo "Address1: ";
echo $_POST['address1'];
echo "<br/>";
echo "Address2: ";
echo $_POST['address2'];
echo "<br/>";
echo "City: ";
echo $_POST['city'];
echo "<br/>";
echo "Region: ";
echo $_POST['region'];
echo "<br/>";
echo "Tel: ";
echo $_POST['tel'];
echo "<br/>";
echo "Email: ";
echo $_POST['email'];
echo "<br/>";
echo "Date: ";
echo $_POST['date'];
echo "<br/>";
echo "Time: ";
echo $_POST['time'];
echo "<br/>";
echo "#No. of gusts: ";
echo $_POST['guests'];
echo "<br/>";
?>
</section>
</div>
  <!-- InstanceEndEditable -->
  <footer>
    <div id="facebookTwitter"><img src="../images/icon_facebook.png" width="24" height="25" alt="Facebook"><img src="../images/icon_twitter.png" width="24" height="25" alt="Twitter"></div>
    <p><b>Citrus Cafe</b> 601 Townsend St, San Francisco, CA, 94117</p>
    <p id="phone">415-555-5555</p>
  </footer>
</div>
</body>
<!-- InstanceEnd --></html>
