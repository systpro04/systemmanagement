<div class="row project-wrapper">
    <div class="col-xxl-12">
        <div class="row">
            <div class="col-xl-3">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary rounded-2 fs-2">
                                    <iconify-icon icon="logos:codersrank-icon" class="fs-25"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="fw-bold text-muted text-truncate mb-3">System Programmers </p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0 text-end"><span class="counter-value"
                                            data-target="<?php echo $programmers_count; ?>"></span></h4>
                                </div>
                                <p class="text-muted text-truncate mb-0 fs-6">Active Programmers </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning rounded-2 fs-2">
                                    <iconify-icon icon="ix:analyze" class="fs-35"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="fw-bold text-muted text-truncate mb-3">System Analysts </p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0 text-end"><span class="counter-value"
                                            data-target="<?php echo $analysts_count; ?>"></span></h4>
                                </div>
                                <p class="text-muted text-truncate mb-0 fs-6">Active Analysts </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success rounded-2 fs-2">
                                    <iconify-icon icon="devicon:xcode" class="fs-35"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="fw-bold text-muted text-truncate mb-3">
                                    RMS Team </p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0 text-end"><span class="counter-value"
                                            data-target="<?php echo $others_count; ?>"></span> </h4>
                                </div>
                                <p class="text-muted text-truncate mb-0 fs-6">Active Rms </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-light rounded-2 fs-2">
                                    <iconify-icon icon="emojione:file-folder" class="fs-35"></iconify-icon>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="fw-bold text-muted text-truncate mb-3">
                                    My Workloads </p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0 text-end"><span class="counter-value"
                                            data-target="<?php echo $my_workloads; ?>"></span> </h4>
                                </div>
                                <p class="text-muted text-truncate mb-0 fs-6">Number of Workloads </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-8">
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-animate">
                    <div class="card-header align-items-center d-flex">
                        <h6 class="card-title mb-0 flex-grow-1 fw-bold text-uppercase">Upcoming Meeting Schedules </h6>
                    </div>
                    <div class="card-body" data-simplebar style="max-height: 400px;">
                        <ul id="upcoming-event-list" class="list-group list-group-flush border-dashed"></ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-animate">
                    <div class="card-header align-items-center d-flex">
                        <h6 class="card-title mb-0 flex-grow-1 fw-bold text-uppercase"> ALL FILES MONITORING | DIRECTORY
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="nav nav-tabs nav-justified mb-1">
                            <a href="javascript:void(0);" class="nav-link active" id="newTab" data-type="new">New System
                                | Directory</a>
                            <a href="javascript:void(0);" class="nav-link" id="currentTab" data-type="current">Current
                                System | Directory</a>
                        </div>
                        <div id="system_monitoring" class="tab-pane show apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4">
        <div class="card card-animate" data-simplebar style="max-height: 450px;">
            <div class="card-header border-0">
                <h6 class="card-title mb-0 fw-bold fs-26" style="font-family: 'BirthdayFont';"><iconify-icon icon="noto:confetti-ball"></iconify-icon> Birthdays <iconify-icon icon="noto:confetti-ball"></iconify-icon></h6>
            </div>
            <div class="card-body pt-0">
                <div class="upcoming-scheduled">
                    <input type="date" id="birthday-calendar" class="form-control" data-provider="flatpickr"
                        data-time-inline="true" />
                </div>
                <hr>
                <!-- <div class="card mt-3"> -->
                <!-- <div class="card-header"> -->
                <h3 class="card-title capitalized fw-bold fs-22" style="font-family: 'BirthdayFont';"><iconify-icon
                        icon="twemoji:birthday-cake"></iconify-icon> This Month`s Birthday List <iconify-icon icon="noto:confetti-ball"></iconify-icon>: </h3>
                <!-- </div> -->
                <!-- <div class="card-body" data-simplebar style="max-height: 350px;"> -->
                <div id="birthday-list"></div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function () {
        const calendarElement = document.getElementById('birthday-calendar');
        const birthdayList = $('#birthday-list');
        const currentDate = new Date();

        function update_birthdays(month, year) {
            $('#birthday-list').html('<div class="text-center text-primary "><iconify-icon icon="svg-spinners:bars-rotate-fade" width="30" height="30"></iconify-icon></div>');
            $.ajax({
                url: "<?php echo base_url('get_birthdays'); ?>",
                type: "GET",
                data: { month: month, year: year },
                dataType: "json",
                success: function (response) {
                    birthdayList.empty();
                    let todayBirthdays = [];

                    if (response.status === 'success' && response.data.length > 0) {
                        const birthdayDates = [];

                        response.data.forEach((birthday) => {
                            const birthDate = new Date(birthday.birthdate);
                            birthdayDates.push(birthDate.getDate());

                            const formattedDate = birthDate.toLocaleDateString('en-US', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                            });

                            let age = year - birthDate.getFullYear();
                            const isBeforeBirthday =
                                currentDate.getMonth() + 1 < month ||
                                (currentDate.getMonth() + 1 === month &&
                                    currentDate.getDate() < birthDate.getDate());
                            if (isBeforeBirthday) {
                                age--;
                            }

                            // Capitalize the first and last name before displaying
                            const fullName = `${birthday.firstname} ${birthday.lastname}`;
                            const formattedName = capitalizeName(fullName);

                            // Check if today is the person's birthday
                            const isTodayBirthday = birthDate.getDate() === currentDate.getDate() &&
                                birthDate.getMonth() === currentDate.getMonth();

                            if (isTodayBirthday) {
                                todayBirthdays.push(formattedName);
                            }

                            const bday_photo = birthday.photo.replace(/(\.\.\/)+/g, '');
                            let birthdayHTML = `
                            <div class="mini-stats-wid d-flex align-items-center mt-2">
                                <div class="flex-shrink-0 avatar-sm">
                                    <span class="mini-stat-icon avatar-title rounded-circle text-danger bg-danger-subtle fs-4">
                                        <img class="rounded-circle header-profile-user avatar-sm" src="http://172.16.161.34:8080/hrms/${bday_photo}" alt=""/>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-bold">${formattedName}`;

                                if (isTodayBirthday) {
                                    birthdayHTML += ' <iconify-icon icon="vaadin:check-circle" style="color: green; font-weight: bold"></iconify-icon>';
                                }

                                birthdayHTML += `</h6>
                                    <p class="text-muted mb-0 fs-11">${formattedDate}</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="text-muted mb-0 fs-15"><span class="badge bg-success fw-bold">${age} year's old</span></p>
                                </div>
                            </div>`;
                            birthdayList.append(birthdayHTML);
                        });
                        updateCalendar(birthdayDates, month, year, response.data);
                    }
                },
            });
        }


        // Helper function to capitalize the first letter of each word
        function capitalizeName(name) {
            return name.split(' ').map(word => {
                return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
            }).join(' ');
        }


        function updateCalendar(birthdayDates, month, year, birthdayData) {
            const calendarInstance = calendarElement._flatpickr;
            const today = new Date();
            let todayBirthdays = []; // To store names of people with birthdays today

            if (calendarInstance) {
                calendarInstance.set('disable', [
                    function (date) {
                        return !(date.getMonth() === month - 1 && birthdayDates.includes(date.getDate()));
                    },
                ]);

                calendarInstance.set('onDayCreate', function (dObj, dStr, fp, dayElem) {
                    const day = parseInt(dayElem.innerText);

                    if (dayElem.classList.contains('prevMonthDay') || dayElem.classList.contains('nextMonthDay')) {
                        return;
                    }

                    // If it's a birthday date, highlight it
                    if (birthdayDates.includes(day)) {
                        dayElem.classList.add('highlighted-day');

                        const birthdaysOnDay = birthdayData.filter(b => {
                            const birthDate = new Date(b.birthdate);
                            return birthDate.getDate() === day && birthDate.getMonth() + 1 === month;
                        });

                        // Extract names for today's birthdays
                        if (
                            today.getDate() === day &&
                            today.getMonth() + 1 === month &&
                            today.getFullYear() === year
                        ) {
                            todayBirthdays = birthdaysOnDay.map(person => `${person.firstname} ${person.lastname}`);
                        }

                        const tooltipContent = birthdaysOnDay
                            .map(person => `${person.lastname}, ${person.firstname}`)
                            .join('<br>');
                        dayElem.setAttribute('data-bs-toggle', 'tooltip');
                        dayElem.setAttribute('data-bs-placement', 'top');
                        dayElem.setAttribute('data-bs-html', 'true');
                        dayElem.setAttribute('title', tooltipContent);

                        // Replace today's date with a cake icon if it's someone's birthday
                        if (
                            today.getDate() === day &&
                            today.getMonth() + 1 === month &&
                            today.getFullYear() === year
                        ) {
                            dayElem.innerHTML = '<iconify-icon icon="emojione-v1:birthday-cake" style="font-size: 35px;"></iconify-icon>';
                        }

                        dayElem.addEventListener('click', (event) => {
                            event.preventDefault();
                            event.stopPropagation();
                            calendarInstance.close();
                        });
                    }
                });

                const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                tooltipElements.forEach(dayElem => {
                    new bootstrap.Tooltip(dayElem);
                });
            }
        }


        const flatpickrInstance = flatpickr(calendarElement, {
            defaultDate: currentDate,
            inline: true,
            onMonthChange: function (selectedDates, dateStr, instance) {
                const newMonth = instance.currentMonth + 1;
                const newYear = instance.currentYear;
                update_birthdays(newMonth, newYear);
            },
            onYearChange: function (selectedDates, dateStr, instance) {
                const newMonth = instance.currentMonth + 1;
                const newYear = instance.currentYear;
                update_birthdays(newMonth, newYear);
            },
            onReady: function () {
                update_birthdays(currentDate.getMonth() + 1, currentDate.getFullYear());
            },
        });

        function loadUpcomingEvents() {
            $('#upcoming-event-list').html('<div class="text-center text-primary "><iconify-icon icon="svg-spinners:bars-rotate-fade" width="30" height="30"></iconify-icon></div>');
            $.ajax({
                url: '<?= base_url("get_upcoming_meetings") ?>',
                type: 'GET',
                dataType: 'json',
                success: function (events) {
                    var eventList = $('#upcoming-event-list');
                    eventList.empty();

                    if (events.length === 0) {
                        eventList.append(`<li class="list-group-item text-primary text-center"><iconify-icon icon="fluent:box-multiple-search-24-filled" width="50" height="50"></iconify-icon><h6 class="mt-1">No meeting scheduled... </h6></li>
                    `);
                    } else {
                        events.forEach(function (event) {
                            var eventHTML = `
                            <li class="list-group-item ps-0">
                                <a href="<?php echo base_url('meeting_schedule'); ?>" class="d-block text-decoration-none">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto blockquote">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 shadow">
                                                <div class="text-center">
                                                    <h5 class="mb-0 fw-bold text-info">${new Date(event.date_meeting).getDate()}</h5>
                                                    <div class="text-muted">${new Date(event.date_meeting).toLocaleString('en-GB', { weekday: 'short' })}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-14 fw-bold">${event.time} - <b>${event.team_name}</b></h5>
                                            <p class="fs-13 mb-0">${event.reasons}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        `;
                            eventList.append(eventHTML);
                        });
                    }
                },
            });
        }

        loadUpcomingEvents();
    });

</script>
<script src="<?php echo base_url(); ?>assets/js/apexcharts.js"></script>

<script>
    let chart;
    function renderChart(chartData, labels, colors) {
        const options = {
            chart: { type: 'polarArea' },
            series: chartData,
            labels: labels,
            colors: colors,
            stroke: { colors: ['#fff'] },
            fill: { opacity: 1 },
            legend: { position: 'bottom' }
        };
        if (chart) {
            chart.destroy();
        }
        chart = new ApexCharts(document.querySelector("#system_monitoring"), options);
        chart.render();

    }
    function fetchChartData(type, typeofsystem) {
        $.ajax({
            url: '<?php echo base_url("Dashboard/getChartData"); ?>',
            type: 'POST',
            data: { type: type, typeofsystem: typeofsystem },
            dataType: 'json',
            success: function (response) {
                renderChart(response.chartData, response.labels, response.colors);
            },
        });
    }
    $(document).ready(function () {
        fetchChartData('new', 'new');
        $('.nav-link').click(function () {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            const type = $(this).data('type');
            fetchChartData(type, type);
        });
    });
</script>

<style>
    .highlighted-day {
        background-color: rgb(244, 244, 244);
        color: rgb(255, 0, 0);
        border-radius: 50%;
        font-weight: bold;
        font-style: italic;
        font-size: 1rem;
    }

    .upcoming-scheduled .flatpickr-calendar .flatpickr-day.selected {
        background-color: transparent !important;
        border-color: transparent !important;
    }
</style>