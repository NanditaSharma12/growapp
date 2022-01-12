 <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                        <section class="vbox">
                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                    <div class="clearfix wrapper dk nav-user hidden-xs">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="thumb avatar pull-left m-r">
                                                    <img src="{{ url('assets/images/a0.png') }}" class="dker" alt="...">
                                                    <i class="on md b-black"></i>
                                                </span>
                                                <span class="hidden-nav-xs clear">
                                                    <span class="block m-t-xs">
                                                        <strong class="font-bold text-lt">John.Smith</strong>
                                                        <b class="caret"></b>
                                                    </span>
                                                    <span class="text-muted text-xs block">Art Director</span>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                                <li>
                                                    <span class="arrow top hidden-nav-xs"></span>
                                                    <a href="#">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="profile.html">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="badge bg-danger pull-right">3</span>
                                                        Notifications 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="docs.html">Help</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- nav -->
                                    <nav class="nav-primary hidden-xs">
                                        <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                        <ul class="nav nav-main" data-ride="collapse">
                                            <li class="active">
                                                <a href="{{ route('dashboard') }}" class="auto">
                                                    <i class="i i-statistics icon"></i>
                                                    <span class="font-bold">Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                    
                                                    <i class="i i-stack icon"></i>
                                                    <span class="font-bold">Services</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li>
                                                        <a href="{{ route('services.index') }}" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Manage Services</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('services.create') }}" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Add Services</span>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                    <i class="i i-lab icon"></i>
                                                    <span class="font-bold">Blogs</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li>
                                                        <a href="{{ route('blogs.index') }}" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Manage Blogs</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('blogs.create') }}" class="auto"> 
                                                            <i class="i i-dot"></i>
                                                            <span>Add Blogs</span>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
											<li>
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                    <i class="i i-grid2 icon"></i>
                                                    <span class="font-bold">Contact</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li>
                                                        <a href="{{ route('contact.index') }}" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Manage Contacts</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('contact.create') }}" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Add Contacts</span>
                                                        </a>
                                                    </li>
												 </ul>
                                             </li>
                                            <li>
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                    <i class="i i-docs icon"></i>
                                                    <span class="font-bold">Book An Appointment</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li>
                                                        <a href="profile.html" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Manage Appointments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="profile-2.html" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Add Appointments</span>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                    <i class="i i-grid2 icon"></i>
                                                    <span class="font-bold">Privacy Policy</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li>
                                                        <a href="mail.html" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Manage </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="fullcalendar.html" class="auto">
                                                            <i class="i i-dot"></i>
                                                            <span>Add</span>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
											
												<li>
                                                 <a href="#" class="auto">
                                                     <span class="pull-right text-muted">
                                                         <i class="i i-circle-sm-o text"></i>
                                                         <i class="i i-circle-sm text-active"></i>
                                                     </span>
                                                     <i class="i i-grid2 icon"></i>
                                                     <span class="font-bold">Calculator</span>
                                                 </a>
												</li>
                                            
                                        </ul>
                                        <div class="line dk hidden-nav-xs"></div>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                                        <ul class="nav">
                                            <li>
                                                <a href="mail.html#work">
                                                    <i class="i i-circle-sm text-info-dk"></i>
                                                    <span>Work space</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mail.html#social">
                                                    <i class="i i-circle-sm text-success-dk"></i>
                                                    <span>Connection</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mail.html#projects">
                                                    <i class="i i-circle-sm text-danger-dk"></i>
                                                    <span>Projects</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                                        <ul class="nav">
                                            <li>
                                                <a href="#">
                                                    <i class="i i-circle-sm-o text-success-lt"></i>
                                                    <span>College</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="i i-circle-sm-o text-warning"></i>
                                                    <span>Social</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- / nav -->
                                </div>
                            </section>
                            <footer class="footer hidden-xs no-padder text-center-nav-xs">
                                <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                                    <i class="i i-logout"></i>
                                </a>
                                <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                                    <i class="i i-circleleft text"></i>
                                    <i class="i i-circleright text-active"></i>
                                </a>
                            </footer>
                        </section>
                    </aside>