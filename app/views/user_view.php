</head>
<body>
<?php 
echo "<a href='../delete/".$data['login']."'>Удалить пользователя</a><br><br>";
echo "<div class='card' style='width: 18rem; border: 1px solid black;'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>".$data['login']."</h5>";
echo "<h6 class='card-subtitle mb-2 text-muted'>".$data['role']."</h6>";
echo "<p class='card-text'>Имя: ".$data['name']."</p>";
echo "<p class='card-text'>Фамилия: ".$data['surname']."</p>";
echo "</div>";
echo "</div>";
