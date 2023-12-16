<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="theme-layout">

            <div class="responsive-header">
                <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
                    <span class="mh-text">
				<a href="newsfeed.html" title=""><img src="assets/images/logo2.png" alt=""></a>
			</span>
                    <span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
                </div>
                <div class="mh-head second">
                    <form class="mh-form">
                        <input placeholder="search" />
                        <a href="#/" class="fa fa-search"></a>
                    </form>
                </div>
                <nav id="menu" class="res-menu">
                    <ul>
                        <li><span>Home</span>
                            <ul>
                                <li><a href="index-2.html" title="">Home Social</a></li>
                                <li><a href="index2.html" title="">Home Social 2</a></li>
                                <li><a href="index-company.html" title="">Home Company</a></li>
                                <li><a href="landing.html" title="">Login page</a></li>
                                <li><a href="logout.html" title="">Logout Page</a></li>
                                <li><a href="newsfeed.html" title="">news feed</a></li>
                            </ul>
                        </li>
                        <li><span>Time Line</span>
                            <ul>
                                <li><a href="time-line.html" title="">timeline</a></li>
                                <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                                <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                                <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                                <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                                <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                                <li><a href="fav-page.html" title="">favourit page</a></li>
                                <li><a href="groups.html" title="">groups page</a></li>
                                <li><a href="page-likers.html" title="">Likes page</a></li>
                                <li><a href="people-nearby.html" title="">people nearby</a></li>


                            </ul>
                        </li>
                        <li><span>Account Setting</span>
                            <ul>
                                <li><a href="create-fav-page.html" title="">create fav page</a></li>
                                <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                                <li><a href="edit-interest.html" title="">edit-interest</a></li>
                                <li><a href="edit-password.html" title="">edit-password</a></li>
                                <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                                <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                                <li><a href="messages.html" title="">message box</a></li>
                                <li><a href="inbox.html" title="">Inbox</a></li>
                                <li><a href="notifications.html" title="">notifications page</a></li>
                            </ul>
                        </li>
                        <li><span>forum</span>
                            <ul>
                                <li><a href="forum.html" title="">Forum Page</a></li>
                                <li><a href="forums-category.html" title="">Fourm Category</a></li>
                                <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                                <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            </ul>
                        </li>
                        <li><span>Our Shop</span>
                            <ul>
                                <li><a href="shop.html" title="">Shop Products</a></li>
                                <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                                <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                                <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                                <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                            </ul>
                        </li>
                        <li><span>Our Blog</span>
                            <ul>
                                <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                                <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                                <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                                <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                                <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                                <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                                <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                                <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                            </ul>
                        </li>
                        <li><span>Portfolio</span>
                            <ul>
                                <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                                <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                                <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                            </ul>
                        </li>
                        <li><span>Support & Help</span>
                            <ul>
                                <li><a href="support-and-help.html" title="">Support & Help</a></li>
                                <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                                <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
                            </ul>
                        </li>
                        <li><span>More pages</span>
                            <ul>
                                <li><a href="careers.html" title="">Careers</a></li>
                                <li><a href="career-detail.html" title="">Career Detail</a></li>
                                <li><a href="404.html" title="">404 error page</a></li>
                                <li><a href="404-2.html" title="">404 Style2</a></li>
                                <li><a href="faq.html" title="">faq's page</a></li>
                                <li><a href="insights.html" title="">insights</a></li>
                                <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html" title="">about</a></li>
                        <li><a href="about-company.html" title="">About Us2</a></li>
                        <li><a href="contact.html" title="">contact</a></li>
                        <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                        <li><a href="widgets.html" title="">Widgts</a></li>
                    </ul>
                </nav>
                <nav id="shoppingbag">
                    <div>
                        <div class="">
                            <form method="post">
                                <div class="setting-row">
                                    <span>use night mode</span>
                                    <input type="checkbox" id="nightmode"/>
                                    <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notifications</span>
                                    <input type="checkbox" id="switch2"/>
                                    <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notification sound</span>
                                    <input type="checkbox" id="switch3"/>
                                    <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>My profile</span>
                                    <input type="checkbox" id="switch4"/>
                                    <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show profile</span>
                                    <input type="checkbox" id="switch5"/>
                                    <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                            <h4 class="panel-title">Account Setting</h4>
                            <form method="post">
                                <div class="setting-row">
                                    <span>Sub users</span>
                                    <input type="checkbox" id="switch6" />
                                    <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>personal account</span>
                                    <input type="checkbox" id="switch7" />
                                    <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Business account</span>
                                    <input type="checkbox" id="switch8" />
                                    <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show me online</span>
                                    <input type="checkbox" id="switch9" />
                                    <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Delete history</span>
                                    <input type="checkbox" id="switch10" />
                                    <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Expose author name</span>
                                    <input type="checkbox" id="switch11" />
                                    <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div><!-- responsive header -->

            @include('partials.navbar')

            <section>
                <div class="gap2 gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row merged20" id="page-contents">
                                    <div class="col-lg-3">
                                        @include('partials.leftSidebar')
                                    </div><!-- sidebar -->
                                    <div class="col-lg-6">
                                        <div class="central-meta">
                                            <div class="new-postbox">
                                                <figure>
                                                    <img src="assets/images/resources/admin2.jpg" alt="">
                                                </figure>
                                                <div class="newpst-input">
                                                    <form method="post">
                                                        <textarea rows="2" placeholder="{{ __("What's your mind, ") }} {{ auth()->user()->name }}"></textarea>
                                                        <div class="attachments">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-music"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-image"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-video-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <button type="submit">Post</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- add post new box -->
                                        <div class="loadMore">
                                            <div class="central-meta item">
                                                <div class="user-post">
                                                    <div class="friend-info">
                                                        <figure>
                                                            <img src="assets/images/resources/friend-avatar10.jpg" alt="">
                                                        </figure>
                                                        <div class="friend-name">
                                                            <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                                            <span>published: june,2 2018 19:PM</span>
                                                        </div>
                                                        <div class="post-meta">
                                                            <img src="assets/images/resources/user-post.jpg" alt="">
                                                            <div class="we-video-info">
                                                                <ul>
                                                                    <li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
                                                                    </li>
                                                                    <li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
                                                                    </li>

                                                                    <li class="social-media">
                                                                        <div class="menu">
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="rotater">
                                                                                <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="description">

                                                                <p>
                                                                    World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="coment-area">
                                                        <ul class="we-comet">
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="assets/images/resources/comet-1.jpg" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                        <span>1 year ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                                                                </div>
                                                                <ul>
                                                                    <li>
                                                                        <div class="comet-avatar">
                                                                            <img src="assets/images/resources/comet-2.jpg" alt="">
                                                                        </div>
                                                                        <div class="we-comment">
                                                                            <div class="coment-head">
                                                                                <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                                                <span>1 month ago</span>
                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                            </div>
                                                                            <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="comet-avatar">
                                                                            <img src="assets/images/resources/comet-3.jpg" alt="">
                                                                        </div>
                                                                        <div class="we-comment">
                                                                            <div class="coment-head">
                                                                                <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                                                <span>16 days ago</span>
                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                            </div>
                                                                            <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="assets/images/resources/comet-1.jpg" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                                                        <span>1 week ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
                                                                        <i class="em em-smiley"></i>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="" class="showmore underline">more comments</a>
                                                            </li>
                                                            <li class="post-comment">
                                                                <div class="comet-avatar">
                                                                    <img src="assets/images/resources/comet-1.jpg" alt="">
                                                                </div>
                                                                <div class="post-comt-box">
                                                                    <form method="post">
                                                                        <textarea placeholder="Post your comment"></textarea>
                                                                        <div class="add-smiles">
                                                                            <span class="em em-expressionless" title="add icon"></span>
                                                                        </div>
                                                                        <div class="smiles-bunch">
                                                                            <i class="em em---1"></i>
                                                                            <i class="em em-smiley"></i>
                                                                            <i class="em em-anguished"></i>
                                                                            <i class="em em-laughing"></i>
                                                                            <i class="em em-angry"></i>
                                                                            <i class="em em-astonished"></i>
                                                                            <i class="em em-blush"></i>
                                                                            <i class="em em-disappointed"></i>
                                                                            <i class="em em-worried"></i>
                                                                            <i class="em em-kissing_heart"></i>
                                                                            <i class="em em-rage"></i>
                                                                            <i class="em em-stuck_out_tongue"></i>
                                                                        </div>
                                                                        <button type="submit"></button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- centerl meta -->
                                    <div class="col-lg-3">
                                        @include('partials.rightSidebar')
                                    </div><!-- sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('partials.footer')
        </div>
    @endsection
</x-app-layout>
