<html>

<body>
    Welcome <?php echo htmlspecialchars($_GET["name"] ?? "Not provided"); ?><br>
    Your email address is: <?php echo htmlspecialchars($_GET["email"] ?? "Not provided"); ?><br>
    Your passcode is: <?php echo htmlspecialchars($_GET["passcode"] ?? "Not provided"); ?>
</body>

</html>