    <?php
        use App\Http\Utils\UIHelper;
    ?>
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper hidden-xs">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start {{ UIHelper::checkMenuActive(['/']) }}">
                <a href="/">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="{{ UIHelper::checkMenuActive(['news-category', 'news-category/*']) }}">
                <a href="#">
                    <i class="icon-settings"></i>
                    <span class="title">Web Config</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ UIHelper::checkMenuActive(['news-category', 'news-category/*']) }}">
                        <a href="{{ route('adminNewsCategory') }}">
                            <i class="icon-layers"></i>
                            <span class="title">News Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ UIHelper::checkMenuActive(['web-users', 'web-users/*', 'game-users', 'game-users/*']) }}">
                <a href="#">
                    <i class="icon-users"></i>
                    <span class="title">Users Management</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ UIHelper::checkMenuActive(['web-users', 'web-users/*']) }}">
                        <a href="{{ route('adminWebUsers') }}">
                            <i class="icon-user"></i>
                            <span class="title">Web Users</span>
                        </a>
                    </li>
                    <li class="{{ UIHelper::checkMenuActive(['game-users', 'game-users/*']) }}">
                        <a href="{{ route('adminGameUsers') }}">
                            <i class="icon-game-controller"></i>
                            <span class="title">Game Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ UIHelper::checkMenuActive(['news-info', 'news-info/*', 'event-info', 'event-info/*', 'game-info', 'game-info/*', 'images', 'images/*']) }}">
                <a href="#">
                    <i class="icon-info"></i>
                    <span class="title">Info Management</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ UIHelper::checkMenuActive(['news-info', 'news-info/*']) }}">
                        <a href="{{ route('adminNewsInfo') }}">
                            <i class="icon-list"></i>
                            <span class="title">News Info</span>
                        </a>
                    </li>
                    <li class="{{ UIHelper::checkMenuActive(['event-info', 'event-info/*']) }}">
                        <a href="{{ route('adminEventInfo') }}">
                            <i class="icon-calendar"></i>
                            <span class="title">Event Info</span>
                        </a>
                    </li>
                    <li class="{{ UIHelper::checkMenuActive(['game-info', 'game-info/*']) }}">
                        <a href="{{ route('adminGameInfo') }}">
                            <i class="icon-book-open"></i>
                            <span class="title">Game Info</span>
                        </a>
                    </li>
                    <li class="{{ UIHelper::checkMenuActive(['images', 'images/*']) }}">
                        <a href="{{ route('adminImages') }}">
                            <i class="icon-picture"></i>
                            <span class="title">Images</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ UIHelper::checkMenuActive(['feedback', 'feedback/*']) }}">
                <a href="{{ route('adminFeedback') }}">
                    <i class="icon-speech"></i>
                    <span class="title">Feedback</span>
                </a>
            </li>
            <li class="{{ UIHelper::checkMenuActive(['recharge', 'recharge/*']) }}">
                <a href="{{ route('adminRecharge') }}">
                    <i class="icon-wallet"></i>
                    <span class="title">Recharge</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>