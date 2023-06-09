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

        <section class="task-info">
            <h2>list of unassigned tasks for sales department</h2>

            <table class="table">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Name</td>
                        <td>Task Cartegory</td>
                        <td>Department</td>
                        <td>Description</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if($tasks) : ?>
                        <?php foreach($tasks as $task) : ?>
                            <tr>
                                <td>
                                    <?php echo ucfirst($task->id); ?>
                                </td>
                        
                                <td>
                                    <?php echo ucfirst($task->name); ?>
                                </td>

                                <td>
                                    <?php echo ucfirst($task->taskCartegory); ?>
                                </td>

                                <td>
                                    <?php echo ucfirst($task->department); ?>
                                </td>

                                <td>
                                    <?php echo ucfirst($task->description); ?>
                                </td>

                                <td>
                                    <?php echo ucfirst($task->status); ?>
                                </td>

                                <td>
                                    <a class="btn assign-btn" href="/netclive-task-assignment-application/public/?department+manager/show+assign+task+form/<?php echo $task->id; ?>">assign</a>
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