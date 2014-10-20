<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <div class="row-fluid">
        <div class="clearfix"></div>
        <?php if(isset($leftCol)) echo $leftCol;?>

            <div class="span7">
                <!-- BEGIN PORTLET-->
                <div class="portlet">
                    <div class="portlet-title line">
                        <h4><i class="icon-comments"></i>Chats</h4>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>

                            <a href="javascript:;" class="reload"></a>

                        </div>
                    </div>
                    <div class="portlet-body" id="chats">
                        <div id="chat_content" class="scroller" data-height="343px" data-always-visible="1" data-rail-visible1="1">
                            <ul class="chats">
                                <?php if(!empty($chat)) echo $chat; else echo '<li>Виберіть користувача і розпочніть спілкування</li>' ?>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-cont">
                                <input id="sendmess" class="m-wrap" type="text" placeholder="Type a message here..." />
                            </div>
                            <div class="btn-cont">
                                <span class="arrow"></span>
                                <a data-id="<?php echo $user->id?>" data-name="<?php echo $user->username?>" data-avatar="<?php echo (!empty($user->avatar)) ?'content/users_avatar/'. $user->avatar :'assets/img/avatar.png' ?>" href="javascript:;" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER-->
</div>