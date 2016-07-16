<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/10/16
 * Time: 5:28 PM
 */
?>
<!-- BEGIN SIDEBAR -->
<?php $userRole = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id); ?>
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

            <li class="nav-item <?= Yii::$app->controller->id == 'dashboard' ? 'active' : '' ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site']) ?>" class="nav-link nav-toggle">
                    <i class="menu-icon menu-icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <?php if (Yii::$app->user->can('administrator')): ?>
                <li class="nav-item <?= Yii::$app->controller->id == 'user' ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl(['user']) ?>" class="nav-link ">
                        <i class="menu-icon menu-icon-user"></i>
                        <span class="title">User Management</span>
                    </a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'contest-item' ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl(['contest-item']) ?>" class="nav-link ">
                        <i class="menu-icon menu-icon-user"></i>
                        <span class="title">Contest Item Management</span>
                    </a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'contest-session' ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->urlManager->createUrl(['contest-session']) ?>" class="nav-link ">
                        <i class="menu-icon menu-icon-user"></i>
                        <span class="title">Submissions</span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item ">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/logout']) ?>" class="nav-link ">
                    <i class="menu-icon menu-icon-logout"></i>
                    <span class="title"><?= Yii::t('app', 'Logout') ?></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
