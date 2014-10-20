<div class="span3">
<!-- BEGIN PORTLET-->
<div class="portlet paddingless">
<div class="portlet-title line">
    <h4></h4>
    <div class="tools">
        <a href="javascript:;" class="collapse"></a>

    </div>
</div>
<div class="portlet-body">
<!--BEGIN TABS-->
<div class="tabbable tabbable-custom">
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Всі користувачі</a></li>
<!--    <li><a href="#tab_1_3" data-toggle="tab">Мої діалоги</a></li>-->
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1_1">
    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
<?php if(isset($users))
    foreach ($users as $user) {?>

        <div class="row-fluid rows_user">
            <div class="span6 user-info">
                <img alt="" src="<?php echo (!empty($user->avatar))?'content/users_avatar/'. $user->avatar :'assets/img/avatar.png'?>" />
                <div class="details">
                    <div>
                        <a class="umessage" id='user_<?php echo $user->id?>' data-id="<?php echo $user->id?>" href="#"><?php echo $user->username?></a>
                    </div>
                </div>
            </div>

        </div>
<?php
    }
?>
    </div>
</div>
<!--<div class="tab-pane" id="tab_1_3">-->
<!--    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Robert Nilson</a>-->
<!--                        <span class="label label-success">Approved</span>-->
<!--                    </div>-->
<!--                    <div>29 Jan 2013 10:45AM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 10:45AM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Eric Kim</a>-->
<!--                        <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 12:45PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-important">In progress</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 11:55PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Eric Kim</a>-->
<!--                        <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 12:45PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-important">In progress</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 11:55PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div><a href="#">Eric Kim</a> <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 12:45PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-important">In progress</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 11:55PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div><a href="#">Eric Kim</a> <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 12:45PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-important">In progress</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 11:55PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Eric Kim</a>-->
<!--                        <span class="label label-info">Pending</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 12:45PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="span6 user-info">-->
<!--                <img alt="" src="assets/img/avatar.png" />-->
<!--                <div class="details">-->
<!--                    <div>-->
<!--                        <a href="#">Lisa Miller</a>-->
<!--                        <span class="label label-important">In progress</span>-->
<!--                    </div>-->
<!--                    <div>19 Jan 2013 11:55PM</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</div>
</div>
<!--END TABS-->
</div>
</div>
<!-- END PORTLET-->
</div>