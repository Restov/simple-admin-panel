<title>Главная страница</title>
</head>
<body>
<h1>Список пользователей</h1>
<?php 

echo "<a href='user/add'>Добавить пользователя</a><br><br>";
foreach ($data as $user) {
    echo "<a href='user/data/".$user['login']."'>".$user['login']."</a><br>";
}
?>