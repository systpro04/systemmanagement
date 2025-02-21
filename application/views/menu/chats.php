<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex gap-1">
                        <div class="chat-leftsidebar">
                            <div class="px-4 pt-4 mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-4">Chats </h5>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <input type="text" class="form-control bg-light border-light"
                                        placeholder="Search here..." id="searchUser" />
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
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
                        </div>
                        <div class="user-chat w-100 overflow-hidden">
                            <div class="chat-content d-lg-flex">
                                <div class="w-100 overflow-hidden position-relative">
                                    <div class="position-relative">
                                        <div class="position-relative" id="users-chat">
                                            <div class="p-3 user-chat-topbar">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-4 col-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                                <a href="javascript: void(0);"
                                                                    class="user-chat-remove fs-18 p-1"><i
                                                                        class="ri-arrow-left-s-line align-bottom"></i></a>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <div class="d-flex align-items-center">
                                                                    <div
                                                                        class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="flex-shrink-0 chat-user-img mt-1">
                                                                            <img id="profile_photo" class="img-thumbnail avatar-sm rounded-circle" style="border-color: orange; display: none">
                                                                        </div>&nbsp;&nbsp;
                                                                        <h5 class="text-truncate mb-0 fs-11 gap-1">
                                                                            <a class="text-reset username"></a>
                                                                        </h5>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar="">
                                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                                                    <div id="defaultChatMessage" class="text-center">
                                                    <iconify-icon icon="fluent-color:chat-more-24" width="200" height="200"></iconify-icon><p class="text-muted mt-3">Select or search a user to start chatting</p></div>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="chat-input-section p-3 p-lg-4 mt-4">
                                            <form id="chatinput-form" enctype="multipart/form-data">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-auto">
                                                        <div class="chat-input-links me-2">
                                                            <div class="links-list-item">
                                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                                    <i class="bx bx-smile align-middle"></i>
                                                                </button>
                                                                <div id="emoji-picker" style="display: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="chat-input-feedback">Please Enter a Message</div>
                                                        <input type="text" class="form-control chat-input bg-light border-light" id="chat-input" placeholder="Type your message..." autocomplete="off" />
                                                        <input type="hidden" class="form-control bg-light border-light" id="receiver_id" autocomplete="off" name="receiver_id" />
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="chat-input-links ms-2">
                                                            <div class="links-list-item">
                                                                <button type="submit" class="btn btn-primary chat-send waves-effect waves-light shadow">
                                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="replyCard" style="display: none;">
                                            <div class="card mb-0">
                                                <div class="card-body py-3">
                                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="conversation-name"></h5>
                                                            <p class="mb-0 reply-message-text"></p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button type="button" id="close_toggle"
                                                                class="btn btn-sm btn-link mt-n2 me-n3 fs-18 shadow-none">
                                                                <i class="bx bx-x align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <textarea id="reply-input" class="form-control mt-2"
                                                        placeholder="Type your reply..."></textarea>
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
        </div>
    </div>
</div>

<script type="module">
    import { EmojiButton } from "https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@4.6.4/dist/index.min.js";

    document.addEventListener("DOMContentLoaded", function () {
        const picker = new EmojiButton();
        const chatInput = document.getElementById("chat-input");
        const emojiBtn = document.getElementById("emoji-btn");

        emojiBtn.addEventListener("click", function (event) {
            event.preventDefault();
            picker.togglePicker(emojiBtn);
        });

        picker.on("emoji", function (selection) {
            chatInput.value += selection.emoji;
        });
    });
</script>




<script>
    $(document).ready(function () {
        let allUsers = [];
        let displayedUsers = [];

        $.ajax({
            url: '<?php echo base_url('get_users'); ?>',
            method: 'GET',
            success: function (response) {
                allUsers = JSON.parse(response);
                displayedUsers = allUsers.filter(user => user.has_messages === 1);
                displayUsers(displayedUsers);
            }
        });

        function displayUsers(users) {
            let userListHtml = '';

            users.forEach(user => {
                userListHtml += `
                <li id="contact-id-${user.emp_id}" class="chat-user-item" data-name="direct-message">
                    <a href="javascript:void(0);" onclick="openChat('${user.emp_id}', '${user.name}', '${user.photo}')">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 chat-user-img mt-1">
                                <img src="http://172.16.161.34:8080/hrms/${user.photo}" class="img-thumbnail avatar-xs rounded-circle" style="border-color: orange"> 
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="text-truncate mb-0 fw-bold fs-10">&nbsp;&nbsp; ${user.name}</p>
                                <small class="text-muted d-block">&nbsp;&nbsp; ${user.last_message || 'No messages yet'}</small>
                            </div>
                            <div class="text-end text-muted mt-2">
                                <small style="font-size: .6rem">${user.last_time || ''}</small>
                            </div>
                        </div>
                    </a>
                </li>
                `;
            });

            $('#userList').html(userListHtml);
        }

        $("#searchUser").on("keyup", function () {
            let searchValue = $(this).val().toLowerCase();

            if (searchValue === "") {
                displayUsers(displayedUsers);
            } else {
                let filteredUsers = allUsers.filter(user => user.name.toLowerCase().includes(searchValue));
                displayUsers(filteredUsers);
            }
        });


        $("#chatinput-form").submit(function (e) {
            e.preventDefault();
            let message = $("#chat-input").val();
            let receiver_id = $("#receiver_id").val();
            let reply_to = $("#reply_to").val();

            if (message === "" || receiver_id === "") {
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                };

                toastr.error(`Please add a message or select a recipient...`);
                $('#chat-input').each(function () {
                    if ($(this).val() === '') {
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                return;
            }

            $.ajax({
                url: '<?php echo base_url('send_message'); ?>',
                method: 'POST',
                data: {
                    receiver_id: receiver_id,
                    message: message,
                    reply_to: reply_to
                },
                success: function (response) {
                    let data = JSON.parse(response);
                    if (data.status === "success") {
                        let alignment = data.reply_to ? "left" : "right";
                        let bgColor = data.reply_to ? "bg-light" : "bg-primary text-white";
                        $("#users-conversation").append(`
                        <li class="chat-list ${alignment}">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap ${bgColor}">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">${data.message}</p>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">${formatTime(new Date())}</small>
                                        <span class="text-success check-message-icon"><i class="bx bx-check"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    `);
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                        };
                        toastr.success(`Message successfully sent...`);

                        updateMessages();
                        addToChatList(receiver_id, $(".user-chat-topbar .username").text(), data.photo, data.message, formatTime(new Date()));
                        openChat(receiver_id, $(".user-chat-topbar .username").text(), data.photo);
                        
                        setTimeout(scrollToBottom, 200);
                        $("#chat-input").val("");

                        $('#users-conversation').scrollTop($('#users-conversation')[0].scrollHeight);
                    }
                }
            });
        });
    });


    function formatTime(dateString) {
        const date = new Date(dateString);
        let hours = date.getHours();
        let minutes = date.getMinutes();
        let ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12;
        minutes = minutes < 10 ? '0' + minutes : minutes;

        return hours + ':' + minutes + ' ' + ampm;
    }


    function openChat(receiver_id, userName, photo) {
        $("#receiver_id").val(receiver_id);
        $(".user-chat-topbar .username").text(userName);    
        $("#profile_photo").attr("src", `http://172.16.161.34:8080/hrms/${photo}`).show();

        let chatConversationList = $("#users-conversation");
            chatConversationList.html(`
            <div id="elmLoader">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `);
        $("#defaultChatMessage").hide();

        $(".chat-user-item").removeClass("active-user");

        $(`#contact-id-${receiver_id}`).addClass("active-user");


        $.ajax({
            url: '<?php echo base_url('get_messages'); ?>',
            method: 'POST',
            data: {
                user_id: '<?php echo $this->session->userdata("emp_id"); ?>',
                receiver_id: receiver_id
            },
            success: function (response) {
                let messages = JSON.parse(response);
                chatConversationList.html("");

                messages.forEach((msg) => {
                    let alignment = msg.sender_id == receiver_id ? "left" : "right";
                    let imagePosition = msg.sender_id == receiver_id ? "start" : "end";
                    let messageHTML = 
                        `<li class="chat-list ${alignment}" id="chat-list-${msg.id}">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="flex-shrink-0 chat-user-img mt-1" style="margin-right: 3px">
                                            <img src="http://172.16.161.34:8080/hrms/${msg.photo}" class="img-thumbnail avatar-xs rounded-circle" style="border-color: orange;">
                                        </div>
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content"><small>${msg.message}</small></p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop mt-2">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item reply-message" href="#">
                                                    <i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply
                                                </a>
                                                <a class="dropdown-item delete-item" href="#">
                                                    <i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">${formatTime(msg.date_send)}</small>
                                        <span class="text-success check-message-icon">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>`;

                    chatConversationList.append(messageHTML);
                });

                addToChatList(receiver_id, userName, messages.photo, messages.last_message, messages.last_time);
                setTimeout(scrollToBottom, 200);
            }
        });

    }

    function addToChatList(emp_id, name, photo, last_message, last_time) {
        if (!$(`#contact-id-${emp_id}`).length) {
            let newUserHtml = `

            <li id="contact-id-${emp_id}" class="chat-user-item" data-name="direct-message">
                    <a href="javascript:void(0);" onclick="openChat('${emp_id}', '${name}', '${photo}')">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 chat-user-img mt-1">
                                <img src="http://172.16.161.34:8080/hrms/${photo}" class="img-thumbnail avatar-xs rounded-circle" style="border-color: orange"> 
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="text-truncate mb-0 fw-bold fs-10">&nbsp;&nbsp; ${name}</p>
                                <small class="text-muted d-block">&nbsp;&nbsp; ${last_message || 'No messages yet'}</small>
                            </div>
                            <div class="text-end text-muted mt-2">
                                <small style="font-size: .6rem">${last_time || ''}</small>
                            </div>
                        </div>
                    </a>
                </li>
        `;
            $('#userList').prepend(newUserHtml);
        }
    }

    function scrollToBottom() {
        let chatContainer = document.querySelector("#chat-conversation");
        if (chatContainer) {
            let simpleBarInstance = SimpleBar.instances.get(chatContainer);
            if (simpleBarInstance) {
                let scrollElement = simpleBarInstance.getScrollElement();
                scrollElement.scrollTop = scrollElement.scrollHeight;
            } else {
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
        }
    }

</script>



<style>
    .chat-user-item {
        padding: 10px;
        transition: background 0.3s;
    }

    .chat-user-item:hover {
        background: rgba(0, 123, 255, 0.1);
        cursor: pointer;
    }

    .chat-user-item.active-user {
        background: rgba(0, 123, 255, 0.2);
        font-weight: bold;
    }
    .emoji-picker__wrapper{
        z-index: 999999999;
    }

</style>