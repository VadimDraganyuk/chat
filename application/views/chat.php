
    <?php
    foreach ($messages as $message) :
        if($user->id == $message->author_id)
            $isAuthor = $user;
        else
            $isAuthor = $recipient
        ?>
        <li class="<?php echo ($user->id == $message->author_id) ? 'out':'in'?>">
            <img class="avatar" alt="" src="<?php echo (!empty($isAuthor->avatar)) ?'content/users_avatar/'. $isAuthor->avatar :'assets/img/avatar.png' ?>" />
            <div class="message <?php echo ($message->readed == 0 && $isAuthor->id != $user->id)?'new':'';?>">
                <span class="arrow"></span>
                <a href="#" class="name"><?php echo $isAuthor->username; ?></a>
                <span class="datetime"><?php echo ' at '.$message->date?></span>
													<span class="body">
													<?php echo $message->message?>
													</span>
            </div>
        </li>
    <?php endforeach; ?>
