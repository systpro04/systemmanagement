<div class="container-fluid">
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="chat-leftsidebar">
            <div class="px-4 pt-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="mb-4">Chats </h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                            title="Add Contact">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-soft-success btn-sm shadow-none">
                                <i class="ri-add-line align-bottom"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="search-box">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here..." />
                    <i class="ri-search-2-line search-icon"></i>
                </div>

            </div> <!-- .p-4 -->

            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab">
                        Chats
                    </a>
                </li>
            </ul>

            <div class="tab-content text-muted">
                <div class="tab-pane active" id="chats" role="tabpanel">
                    <div class="chat-room-list pt-3" data-simplebar="">
                        <div class="chat-message-list">
                            <ul class="list-unstyled chat-list chat-user-list" id="userList">
                            </ul>
                        </div>
                        <div class="chat-message-list">
                            <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end tab contact -->
        </div>
        <!-- end chat leftsidebar -->
        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden">

            <div class="chat-content d-lg-flex">
                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <!-- conversation user -->
                    <div class="position-relative">
                        <div class="position-relative" id="users-chat">
                            <div class="p-3 user-chat-topbar">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 col-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                                        class="ri-arrow-left-s-line align-bottom"></i></a>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate mb-0 fs-16"><a
                                                                class="text-reset username" data-bs-toggle="offcanvas"
                                                                href="#userProfileCanvasExample"
                                                                aria-controls="userProfileCanvasExample">
                                                            </a></h5>
                                                        <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                            <small></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar="">
                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">

                                </ul>
                            </div>
                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert">
                            </div>
                        </div>

                        <div class="chat-input-section p-3 p-lg-4">
                            <form id="chatinput-form" enctype="multipart/form-data">
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="chat-input-links me-2">
                                            <div class="links-list-item">
                                                <button type="button"
                                                    class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                    <i class="bx bx-smile align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input type="text" class="form-control chat-input bg-light border-light"
                                            id="chat-input" placeholder="Type your message..." autocomplete="off" />
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ms-2">
                                            <div class="links-list-item">
                                                <button type="submit"
                                                    class="btn btn-primary chat-send waves-effect waves-light shadow">
                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="replyCard">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="conversation-name"></h5>
                                            <p class="mb-0" />
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" id="close_toggle"
                                                class="btn btn-sm btn-link mt-n2 me-n3 fs-18 shadow-none">
                                                <i class="bx bx-x align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat-wrapper -->

</div>

<script>
$.ajax({
    url: '<?php echo base_url('get_users'); ?>',
    method: 'GET',
    success: function(response) {
        const users = JSON.parse(response);
        let userListHtml = '';

        users.forEach(user => {
            userListHtml +=
                '<li id="contact-id-' +
                user.id +
                '" data-name="direct-message" class="">' +
                '   <a href="javascript:void(0);" onclick="openChat(' + user.id + ', \'' + user.name + '\')">' +
                '       <div class="d-flex align-items-center">' +
                '           <div class="flex-shrink-0 chat-user-img ' +
                user.status +
                '" alt="' +
                user.name +
                '" class="rounded-circle">' +
                '               </div>' +
                '           </div>' +
                '           <div class="flex-grow-1 overflow-hidden">' +
                '               <p class="text-truncate mb-0">' +
                user.name +
                '</p>' +
                '           </div>' +
                '       </div>' +
                '   </a>' +
                '</li>';
        });
        $('#userList').html(userListHtml);
    },
});

function openChat(userId, userName, userAvatar, userStatus) {
    // Update top bar with selected user's information
    const chatTopBar = document.querySelector(".user-chat-topbar .username");
    const userImg = document.querySelector(".user-chat-topbar .chat-user-img img");
    const userStatusEl = document.querySelector(".user-chat-topbar .userStatus small");

    chatTopBar.textContent = userName;
    chatTopBar.setAttribute("href", "#userProfileCanvasExample");
    chatTopBar.setAttribute("aria-controls", "userProfileCanvasExample");

    // Update avatar
    userImg.src = userAvatar || "assets/images/users/default-avatar.jpg";
    userImg.alt = userName;

    // Update user status
    userStatusEl.textContent = userStatus === "online" ? "Online" : "Offline";

    // Add/remove 'online' or 'offline' classes for user status
    const chatUserImgDiv = document.querySelector(".user-chat-topbar .chat-user-img");
    chatUserImgDiv.classList.remove("online", "offline");
    chatUserImgDiv.classList.add(userStatus);

    // Clear previous chat messages and show a loader
    const chatConversationList = document.querySelector("#users-conversation");
    chatConversationList.innerHTML = `
        <div id="elmLoader">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    `;

    // Simulate fetching chat messages
    setTimeout(() => {
        chatConversationList.innerHTML = `
            <li class="chat-message">
                <div class="d-flex">
                    <div class="flex-grow-1 ms-3">
                        <div class="message-box">
                            <p class="text-muted mb-0">Hello, ${userName}!</p>
                        </div>
                    </div>
                </div>
            </li>
        `;
    }, 1000);
}



</script>