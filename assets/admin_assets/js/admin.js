$(document).ready(function(){
    // init tablesorter, only if there is a table with rows
    if ($("table").find("tr").length > 1) {
        var $table = $("table.tablesorter")
            .tablesorter( { theme : 'blue', widgets: ["filter"], widgetOptions : { filter_anyMatch : true, filter_columnFilters: false, filter_reset: '#filter-clear-button' } } )
            .tablesorterPager( { container: $(".paginator"), output: 'Page {page} of {filteredPages}   ~   {filteredRows} ({totalRows})', removeRows: false, size: $(".pagesize").val() } );
        $.tablesorter.filter.bindSearch( $table, $('#filter-box') );
        $('#filter-clear-button').on('click', function() { $('#filter-box').val(''); $('#filter-box').focus(); });
        $('#filter-select').on('click', function() { $('#filter-box').focus(); });

        $('.pagesize').val(pagesize_value); // init pagination value
        
        $('.pagesize').on('change', function(e) {
            var element_val = $(this).val();
            $.ajax(url_web + 'admin/settings/change_pagination', {
                dataType: 'json', type: 'post', data: { 'pagination': element_val }, cache: false, timeout: 8000
            });
        });
    }

    // state button
    $(".state-status").on('click', function() {
        var element = $(this);
        var urlLink = element.attr('data-url');
        
        $.ajax(urlLink, { dataType: 'json', type: 'get', cache: false, timeout: 8000 });
        
        if(element.hasClass('btn-success')) {
            element.removeClass('btn-success');
            element.find('span').removeClass('glyphicon-eye-open');
            element.find('span').addClass('glyphicon-eye-close');
            // element.attr('data-title', "Show");
        } else {
            element.addClass('btn-success');
            element.find('span').addClass('glyphicon-eye-open');
            element.find('span').removeClass('glyphicon-eye-close');
            // element.attr('data-title', "Hide");
        }
    });

    // init tooltips, popovers, button-loading
    $("*[rel=tooltip]").tooltip();
    $("*[rel=popover]").popover();
    $("body").delegate("*[rel=loading]", "click", function() {
        $(this).button('loading');
    });

    // reset modals on hidden
    $('.modal').on('hidden.bs.modal', function(e) {
        var target = e.target.className;
        if(/modal-form/i.test(target)) {
            $(this).find('.modal-body').html('<img src="' + url_web + 'assets/admin_assets/img/loading.gif"> Loading info...');
            $(this).removeData().find('.modal-form').empty();
        }
    });
});

// LOGIN REMEMBER ME
function remember_me_init(chkbx, usrname) {
    if (localStorage.chkbx && localStorage.chkbx != '') {
        $('#login_remember_me').attr('checked', 'checked');
        $('#login_username').val(localStorage.usrname);
    } else {
        $('#login_remember_me').removeAttr('checked');
        $('#login_username').val('');
    }

    $('#login_remember_me').click(function() {
        if ($('#login_remember_me').is(':checked')) {
            localStorage.usrname = $('#login_username').val();
            localStorage.chkbx = $('#login_remember_me').val();
        } else {
            localStorage.usrname = '';
            localStorage.chkbx = '';
        }
    });

    $('#login_username').on('change', function() {
        if ($('#login_remember_me').is(':checked')) {
            localStorage.usrname = $('#login_username').val();
        }
    });
}

function call_timer(elapsed_seconds) {
    if(elapsed_seconds == 0) {
        elapsed_seconds = localStorage.seconds = 0;
    }
    setInterval(function() {
        localStorage.seconds = elapsed_seconds++;
        $('#box_timer').text( get_elapsed_time_string(localStorage.seconds) );
    }, 1000);
    /*    
    // another variant
    var start = new Date;
    setInterval(function() {
        $('.Timer').text((new Date - start) / 1000 + " Seconds");
    }, 1000);
    */
}

function get_elapsed_time_string(total_seconds) {
  function pretty_time_string(num) {
    return ( num < 10 ? "0" : "" ) + num;
  }

  var hours = Math.floor(total_seconds / 3600);
  total_seconds = total_seconds % 3600;

  var minutes = Math.floor(total_seconds / 60);
  total_seconds = total_seconds % 60;

  var seconds = Math.floor(total_seconds);

  // Pad the minutes and seconds with leading zeros, if required
  hours = pretty_time_string(hours);
  minutes = pretty_time_string(minutes);
  seconds = pretty_time_string(seconds);

  // Compose the string for display
  var currentTimeString = hours + ":" + minutes + ":" + seconds;

  return currentTimeString;
}

// Web preloader
$(window).load(function() { // makes sure the whole site is loaded
    $("#status").fadeOut(); // will first fade out the loading animation
    $("#preloader").delay(500).fadeOut("slow"); // will fade out the white DIV that covers the website.
});
