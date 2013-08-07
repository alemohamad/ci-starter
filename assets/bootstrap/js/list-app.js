$(document).ready(function(){
  $('table').tooltip({
    selector: "a[rel=tooltip], button[rel=tooltip]"
  })
  $('#pager').tooltip({
    selector: "a[rel=tooltip], button[rel=tooltip]"
  })
  $("a[rel=popover]").live({
    mouseenter:
      function() {
        $(this).popover('show');
      },
    mouseleave:
      function() {
        $(this).popover('hide');
      }
  });
  $('#submitButton').live('click', function() {
    $(this).parent().parent().find('form').submit();
  });
  $('.edit-btn').live('click', function() {
    var url = $(this).attr('href');
    $('#editModal .modal-body').html('<p><img src="../assets/bootstrap/img/loader.gif"> Loading...</p>');
    $('#editModal .modal-body').load(url);
  });
  $('.delete-btn').live('click', function() {
    var url = $(this).attr('href');
    $('#deleteModal .modal-body').html('<p><img src="../assets/bootstrap/img/loader.gif"> Loading...</p>');
    $('#deleteModal .modal-body').load(url);
  });
});
