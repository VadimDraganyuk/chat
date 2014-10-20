
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="#">

            </a>

            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="/assets/img/menu-toggler.png" alt="" />
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <li class="dropdown" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelope-alt"></i>
                        <?php if (isset($totalMessage) && $totalMessage>0):?>
                            <span class="badge"><?php echo $totalMessage?></span>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p>You have <?php  echo (isset($totalMessage) && $totalMessage>0)? $totalMessage : '0' ?> new messages</p>
                        </li>
                       <?php if(isset($messages)) foreach ($messages as $message) {?>

                        <li>
                            <a id="minimess" data-id="<?php echo $message->author_id ?>">
                                <span class="photo"><img src="<?php echo (!empty($message->avatar)) ?'content/users_avatar/'. $message->avatar :'assets/img/avatar.png' ?>" alt="" /></span>
								<span class="subject">
								<span class="from"><?php echo $message->username?></span>
								<span class="time"><?php echo date ("H:i", strtotime ($message->date));?></span>
								</span>
								<span class="message">
								<?php echo $message->message?>
								</span>
                            </a>
                        </li>

                       <?php    }
                       ?>
<!--                        <li class="external">-->
<!--                            <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>-->
<!--                        </li>-->
                    </ul>
                </li>
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="username"><?php if (isset($user)) echo $user->username; ?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
<!--                        <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>-->
<!--                        <li><a href="calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>-->
<!--                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>-->
<!--                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>-->
<!--                        <li class="divider"></li>-->
                        <li><a href="/logout"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
