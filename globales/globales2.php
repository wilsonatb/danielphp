<?php
$menunav = $_SERVER['REQUEST_URI'];
?>
<nav>
    <ul>
        <li>
            <a href="index.php" class="
            <?php if (strpos($menunav, 'index.php') !== false) echo 'active'; ?>">
                Inicio
            </a>
        </li>
        <li>
            <a href="post.php" class="
            <?php if (strpos($menunav, 'post.php') !== false) echo 'active'; ?>">
                Post
            </a>
        </li>
    </ul>
</nav>