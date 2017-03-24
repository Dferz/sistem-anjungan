<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'MENU DASHBOARD', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'fa fa-home', 'url' => ['/dashboard']],
                    ['label' => 'Prestasi Mahasiswa', 'icon' => 'fa fa-star', 'url' => ['dashboard/prestasi']],
                    ['label' => 'Profil Dosen', 'icon' => 'fa fa-users', 'url' => ['dashboard/profil-dosen']],
                    ['label' => 'TA Unggulan', 'icon' => 'fa fa-book', 'url' => ['dashboard/ta-unggulan']],
                    ['label' => 'Logout', 'icon' => 'fa fa-power-off', 'url' => ['dashboard/logout']],
                    ['label' => 'MENU TAMBAHAN', 'options' => ['class' => 'header']],
                    ['label' => 'View User', 'icon' => 'fa fa-users', 'url' => ['dashboard/all-user']],
                    ['label' => 'Add User', 'icon' => 'fa fa-user-plus', 'url' => ['dashboard/add-user']],
                ],
            ]
        ) ?>

    </section>

</aside>
