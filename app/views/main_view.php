<title>Главная страница</title>
</head>

<body>
    <main>
        <h1>Список пользователей</h1>
        <?php
        echo "<br><a href='../user/add'>Добавить пользователя</a><br><br>";

        $page = $data['page'];
        $users = $data['users'];

        $users = array_slice($users, ($page - 1) * 5, 5);

        $pages = ceil(count($data['users']) / 5);

        if ($page >= $pages) {
            $page -= 1;
        }

        echo "<nav>";
        echo "<ul class='pagination'>";
        echo "<li class='page-item'><a class='page-link' href='?page=1'>В начало</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page=" . ($page - 1) . "'>Предыдущая</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page=" . ($page + 1) . "'>Следующая</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page=" . $pages . "'>В конец</a></li>";
        echo "</ul>";
        echo "</nav>";

        foreach ($users as $user) {
            echo "<a href='../../user/data/" . $user['login'] . "'>" . $user['login'] . "</a><br>";
        }

        echo "<br>";

        ?>
    </main>