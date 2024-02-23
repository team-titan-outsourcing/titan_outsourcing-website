<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard_admin.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.css">
    <script src="../js/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <section class="container-content">
       <div id="nav">
            <!-- nav -->
        </div> 
        <div class="content">

            <div class="title-content">
                <div class="title-content-label">
                    <h1>Dashboard</h1>
                    <p>dashboard > <span>home</span></p>
                </div>
               <div class="title-content-icon">
                    <img src="../svg_icon/fluent--chat-16-filled.svg" alt="logo">
                    <img src="../svg_icon/ic--round-notifications.svg" alt="logo">
                    <img src="../svg_icon/ic--baseline-menu.svg" alt="logo">
               </div>
            </div>

            <div class="category-data">
                <div class="cards" id="card-1">
                    <div class="card-data-label">
                        <p class="card-data">124</p>
                        <p class="card-label">clients</p>
                    </div>
                    <img src="../images/client.png" alt="pic_content" class="img-content">
                </div>
                <div class="cards" id="card-2">
                    <div class="card-data-label">
                        <p class="card-data">345</p>
                        <p class="card-label">virtual assistant</p>
                    </div>
                    <img src="../images/va.png" alt="pic_content" class="img-content">
                </div>
                <div class="cards" id="card-3">
                    <div class="card-data-label">
                        <p class="card-data">56</p>
                        <p class="card-label">matching</p>
                    </div>
                    <img src="../images/matching.png" alt="pic_content" class="img-content">
                </div>
            </div>
            
            <div class="table-graph">
                <div class="content-table">
                    <table id="datatable">
                        <thead>
                            <tr>
                                <th>Client's name</th>
                                <th>Email</th>
                                <th>Contact #</th>
                                <th>Type of VA</th>
                                <th>CRM Tools</th>
                                <th>Working Hours</th>
                                <th>Tasks</th>
                                <th>Time Tracker</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            
                        </tbody>
                    </table>
                </div>
                <div class="content-graph">
                    <div class="graph graph-1">
                        <div class="label-btn">
                            <div class="label">
                                <p class="label-match">matching progress</p>
                                <p class="label-category">Month - January</p>
                            </div>
                            <div class="btn-content">
                                <button>Monthly</button>
                                <button>Annual</button>
                            </div>
                        </div>
                        <canvas id="line" class="graph-line"></canvas>
                    </div>
                    <div class="graph graph-2">
                        <div class="data-num">
                            <p class="label-num">
                                users
                            </p>
                            <p class="num" id="num_users">
                                469
                            </p>
                            <div class="num-users">
                                <p class="num-user">
                                    <span class="num-user-content num-user-1"></span>
                                     345
                                    <span class="label-user">VA's</span>
                                </p>
                                <p class="num-user">
                                    <span class="num-user-content num-user-2"></span>
                                     124 
                                    <span class="label-user">Clients</span>
                                </p>
                                <p class="num-user">
                                    <span class="num-user-content num-user-3"></span>
                                     46 
                                    <span class="label-user">Inactive</span>
                                </p>
                            </div>
                        </div>
                        <canvas id="dunot" class="dunot"></canvas>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
</body>
<script src="../js/dashboard_admin.js"></script>
</html>