<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <h1>The Wall</h1>
  <h2>Before posting, Please read the <a href="rules.html">RULES</a></h2>
<form action="test.php" method="post">
Write to the wall: <input type="text" name="name"><br>
<input type="submit"></form>
<div>
<div class="Chatbox" id="Chatbox">
<script>
$(function() {
$('#Chatbox').load('data.txt');
});
</script>
</div>
<button onclick="$('#Chatbox').load('data.txt');
">Refresh</button>
</div>
</body>
