<?php
session_start();
if(!$_SESSION['access'])
{
 header("HTTP/1.1 404 Not Found");
 exit("404 Not Found");
}
?>
<head>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script src="js.js"></script>
</head>
<body>
<h2>This text which you cannot copy, too!</h2>
<p>You can click as much as you want, but can't do any ;)</p>
<a onclick="return location.href = 'yeap.php?tar=2'">��� 1</a>
<a onclick="return location.href = 'yeap.php?tar=1'">�������</a>
<br><br>
<button onclick=unlock()>If you know password!</button> <!--������ � ������� unlock() � js.js-->
</body>
<footer>
</footer>
<?php
unset($_SESSION['access']);
?>