<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
            </li>
            <li class=" nav-item"><a href="index.php"><i class="fas fa-tachometer-alt"></i><span class="menu-title"
                        data-i18n="">Dashboard</a>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-folder"></i><span class="menu-title"
                        data-i18n="">Management</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('admin.content.index') }}">Content</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.page.index') }}">Page</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.coursecategory.index') }}">Course Category</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.teammember.index') }}">Team Members</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.venue.index') }}">Venues</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.enrollmentlabel.index') }}">Enrollment Label</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{ route('admin.course.index') }}"><i class="fas fa-book-reader"></i></i><span class="menu-title"
                        data-i18n="">Courses</span></a></li>
            <li class=" nav-item"><a href="trainers.php"><i class="fas fa-chalkboard-teacher"></i></i><span
                        class="menu-title" data-i18n="">Trainers</span><span class=""></span></a>
            <li class=" nav-item"><a href="trainingslot.php"><i class="fas fa-chair"></i></i><span class="menu-title"
                        data-i18n="">Training Slot</span><span class=""></span></a>
            <li class=" nav-item"><a href="corparatetraining.php"><i class="fas fa-chalkboard-teacher"></i><span
                        class="menu-title" data-i18n="">Corprate Training</span><span class=""></span></a>
            <li class=" nav-item"><a href="testimonials.php"><i class="fas fa-comments"></i><span class="menu-title"
                        data-i18n="">Testimonials</span><span class=""></span></a>
            <li class=" nav-item"><a href="faq.php"><i class="far fa-question-circle"></i><span class="menu-title"
                        data-i18n="">FAQ</span><span class=""></span></a>
            <li class=" nav-item"><a href="downloads.php"><i class="far fa-envelope"></i><span class="menu-title"
                        data-i18n="">Downloads</span></a>
            <li class=" nav-item"><a href="#"><i class="fas fa-blog"></i><span class="menu-title"
                        data-i18n="">Requests</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="contacts.php">Contacts</a>
                    </li>
                    <li><a class="menu-item" href="queries.php">Queries</a>
                </ul>
            </li>
            <li class=" nav-item"><a href="downloads.php"><i class="fas fa-download"></i><span class="menu-title"
                        data-i18n="">Blogs</span><span class=""></span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="blogcategories.php">Categories</a>
                    </li>
                    <li><a class="menu-item" href="posts.php">Posts</a>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{ route('admin.subadmin.index') }}"><i class="fas fa-users-cog"></i><span class="menu-title"
                        data-i18n="">Sub Admin</span></a>
               
            </li>
        </ul>
    </div>
</div>
