




<?php include_once('wikiquote.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quote of the day</title>
<style type="text/css">
<!--
body {
  margin: 5em;
  padding: 0;
  background: #edf5fa;
  font: 12px/170% Verdana, sans-serif;
  color: #494949;
}

a:link, a:visited {
  color: #027AC6;
  text-decoration: none;
}

a:hover {
  color: #0062A0;
  text-decoration: underline;
}

a:active{
  color: #5895be;
}

#quote {
  position:relative;
  margin: auto;
  width: 400px !important;
  min-height: 40px;
  clear: both;
  text-align: justify;
  border-collapse: collapse;
  padding: 10px 15px 10px 15px;
  -moz-border-radius: 7px;
  -khtml-border-radius: 7px;
  border-radius: 7px;
  font-size: 0.8em;
  border:1px solid #eee;
  background-color:#fafafa;
}

#author {
  padding-top:1.5em;
  text-align:right;
}

-->
</style>
</head>
<body>
<div id="quote">
<?php echo $quote ?>
<div id="author">
<a href="<?php echo $author_link ?>"><?php echo $author ?></a>
</div>
</div>
</body>
</html>