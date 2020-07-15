<html>
<head>
<title>Test Calling</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function autoClick() {
  var elm=document.getElementById('testx');
  //document.location.href = elm.href;
}
</script>
</head>

<body onload="autoClick()">
 <? $new = htmlspecialchars("#", ENT_QUOTES, 'UTF-8'); echo $new; ?>

<a id="testx" href="tel:*909*1234566<?=$new;?>">Click</a>
</body>
</html>
