</head>
<body>
<?php 

echo "<a href='../delete/".$data['login']."'>Удалить пользователя</a><br><br>";

echo "<form action='../edit/".$data['login']."' method='post'>";
echo "<div class='form-group'>";
echo "<label for='login'>Login</label>";
echo "<input type='text' class='form-control' id='login' name='login' value='".$data['login']."'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='role'>Role</label>";
echo "<input type='text' class='form-control' id='role' name='role' value='".$data['role']."'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='name'>Name</label>";
echo "<input type='text' class='form-control' id='name' name='name' value='".$data['name']."'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='surname'>Surname</label>";
echo "<input type='text' class='form-control' id='surname' name='surname' value='".$data['surname']."'>";
echo "</div>";
echo "<button type='submit' class='btn btn-primary'>Edit</button>";
echo "</form>";
