<div class="sidbar">
    <form class="search-form" method="POST" action="tchat.php">
        <input type="search" placeholder="Search.." class="search">
    </form>
    <div class="all-cards">
        <?php foreach ($users as $id => $user): ?>
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/<?= $user['picture']?>" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <?php if ($user['is_connected'] == true): ?>
                            <span class="status-1"></span>
                        <?php else: ?>
                            <span class="status-0"></span>
                        <?php endif ?>
                        <h3><?= $user['firstname'] . ' ' . $user['lastname']?></h3>
                    </span>
                </article>
            </a>
        <?php endforeach ?>
    </div>
</div>
