const wordMonth = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
const wordDay_sun = 'Sunday';
const wordDay_mon = 'Monday';
const wordDay_tue = 'Tuesday';
const wordDay_wed = 'Wednesday';
const wordDay_thu = 'Thursday';
const wordDay_fri = 'Friday';
const wordDay_sat = 'Saturday';
const DAYS_OF_WEEK = new Array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
var tiva_timetables = [];
var tiva_current_date = new Date();
var tiva_current_month = tiva_current_date.getMonth() + 1;
var tiva_current_year = tiva_current_date.getFullYear();

function sortByTime(a, b) {
    if (a.axis_start_time < b.axis_start_time) {
        return -1
    } else {
        if (a.axis_start_time > b.axis_start_time) {
            return 1
        } else {
            return 0
        }
    }
}

function sortByEndTime(a, b) {
    if (a.axis_end_time < b.axis_end_time) {
        return -1
    } else {
        if (a.axis_end_time > b.axis_end_time) {
            return 1
        } else {
            return 0
        }
    }
}

// sort by end time but if continues_to_next_day = true then this is sorted at the end
/*
function sortByEndTimeDaySpan(a, b) {
    if (a.continues_to_next_day && b.continues_to_next_day) {
        return sortByEndTime(a, b);
    } else if (a.continues_to_next_day) {
        return 1;
    } else if (b.continues_to_next_day) {
        return -1;
    }
    return sortByEndTime(a, b);
}
*/

function getMinTime(entries) {
    for (var i = 0; i < entries.length; i++) {
        if (entries[i].axis_start_time) {
            return parseInt(entries[i].axis_start_time, 10)
        }
    }
}

function getMaxTime(entries) {
    entries.sort(sortByEndTime);
    for (var i = entries.length - 1; i >= 0; i--) {
        if (entries[i].axis_end_time) {
            var timeArr = entries[i].axis_end_time.split(':');
            if (timeArr[1] == '00') {
                return timeArr[0]
            } else {
                return parseInt(timeArr[0], 10) + 1
            }
        }
    }
}

function calHour(time) {
    var timeArr = time.split(':');
    return parseInt(timeArr[0], 10) + (timeArr[1] / 60)
}

function getPosition(min_hour, time) {
    return parseInt((calHour(time) - min_hour) * 55, 10)
}

function getHeight(start_time, end_time) {
    return parseInt((calHour(end_time) - calHour(start_time)) * 55, 10)
}

function checkMulti(entry, entries) {
    var result = 1;
    for (var i = 0; i < entries.length; i++) {
        if (entry.id != entries[i].id) {
            if (((calHour(entry.axis_start_time) >= calHour(entries[i].axis_start_time))
                    && (calHour(entry.axis_start_time) < calHour(entries[i].axis_end_time)))
                || ((calHour(entries[i].axis_start_time) >= calHour(entry.axis_start_time))
                    && (calHour(entries[i].axis_start_time) < calHour(entry.axis_end_time)))) {
                result++;
            }
        }
    }
    return result;
}

function checkOrder(entry, entries) {
    var result = 0;
    for (var i = 0; i < entries.length; i++) {
        if (entry.id > entries[i].id) {
            if (((calHour(entry.axis_start_time) >= calHour(entries[i].axis_start_time))
                    && (calHour(entry.axis_start_time) < calHour(entries[i].axis_end_time)))
                || ((calHour(entries[i].axis_start_time) >= calHour(entry.axis_start_time))
                    && (calHour(entries[i].axis_start_time) < calHour(entry.axis_end_time)))) {
                result++;
            }
        }
    }
    return result;
}

function getDayBefore(this_date, num_days) {
    var now = new Date();
    return new Date(now.setTime(this_date.getTime() - (num_days * 24 * 60 * 60 * 1000)))
}

function getDayAfter(this_date, num_days) {
    var now = new Date();
    return new Date(now.setTime(this_date.getTime() + (num_days * 24 * 60 * 60 * 1000)))
}

// first_date_of_week : Date object (first date of week to display; should lie on a Sunday/Monday)
// date_adj : one of 'prevyr', 'nextyr', 'prevmo', 'nextmo', 'prevwe', 'nextwe', 'current'
// current_month is 1 indexed (1 = January, 2 = February...)
function naviClick(timetable_elem, date_adj, first_date_of_week, current_month, current_year) {
    createTimetable(jQuery('#' + timetable_elem), date_adj, first_date_of_week, current_month, current_year)
}

function getTimetables(tiva_timetables, this_date, this_month, this_year) {
    var result = [];
    for (var i = 0; i < tiva_timetables.length; i++) {
        if ((tiva_timetables[i].date == this_date) && (tiva_timetables[i].month == this_month) && (tiva_timetables[i].year == this_year)) {
            result.push(tiva_timetables[i]);
        }
    }
    return result;
}

function getTimetablesDay(tiva_timetables, this_day) {
    var result = [];
    for (var i = 0; i < tiva_timetables.length; i++) {
        if (tiva_timetables[i].day == this_day) {
            result.push(tiva_timetables[i]);
        }
    }
    return result;
}

function getTimetablesWeek(tiva_timetables, week_start, week_end) {
    var result = [];
    for (var i = 0; i < tiva_timetables.length; i++) {
        var entry_date = new Date(tiva_timetables[i].year, Number(tiva_timetables[i].month), tiva_timetables[i].date);
        if ((week_start.getTime() <= entry_date.getTime()) && (entry_date.getTime() <= week_end.getTime())) {
            result.push(tiva_timetables[i]);
        }
    }
    return result;
}

// first_date_of_week : Date object (first date of week to display; should lie on a Sunday/Monday)
// date_adj : one of 'prevyr', 'nextyr', 'prevmo', 'nextmo', 'prevwe', 'nextwe', 'current'
// current_month is 1 indexed (1 = January, 2 = February...)
function createTimetable(timetable_elem, date_adj, first_date_of_week, current_month, current_year) {
    if (date_adj == 'prevyr') {
        current_year--;
    } else if (date_adj == 'nextyr') {
        current_year++;
    } else if (date_adj == 'prevmo') {
        current_month--;
    } else if (date_adj == 'nextmo') {
        current_month++;
    } else if (date_adj == 'prevwe') {
        first_date_of_week = getDayBefore(new Date(first_date_of_week), 7);
    } else if (date_adj == 'nextwe') {
        first_date_of_week = getDayAfter(new Date(first_date_of_week), 7);
    }

    if (current_month == 0) {
        current_month = 12;
        current_year--;
    } else {
        if (current_month == 13) {
            current_month = 1;
            current_year++;
        }
    }
    var current_month_start = new Date(current_year, current_month - 1, 1);
    var day_of_week_start = (typeof timetable_elem.attr('data-start') != 'undefined') ? timetable_elem.attr('data-start') : 'sunday';
    var current_month_start_day;
    if (day_of_week_start == 'sunday') {
        current_month_start_day = current_month_start.getDay() + 1;
    } else {
        current_month_start_day = (current_month_start.getDay() == 0) ? 7 : current_month_start.getDay();
    }
    var current_month_end = new Date(current_year, current_month, 0).getDate();
    var view_type = (typeof timetable_elem.attr('data-view') != 'undefined') ? timetable_elem.attr('data-view') : 'month';
    if (view_type == 'week') {
        timetableWeek(timetable_elem, tiva_timetables, first_date_of_week)
    } else {
        if (view_type == 'list') {
            timetableList(timetable_elem, tiva_timetables, first_date_of_week)
        } else {
            timetableMonth(timetable_elem, tiva_timetables, current_month_start_day, current_month_end, current_month, current_year)
        }
    }
}

// for_date : Date object (show week starting on this date; should lie on a Sunday/Monday)
function timetableWeek(timetable_elem, tiva_timetables, for_date) {
    var from_date = new Date(for_date);
    var from_date_date = from_date.getDate();
    var from_date_month = from_date.getMonth() + 1;
    var from_date_year = from_date.getFullYear();
    var from_date_plus_1_week = getDayAfter(from_date, 6);
    var from_date_plus_1_week_date = from_date_plus_1_week.getDate();
    var from_date_plus_1_week_month = from_date_plus_1_week.getMonth() + 1;
    var from_date_plus_1_week_year = from_date_plus_1_week.getFullYear();
    var start_day_of_week = (typeof timetable_elem.attr('data-start') != 'undefined') ? timetable_elem.attr('data-start') : 'sunday';
    var word_day_array, day_array;
    if (start_day_of_week == 'sunday') {
        word_day_array = new Array(wordDay_sun, wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat);
        day_array = new Array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
    } else {
        word_day_array = new Array(wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat, wordDay_sun);
        day_array = new Array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
    }

    var week_header;
    if ((from_date_month != from_date_plus_1_week_month) && (from_date_year != from_date_plus_1_week_year)) {
        week_header = wordMonth[from_date_month - 1].substring(0, 3) + ' ' + from_date_date + ', ' + from_date_year + ' - ' + wordMonth[from_date_plus_1_week_month - 1].substring(0, 3) + ' ' + from_date_plus_1_week_date + ', ' + from_date_plus_1_week_year;
    } else {
        if (from_date_month != from_date_plus_1_week_month) {
            week_header = wordMonth[from_date_month - 1].substring(0, 3) + ' ' + from_date_date + ' - ' + wordMonth[from_date_plus_1_week_month - 1].substring(0, 3) + ' ' + from_date_plus_1_week_date + ', ' + from_date_year;
        } else {
            week_header = wordMonth[from_date_month - 1].substring(0, 3) + ' ' + from_date_date + ' - ' + from_date_plus_1_week_date + ', ' + from_date_year;
        }
    }

    var timetable_html = '';
    if (!(timetable_elem.attr('data-nav') == 'hide') && !(timetable_elem.attr('data-mode') == 'day')) {
        timetable_html += '<div class="time-navigation">' + `<span class="navi-icon navi-prev" onClick="naviClick('` + timetable_elem.attr('id') + "', 'prevwe', '" + from_date + "', " + from_date_month + ', ' + from_date_year + ')">&#10094;</span>' + '<span class="navi-time">' + week_header + '</span>' + `<span class="navi-icon navi-next" onClick="naviClick('` + timetable_elem.attr('id') + "', 'nextwe', '" + from_date + "', " + from_date_month + ', ' + from_date_year + ')">&#10095;</span>' + '</div>';
    }
    if (!(timetable_elem.attr('data-mode') == 'day')) {
        tiva_timetables = getTimetablesWeek(tiva_timetables, new Date(from_date_year, from_date_month - 1, from_date_date), new Date(from_date_plus_1_week_year, from_date_plus_1_week_month - 1, from_date_plus_1_week_date));
    }

    var min_hour = getMinTime(tiva_timetables);
    if (!min_hour && min_hour != 0) {
        min_hour = 8;
    }
    var max_hour = getMaxTime(tiva_timetables);
    if (!max_hour) {
        max_hour = 15;
    }
    timetable_html += '<div class="timetable-week ' + ((timetable_elem.attr('data-header-time') == 'hide') ? '' : 'show-time') + '">';
    timetable_html += '<div class="timetable-axis">';
    for (var i = min_hour; i <= max_hour; i++) {
        timetable_html += '<div class="axis-item">' + ((i < 10) ? '0' + i : i) + ':00</div>';
    }

    timetable_html += '</div>';
    timetable_html += '<div class="timetable-columns">';
    for (var i = 0; i < word_day_array.length; i++) {
        var day_after_from_date = getDayAfter(from_date, i);
        var day_after_from_date_date = day_after_from_date.getDate();
        var day_after_from_date_month = day_after_from_date.getMonth() + 1;
        var day_after_from_date_year = day_after_from_date.getFullYear();
        var header_date_html = (timetable_elem.attr('data-header-time') == 'hide') ? '' : '<br><span>' + wordMonth[day_after_from_date_month - 1].substring(0, 3) + ' ' + day_after_from_date_date + ', ' + day_after_from_date_year + '</span>';
        timetable_html += '<div class="timetable-column">';
        timetable_html += '<div class="timetable-column-header ' + ((i == word_day_array.length - 1) ? 'last-column' : '') + '">';
        timetable_html += (screen.width > 768 ? word_day_array[i] : word_day_array[i].substring(0, 3)) + header_date_html + '</div>'
        timetable_html += '<div class="timetable-column-content">';
        var timetables_to_show;
        if (timetable_elem.attr('data-mode') == 'day') {
            timetables_to_show = getTimetablesDay(tiva_timetables, day_array[i]);
        } else {
            timetables_to_show = getTimetables(tiva_timetables, day_after_from_date_date, day_after_from_date_month - 1, day_after_from_date_year);
        }
        for (var j = 0; j < timetables_to_show.length; j++) {
            if (timetables_to_show[j].axis_start_time && timetables_to_show[j].axis_end_time) {
                var timetable_img_html = '';
                if (timetables_to_show[j].image_url) {
                    timetable_img_html = '<div class="timetable-image"><img src="' + timetables_to_show[j].image_url + '" alt="' + timetables_to_show[j].title + '" /></div>';
                }
                var timetable_end_time_text = '';
                if (timetables_to_show[j].end_time) {
                    timetable_end_time_text = ' - ' + timetables_to_show[j].end_time;
                }
                var top_offset = getPosition(min_hour, timetables_to_show[j].axis_start_time);
                var timetable_height = getHeight(timetables_to_show[j].axis_start_time, timetables_to_show[j].axis_end_time);
                var width_css = (checkMulti(timetables_to_show[j], timetables_to_show) > 1) ? 'width:' + (100 / checkMulti(timetables_to_show[j], timetables_to_show)) + '%;' : '';
                var left_offset_css = (checkOrder(timetables_to_show[j], timetables_to_show) > 0) ? 'left:' + (checkOrder(timetables_to_show[j], timetables_to_show) * (100 / checkMulti(timetables_to_show[j], timetables_to_show))) + '%' : '';
                timetable_html += '<div class="timetable-item">' + '<a class="timetable-title color-' + timetables_to_show[j].event_type + '" style="top:' + top_offset + 'px; height:' + timetable_height + 'px; ' + width_css + left_offset_css + '" href="#timetable-popup-' + timetables_to_show[j].id + '" class="open-popup-link">' + '<div class="timetable-title-wrap">' + '<div class="timetable-name">' + timetables_to_show[j].title + '</div>' + '<div class="timetable-time">' + timetables_to_show[j].start_time + ' - ' + timetables_to_show[j].end_time + '</div>' + '</div>' + '</a>' + '<div id="timetable-popup-' + timetables_to_show[j].id + '" class="timetable-popup zoom-anim-dialog mfp-hide">' + '<div class="popup-header color-' + timetables_to_show[j].event_type + '">' + timetables_to_show[j].title + '</div>' + '<div class="popup-body">' + timetable_img_html + '<div class="timetable-time color-' + timetables_to_show[j].event_type + '">' + timetables_to_show[j].start_time + timetable_end_time_text + '</div>' + '<div class="timetable-desc">' + timetables_to_show[j].description + '</div>' + '</div>' + '</div>' + '</div>';
            }
        }
        timetable_html += '</div>';
        timetable_html += '<div class="timetable-column-grid">';
        for (var j = min_hour; j < max_hour; j++) {
            timetable_html += '<div class="grid-item ' + ((i == 0) ? 'first-column' : '') + '"></div>';
        }
        timetable_html += '</div></div>';
    }

    timetable_html += '</div></div>';
    timetable_elem.html(timetable_html);
    timetable_elem.find('.timetable-title').magnificPopup({
        type: 'inline',
        removalDelay: 800,
        mainClass: 'my-mfp-zoom-in'
    })
}

function timetableList(timetable_elem, tiva_timetables, first_date_of_week) {
    var first_date = new Date(first_date_of_week);
    var first_date_date = first_date.getDate();
    var first_date_month = first_date.getMonth() + 1;
    var first_date_year = first_date.getFullYear();
    var first_date_plus_1_week = getDayAfter(first_date, 6);
    var first_date_plus_1_week_date = first_date_plus_1_week.getDate();
    var first_date_plus_1_week_month = first_date_plus_1_week.getMonth() + 1;
    var first_date_plus_1_week_year = first_date_plus_1_week.getFullYear();
    var word_day_array, day_array;
    var data_start_day = (typeof timetable_elem.attr('data-start') != 'undefined') ? timetable_elem.attr('data-start') : 'sunday';
    var timetable_html = '';
    if (data_start_day == 'sunday') {
        word_day_array = new Array(wordDay_sun, wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat);
        day_array = new Array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
    } else {
        word_day_array = new Array(wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat, wordDay_sun);
        day_array = new Array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
    }
    var nav_time_header_text;
    if ((first_date_month != first_date_plus_1_week_month) && (first_date_year != first_date_plus_1_week_year)) {
        nav_time_header_text = wordMonth[first_date_month - 1].substring(0, 3) + ' ' + first_date_date + ', ' + first_date_year + ' - ' + wordMonth[first_date_plus_1_week_month - 1].substring(0, 3) + ' ' + first_date_plus_1_week_date + ', ' + first_date_plus_1_week_year;
    } else {
        if (first_date_month != first_date_plus_1_week_month) {
            nav_time_header_text = wordMonth[first_date_month - 1].substring(0, 3) + ' ' + first_date_date + ' - ' + wordMonth[first_date_plus_1_week_month - 1].substring(0, 3) + ' ' + first_date_plus_1_week_date + ', ' + first_date_year;
        } else {
            nav_time_header_text = wordMonth[first_date_month - 1].substring(0, 3) + ' ' + first_date_date + ' - ' + first_date_plus_1_week_date + ', ' + first_date_year;
        }
    }

    if (!(timetable_elem.attr('data-nav') == 'hide') && !(timetable_elem.attr('data-mode') == 'day')) {
        timetable_html += '<div class="time-navigation">' + `<span class="navi-icon navi-prev" onClick="naviClick('` + timetable_elem.attr('id') + "', 'prevwe', '" + first_date + "', " + first_date_month + ', ' + first_date_year + ')">&#10094;</span>' + '<span class="navi-time">' + nav_time_header_text + '</span>' + `<span class="navi-icon navi-next" onClick="naviClick('` + timetable_elem.attr('id') + "', 'nextwe', '" + first_date + "', " + first_date_month + ', ' + first_date_year + ')">&#10095;</span>' + '</div>';
    }

    timetable_html += '<div class="timetable-list">';
    var date_idx;
    for (var i = 0; i < word_day_array.length; i++) {
        date_idx = getDayAfter(first_date, i);
        var curr_date_date = date_idx.getDate();
        var curr_date_month = date_idx.getMonth() + 1;
        var curr_date_year = date_idx.getFullYear();
        var timetables_to_show;
        if (timetable_elem.attr('data-mode') == 'day') {
            timetables_to_show = getTimetablesDay(tiva_timetables, day_array[i]);
        } else {
            timetables_to_show = getTimetables(tiva_timetables, curr_date_date, curr_date_month - 1, curr_date_year);
        }

        if (timetables_to_show.length > 0) {
            timetable_html += '<div class="timetable-day">';
            var timetable_header_time_html = (timetable_elem.attr('data-header-time') == 'hide') ? '' : '<span>' + wordMonth[curr_date_month - 1].substring(0, 3) + ' ' + curr_date_date + ', ' + curr_date_year + '</span>';
            timetable_html += '<div class="timetable-header">' + word_day_array[i] + timetable_header_time_html + '</div>';
            timetable_html += '<div class="timetable-content">';
            for (var j = 0; j < timetables_to_show.length; j++) {
                if (timetables_to_show[j].axis_start_time && timetables_to_show[j].end_time) {
                    var image_html = timetables_to_show[j].image_url ? '<div class="timetable-image"><img src="' + timetables_to_show[j].image_url + '" alt="' + timetables_to_show[j].title + '" /></div>' : '';
                    var end_time_html = timetables_to_show[j].end_time ? ' - ' + timetables_to_show[j].end_time : '';
                    timetable_html += '<div class="timetable-item">' + '<span class="timetable-color color-' + timetables_to_show[j].event_type + '"></span>' + '<a class="timetable-title" href="#timetable-popup-' + timetables_to_show[j].id + '" class="open-popup-link">' + '<span class="timetable-time">' + timetables_to_show[j].start_time + end_time_html + '</span>' + '<span class="timetable-name">' + timetables_to_show[j].title + '</span>' + '</a>' + '<div id="timetable-popup-' + timetables_to_show[j].id + '" class="timetable-popup zoom-anim-dialog mfp-hide">' + '<div class="popup-header color-' + timetables_to_show[j].event_type + '">' + timetables_to_show[j].title + '</div>' + '<div class="popup-body">' + image_html + '<div class="timetable-time color-' + timetables_to_show[j].event_type + '">' + timetables_to_show[j].start_time + end_time_html + '</div>' + '<div class="timetable-desc">' + timetables_to_show[j].description + '</div>' + '</div>' + '</div>' + '</div>';
                }
            }
            timetable_html += '</div></div>';
        }
    }
    timetable_html += '</div>';
    timetable_elem.html(timetable_html);
    timetable_elem.find('.timetable-title').magnificPopup({
        type: 'inline',
        removalDelay: 800,
        mainClass: 'my-mfp-zoom-in'
    })
}

// start_month_day : 0 for (sunday) .. 6 (saturday); the day in which the first of the current month falls on
// last_day_of_month : Date object representing the last date of the current display month
// current month : 1 indexed integer (1 for Jan, 12 for Dec) for current display
function timetableMonth(timetable_elem, tiva_timetables, start_month_day, last_day_of_month, current_month, current_year) {
    var now = tiva_current_date.getDate();
    var data_start_day = (typeof timetable_elem.attr('data-start') != 'undefined') ? timetable_elem.attr('data-start') : 'sunday';
    var timetable_html = '';
    var word_day_array;
    if (data_start_day == 'sunday') {
        word_day_array = new Array(wordDay_sun, wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat);
    } else {
        word_day_array = new Array(wordDay_mon, wordDay_tue, wordDay_wed, wordDay_thu, wordDay_fri, wordDay_sat, wordDay_sun);
    }
    if (!(timetable_elem.attr('data-nav') == 'hide')) {
        timetable_html += '<div class="time-navigation">' + `<span class="navi-icon navi-prev" onClick="naviClick('` + timetable_elem.attr('id') + "', 'prevmo', '', " + current_month + ', ' + current_year + ')">&#10094;</span>' + '<span class="navi-time">' + wordMonth[current_month - 1] + '&nbsp;&nbsp;' + current_year + '</span>' + `<span class="navi-icon navi-next" onClick="naviClick('` + timetable_elem.attr('id') + "', 'nextmo', '', " + current_month + ', ' + current_year + ')">&#10095;</span>' + '</div>';
    }
    timetable_html += '<table class="timetable-month">';
    timetable_html += '<tbody>';
    timetable_html += '<tr>';
    for (var i = 0; i < word_day_array.length; i++) {
        if (screen.width > 768) {
            timetable_html += '<th class="timetable-header">' + word_day_array[i] + '</th>';
        } else {
            timetable_html += '<th class="timetable-header">' + word_day_array[i].substring(0, 3) + '</th>';
        }
    }

    timetable_html += '</tr>';
    var cell_idx = 1;
    for (var i = 1; i <= 6; i++) {
        var cell_count = (i - 1) * 7 + 1; // 1..36
        if (cell_count < (start_month_day + last_day_of_month)) {
            timetable_html += '<tr>';
            for (var j = 1; j <= 7; j++) {
                var day_counter = (cell_idx - start_month_day) + 1;
                cell_idx++;
                var today_css = ((now == day_counter) && (tiva_current_month == current_month) && (tiva_current_year == current_year)) ? 'today' : '';
                timetable_html += '<td class="calendar-day ' + today_css + '">';
                if ((day_counter <= last_day_of_month) && (day_counter >= 1)) {
                    timetable_html += '<div class="calendar-daycounter">' + day_counter + '</div>';
                }
                var timetables_to_show = getTimetables(tiva_timetables, day_counter, current_month - 1, current_year);
                for (var k = 0; k < timetables_to_show.length; k++) {
                    var img_html = timetables_to_show[k].image_url ? '<div class="timetable-image"><img src="' + timetables_to_show[k].image_url + '" alt="' + timetables_to_show[k].title + '" /></div>' : '';
                    var end_time_html = timetables_to_show[k].end_time ? ' - ' + timetables_to_show[k].end_time : '';
                    timetable_html += '<div class="timetable-item">' + '<span class="timetable-color color-' + timetables_to_show[k].event_type + '"></span>' + '<a class="timetable-title" href="#timetable-popup-' + timetables_to_show[k].id + '" class="open-popup-link">' + '<span class="timetable-time">' + timetables_to_show[k].start_time + '</span>' + '<span class="timetable-name">' + timetables_to_show[k].title + '</span>' + '</a>' + '<div id="timetable-popup-' + timetables_to_show[k].id + '" class="timetable-popup zoom-anim-dialog mfp-hide">' + '<div class="popup-header color-' + timetables_to_show[k].event_type + '">' + timetables_to_show[k].title + '</div>' + '<div class="popup-body">' + img_html + '<div class="timetable-time color-' + timetables_to_show[k].event_type + '">' + timetables_to_show[k].start_time + end_time_html + '</div>' + '<div class="timetable-desc">' + timetables_to_show[k].description + '</div>' + '</div>' + '</div>' + '</div>';
                }
                timetable_html += '</td>';
            }
            timetable_html += '</tr>';
        }
    }
    timetable_html += '</tbody></table>';
    timetable_elem.html(timetable_html);
    timetable_elem.find('.timetable-title').magnificPopup({
        type: 'inline',
        removalDelay: 800,
        mainClass: 'my-mfp-zoom-in'
    });
}

function load_timetables(url) {
    jQuery('.tiva-timetable').each(function (idx) {
    // jQuery('#tt-month').each(function (idx) {
        jQuery(this).attr('id', 'timetable-' + (idx + 1));

        // data_mode can be 'day' where we only show the current week; the response from the server
        // should only contain the field { day: monday } and no specific dates
        // data_mode = 'date' is the normal view where you can go forward/back by a week
        var data_view = (typeof jQuery(this).attr('data-view') != 'undefined') ? jQuery(this).attr('data-view') : 'month';
        var data_mode = (jQuery(this).attr('data-mode') == 'day') && (data_view == 'week' || data_view == 'list') ? 'day' : 'date';

        var timetable_elem = jQuery(this);
        jQuery.ajax({
            url: url,
            dataType: 'json',
            data: JSON.stringify({mode: data_mode}),
            beforeSend: function () {
                timetable_elem.html('<div class="loading"><img src="images/loading.gif" /></div>')
            },
            success: function (resp_arr) {
                tiva_timetables = [];
                for (var i = 0; i < resp_arr.length; i++) {
                    tiva_timetables.push(resp_arr[i]);
                }
                tiva_timetables.sort(sortByTime);
                for (var i = 0; i < tiva_timetables.length; i++) {
                    tiva_timetables[i].id = i;
                    const event_date = tiva_timetables[i].start_date.split('-');
                    tiva_timetables[i].date = event_date[2];
                    tiva_timetables[i].month = parseInt(event_date[1]) - 1;
                    tiva_timetables[i].year = event_date[0];
                    tiva_timetables[i].day = DAYS_OF_WEEK[new Date(tiva_timetables[i].start_date).getDay()];
                }
                var now = new Date();
                var day_start = (typeof timetable_elem.attr('data-start') != 'undefined') ? timetable_elem.attr('data-start') : 'sunday';
                var first_date_of_week;
                if (day_start == 'sunday') {
                    first_date_of_week = new Date(now.setDate(tiva_current_date.getDate() - now.getDay()))
                } else {
                    var current_day_of_week = (now.getDay() == 0) ? 7 : now.getDay();
                    first_date_of_week = new Date(now.setDate(tiva_current_date.getDate() - current_day_of_week + 1));
                }
                createTimetable(timetable_elem, 'current', first_date_of_week, tiva_current_month, tiva_current_year)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                timetable_elem.html("<p>" + errorThrown + "</p>");
            }
        })
    })
}
