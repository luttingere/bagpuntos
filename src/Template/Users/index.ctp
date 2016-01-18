<h1>Users Data</h1>
<div class="row">
    <?php if(!empty($users)): foreach($users as $user): ?>
    <div class="post-box">
        <div class="post-content">
            <div class="caption">
                <h4><a href="javascript:void(0);"><?php echo $user->name; ?></a></h4>
                <p><?php echo $user->last_name; ?></p>
                <p><?php echo $user->id_document; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
    <p class="no-record">No post(s) found......</p>
    <?php endif; ?>
</div>