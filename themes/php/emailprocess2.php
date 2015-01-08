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
  <h3>Thank you for your Feedback</h3>
  <hr/>
<?php
mail("", $_POST['subject'], $_POST['message']);
echo "Recipient:";
echo $_POST['to'];
?>
<p>Your messge has been sent</p>
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
