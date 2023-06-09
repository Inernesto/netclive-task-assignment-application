<div class="sidebar" id="sidebar">
    
    <a href="/netclive-task-assignment-application/public/" class="logo"><span>N</span>etclive</a>

    <nav class="navbar">
        <div class="dashboard-info">
            <a href="/netclive-task-assignment-application/public/?worker/index">worker</a>
        </div>
        
        <div class="notification">
            <a href="/netclive-task-assignment-application/public/?worker/show+notifications+tabs" >notifications</a>
            <div class="icon <?php echo ($notificationsTabs) ? "active" : ""; ?>"></div>
        </div>
        <a href="/netclive-task-assignment-application/public/?worker/show+requests">Requests</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+create+task+form">create task</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+assigned+tasks">assigned tasks</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+unassigned+tasks">unassigned tasks</a>
        <a href="/netclive-task-assignment-application/public/?worker/all+users">all users</a>
        <a href="/netclive-task-assignment-application/public/?worker/all+tasks">all tasks</a>
        <a href="#" id="sales-nav">sales department</a>
        <a href="/netclive-task-assignment-application/public/?worker/sales+users" class="sub-nav" id="sales-sub-nav">users</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+sales+assigned+tasks" class="sub-nav" id="sales-sub-nav">assigned task</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+sales+unassigned+tasks" class="sub-nav" id="sales-sub-nav">unassigned task</a>
        <a href="#" id="production-nav">production department</a>
        <a href="/netclive-task-assignment-application/public/?worker/production+users" class="sub-nav" id="production-sub-nav">users</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+production+assigned+tasks" class="sub-nav" id="production-sub-nav">assigned task</a>
        <a href="/netclive-task-assignment-application/public/?worker/show+production+unassigned+tasks" class="sub-nav" id="production-sub-nav">unassigned task</a>
    </nav>
</div>

<header>
    <h2>welcome <?php echo $auth->firstName; ?></h2>
    <div class="icons">
        <a href="/netclive-task-assignment-application/public/?login/cancel"><i class="fas fa-sign-out" id="log-out-btn"></i> log out</a>
    </div>
</header>