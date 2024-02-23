
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../css/chat_admin.css">
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <section class="container-content">
        <div id="nav">
            <!-- nav -->
        </div> 
        <div class="content">
            <div class="content-label">
                <h1>Chat</h1>
                <div class="icons">
                    <div class="icon-content">
                        <img src="../svg_icon/fluent--chat-16-filled.svg" alt="" srcset="">
                    </div>
                    <div class="icon-content">
                        <img src="../svg_icon/ic--round-notifications.svg" alt="" srcset="">
                    </div>
                    <div class="icon-content">
                        <img src="../svg_icon/ic--baseline-menu.svg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="chat-content">
                <div class="active-menu">
                    <div class="search-menu">
                        <input type="text" name="search" id="search" class="search-input" placeholder="Search">
                        <img src="../svg_icon/ic--sharp-search.svg" alt="search icon">
                    </div>
                    <div class="list-active" id="list_active">
                        
                    </div>
                </div>
                <div class="chat-box">
                    <div class="sender-info">
                        <div class="user-profile-img">

                        </div>
                        <div class="name-sender" id="name_sender">
                            
                        </div>
                    </div>
                    <hr>
                    <div class="message-content">
                        <div class="message-history" id="message_container">
                            
                        </div>
                    </div>
                    <form class="input-message" id="input_form">
                        <img src="../svg_icon/ic--baseline-attachment.svg" alt="attach icon">
                        <img src="../svg_icon/ic--baseline-insert-photo.svg" alt="insert photo icon">
                        <textarea name="message" id="message"></textarea>
                        <img src="../svg_icon/ic--round-send.svg" alt="Send icon" id="btn_submit_icon">
                        <button style="display: none" id="btn_submit">hidden</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="../js/chat_admin.js"></script>
</html>