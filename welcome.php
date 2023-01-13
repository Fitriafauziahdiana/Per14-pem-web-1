<html>
<body>

<form action="welcome.php" method="post"> Nama: <input type="text" nama="nama" /> Email: <input type="text" name="email" />
<input type="submit" />
</form>
Welcome <?php echo $_GET["nama"];
echo "<br />";echo $_GET['email']; ?> is your mail.
</body>
</html>
