<?php  require_once("header.php"); ?>

<body>
    <?php  require_once("side_nav.php"); ?>

    <div class="main">
        <div class="message <?php echo isset($data["message"]) ? "active" : ""; ?>">
            <p><?php echo isset($data["message"]) ? $data["message"] : ""; ?></p>
        </div>

        <div class="error <?php echo isset($data["error"]) ? "active" : ""; ?>">
            <p><?php echo isset($data["error"]) ? $data["error"] : ""; ?></p>
        </div>

        <section class="notifications-tab">
            <h2>notifications</h2>

            <table class="table">
                <thead>
                    <tr>
                        <td>action</td>
                        <td>time</td>
                        <td><a href="/netclive-task-assignment-application/public/?department+manager/notification+view+update" class="btn btn-notification-tab <?php echo ($notificationsTabs) ? "active" : ""; ?>">mark as seen</a></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if($notificationsTabs): ?>
                    
                        <?php foreach($notificationsTabs as $notificationsTab) : ?>
                            <tr>
                                <td>
                                    <?php echo ucfirst($notificationsTab->action); ?>
                                </td>

                                <td>
                                    <?php echo date("D, F j, Y, g:i a", strtotime($notificationsTab->time)); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>        
        </section>
    </div>
</body>

<?php  require_once("footer.php"); ?>