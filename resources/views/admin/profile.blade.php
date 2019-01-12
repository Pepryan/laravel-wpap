<li>
    <!-- Profile avatar -->
    <a class="profile-trigger" href="javascript:void(0);">
                <img class="main-menu-avatar" src="{{asset('/images/avatars/helen.jpg')}}" alt="">
                <span class="dot"></span>
            </a>
    <!-- /Profile avatar -->

    <!-- Profile avatar -->
    <div class="fab js-hamburger">
        <!-- Profile page wrapper -->
        <div class="profile-container">
            <div class="inner">
                <div class="container is-fluid">
                    <!-- Profile with cover -->
                    <div id="profile-cover" class="columns">
                        <div class="cover-overlay"></div>
                        <div class="column is-10 is-offset-1 heading-wrapper">
                            <div class="profile-heading">
                                <div class="columns">
                                    <div class="column is-2 has-text-centered">
                                        <div class="image is-128x128 avatar">
                                            <div class="avatar-overlay">
                                                <a class="light-text">{{ Auth::user()->name }}</a>
                                            </div>
                                            <img src="{{asset('/images/avatars/helen.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="column is-4 name">
                                        <p>
                                            <span class="title light-text is-bold">{{ Auth::user()->name }}</span>
                                        </p>
                                        <p class="tagline light-text">Sales Manager @ Acme Inc.</p>
                                        <div>
                                            <button class="button dash-btn ripple primary-btn btn-outlined follow rounded width-100">
                                                        <i class="fa fa-check"></i>Follow
                                                    </button>
                                        </div>
                                    </div>
                                    <div class="column is-2 followers has-text-centered is-hidden-mobile">
                                        <p class="stat-val">74</p>
                                        <p class="stat-key">Projects</p>
                                    </div>
                                    <div class="column is-2 following has-text-centered is-hidden-mobile">
                                        <p class="stat-val">179</p>
                                        <p class="stat-key">Deals</p>
                                    </div>
                                    <div class="column is-2 likes has-text-centered is-hidden-mobile">
                                        <p class="stat-val">963</p>
                                        <p class="stat-key">Leads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profile menu FAB -->
                        <div class="profile-fab">
                            <div class="fab-wrapper">
                                <button id="show-notifications" class="notifications fab-btn mini ripple" data-toggle="tooltip" data-placement="left" data-title="Notifications">
                                            <i class="material-icons">notifications</i>
                                        </button>
                                <button id="show-team" class="team fab-btn mini ripple" data-toggle="tooltip" data-placement="top" data-title="Team">
                                            <i class="material-icons">group</i>
                                        </button>
                                <button id="show-details" class="details fab-btn mini ripple" data-toggle="tooltip" data-placement="top" data-title="Profile">
                                            <i class="material-icons">subject</i>
                                        </button>
                                <button id="profile-fab-trigger" class="fab-btn pop-fab">
                                            <span class="profile-menu-wrapper">
                                                <span class="icon-box-toggle"> 	
                                                    <span class="rotate">
                                                        <i class="icon-line-top"></i>
                                                        <i class="icon-line-center"></i>
                                                        <i class="icon-line-bottom"></i> 
                                                    </span>
                                                </span>
                                            </span>

                                        </button>
                            </div>
                        </div>
                        <!-- /Profile menu FAB -->
                    </div>
                    <!-- /Profile with cover -->

                    <!-- Profile Sections -->
                    <div class="container">
                        <div class="columns">
                            <div class="column is-10 is-offset-1">
                                <div class="profile-sections-wrapper">
                                    <!-- Profile details -->
                                    <div id="profile-details">
                                        <div class="columns">
                                            <!-- Details sub view -->
                                            <div id="profile-view" class="column is-10 is-offset-1">
                                                <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                    <div class="edit-button edit-trigger has-text-left">
                                                        <button class="button btn-dash secondary-btn raised ripple no-lh">Edit profile</button>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <div class="info-section">
                                                                    <h1 class="info-heading">Personal info</h1>
                                                                    <div class="info-divider"><span></span></div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Full name :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description highlighted">
                                                                                    Helen Miller
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Age :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    27 years
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Country :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    United States
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="info-section">
                                                                    <h1 class="info-heading">Contact info</h1>
                                                                    <div class="info-divider"><span></span></div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Email :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description highlighted">
                                                                                    hmiller@acme.io
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Mobile :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    +1 556 548 55
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Office :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    +1 589 654 32
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column is-6">
                                                                <div class="info-section">
                                                                    <h1 class="info-heading">Company info</h1>
                                                                    <div class="info-divider"><span></span></div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Company :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description highlighted">
                                                                                    Acme Inc.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Department :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    Sales & Marketing
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    Position :
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description highlighted">
                                                                                    Sales Manager
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="info-section">
                                                                    <h1 class="info-heading">Social</h1>
                                                                    <div class="info-divider"><span></span></div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    <i class="fa fa-twitter"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    twitter/helenMiller
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="columns is-gapless">
                                                                            <div class="column is-5">
                                                                                <div class="info-title">
                                                                                    <i class="fa fa-linkedin"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="column is-7">
                                                                                <div class="info-description">
                                                                                    linkedin/helenMiller
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <div class="taglist mt-30">
                                                                            <span class="tag squared is-outlined is-primary">Sales</span>
                                                                            <span class="tag squared is-outlined is-info">Marketing</span>
                                                                            <span class="tag squared is-outlined is-primary">Customers</span>
                                                                            <span class="tag squared is-outlined is-secondary">Cart</span>
                                                                            <span class="tag squared is-outlined is-secondary">Checkout</span>
                                                                            <span class="tag squared is-outlined is-secondary">Automation</span>
                                                                            <span class="tag squared is-outlined is-info">Emailing</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Details sub view -->

                                            <!-- Edit sub view -->
                                            <div id="edit-view" class="column is-10 is-offset-1 is-hidden">
                                                <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                    <div class="edit-button has-text-centered">
                                                        <h3 class="title">Edit Profile</h3>
                                                        <div class="cross-container edit-trigger">
                                                            <span class="top"></span>
                                                            <span class="bottom"></span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- Edit form -->
                                                        <form>
                                                            <div class="columns">
                                                                <div class="column is-6">
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">person_outline</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>First name</label>
                                                                    </div>

                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">mail_outline</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Email</label>
                                                                    </div>
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">smartphone</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Mobile</label>
                                                                    </div>


                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">settings</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Department</label>
                                                                    </div>
                                                                </div>
                                                                <div class="column is-6">
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">person</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Last name</label>
                                                                    </div>
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">domain</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Company</label>
                                                                    </div>
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">phone</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Office</label>
                                                                    </div>
                                                                    <div class="control-material is-secondary has-icon">
                                                                        <input class="material-input" type="text" required>
                                                                        <i class="material-icons">room</i>
                                                                        <span class="material-highlight"></span>
                                                                        <span class="bar"></span>
                                                                        <label>Position</label>
                                                                    </div>

                                                                    <div class="has-text-centered mt-30">
                                                                        <button class="button btn-dash secondary-btn is-raised is-fullwidth rounded ripple no-lh" data-ripple-color="">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- /Edit form -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Edit sub view -->
                                        </div>
                                    </div>
                                    <!-- /Profile details -->

                                    <!-- Profile team -->
                                    <div id="profile-team" class="is-hidden">
                                        <!-- Team header -->
                                        <div class="columns">
                                            <div class="column is-10 is-offset-1">
                                                <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                    <div class="card-body">
                                                        <div class="columns is-vcentered">
                                                            <div class="column is-6">
                                                                <div class="team-logo">
                                                                    <img src="{{asset('/images/logos/partners/acme.svg')}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="column is-6">
                                                                <div class="team-info">
                                                                    <div class="team-number">
                                                                        <span>15</span> Team members
                                                                    </div>
                                                                    <div class="team-avatars">
                                                                        <img src="{{asset('/images/avatars/anthony.jpg')}}" alt="">
                                                                        <img src="{{asset('/images/avatars/arthur.jpg')}}" alt="">
                                                                        <img src="{{asset('/images/avatars/carolin.png')}}" alt="">
                                                                        <img src="{{asset('/images/avatars/elisabeth.jpg')}}" alt="">
                                                                        <img src="{{asset('/images/avatars/ben.jpg')}}" alt="">
                                                                        <img src="{{asset('/images/avatars/marc.jpg')}}" alt="">
                                                                        <span>+9</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Team header -->

                                        <!-- Team List -->
                                        <div class="columns is-vcentered is-multiline animated preFadeInUp fadeInUp">
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag is-success">Online</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/anthony.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Anthony Briggs</div>
                                                            <div class="position">Sales Manager</div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> Stockholm</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Anthony is a specialist of online sales and abandoned cart recovery process
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag">Offline</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/arthur.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Arthur Baxter</div>
                                                            <div class="position">Head of Sales </div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> London</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Arthur is the big boss of Europe Sales at Acme and an Online sales specialist
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag is-success">Online</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/carolin.png')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Marjory Cambell</div>
                                                            <div class="position">Emailing Manager</div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> New York</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Marjory handles the thousands of emails we send to our subscribers
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag is-success">Online</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/elisabeth.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Elisabeth Lopez</div>
                                                            <div class="position">Sales Manager</div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> Mexico</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Elisabeth is a specialist of online sales and abandoned cart recovery process
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag is-warning">Busy</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/ben.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Kevin Smith</div>
                                                            <div class="position">Shipping Manager</div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> Chicago</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Kevin handles all the shipping process from the warehouse to the customers
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team member -->
                                            <div class="column is-4">
                                                <div class="flex-card team-card light-bordered light-raised">
                                                    <div class="card-heading padding-10">
                                                        <span class="tag">Offline</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="avatar">
                                                            <img src="{{asset('/images/avatars/marc.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-id">
                                                            <div class="name">Marc Walters</div>
                                                            <div class="position">Product Designer</div>
                                                            <div class="location"><i class="sl sl-icon-globe"></i> New York</div>
                                                        </div>
                                                        <div class="user-description">
                                                            Marc is from the product design team with solid project management skills
                                                        </div>
                                                        <div class="card-action has-text-centered">
                                                            <button class="button btn-dash rounded accent-btn is-raised is-fullwidth ripple no-lh">Profile</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Team List -->
                                    </div>
                                    <!-- /Profile team -->

                                    <!-- Profile notifications -->
                                    <div id="profile-notifications" class="is-hidden">
                                        <div class="columns">
                                            <div class="column is-10 is-offset-1">
                                                <div class="flex-card is-top light-bordered raised animated preFadeInUp fadeInUp">
                                                    <div class="title is-3 padding-20">Notifications <span class="b-badge is-accent">6 New</span></div>
                                                    <div class="card-body">
                                                        <ol class="notifications-center">
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <i class="im im-icon-Heart-2"></i>
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">30 minutes ago</div>
                                                                    <b>5 users</b> liked your <b>publication</b> on the company's
                                                                    public blog
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/marc.jpg')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">2 hours ago</div>
                                                                    <b>Marc Walters</b> commented on a <b>task</b>.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/alex.jpg')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">5 hours ago</div>
                                                                    <b>3 new bugs</b> were reported by <b>Alex Walsh</b>,
                                                                    in the <b>Analytics App</b> project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <i class="im im-icon-Add"></i>
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">5 hours ago</div>
                                                                    <b>8 new tasks</b> were added in the
                                                                    <b>Social marketing</b> project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/carolin.png')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">Yesterday, 09:31am</div>
                                                                    <b>Marjory Cambell</b> joined the <b>Analytics App</b>                                                                    project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li>
                                                                <div class="icon is-hidden-mobile">
                                                                    <i class="im im-icon-Yes"></i>
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">Yesterday, 08:42am</div>
                                                                    <b>3 tasks</b> were approved in the <b>Social marketing</b>                                                                    project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li class="is-old">
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/anthony.jpg')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">Monday, 07:57pm</div>
                                                                    <b>Anthony Briggs</b> joined the <b>Analytics App</b>                                                                    project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li class="is-old">
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/marc.jpg')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">oct 23, 11:02am</div>
                                                                    <b>Marc Walters</b> commented on a <b>task</b> assigned
                                                                    to you in the <b>Social marketing</b> project.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                            <!-- Notification item -->
                                                            <li class="is-old">
                                                                <div class="icon is-hidden-mobile">
                                                                    <img src="{{asset('/images/avatars/dan.png')}}" alt="">
                                                                </div>
                                                                <div class="description">
                                                                    <div class="timestamp">oct 22, 2:12pm</div>
                                                                    <b>Dan Baxter</b> sent you an <b>email</b> with <b>3 attachments</b>.
                                                                </div>
                                                                <div class="controls is-hidden-mobile">
                                                                    <span data-toggle="tooltip" data-placement="top" data-title="Delete"><i class="sl sl-icon-trash"></i></span>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                        <!-- Load more -->
                                                        <div class="has-text-centered mt-40">
                                                            <button class="button btn-dash is-raised accent-btn rounded ripple no-lh">Load more</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Profile notifications -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Sections -->
                </div>
            </div>
        </div>
        <!-- Profile page wrapper -->
        <div class="fab__ripple"></div>
        <div class="hamburger"></div>
    </div>
    <!-- Profile avatar -->
</li>