<div class="row-fluid">
    <div class="span12">
        <section id="list-section">
            <div class="page-header">
                <h1><?php echo $title; ?></h1>
            </div>

            <?php
            if ($this->session->flashdata('message')):
                echo $this->session->flashdata('message');
            endif;
            ?>

            <form class="form-search" style="float: right;" onsubmit="return false;">
              <div class="input-append">
                <input type="text" class="search-query" placeholder="Filter" id="filter-box">
                <button type="button" class="btn" id="filter-clear-button">Reset filter</button>
              </div>
            </form>

            <p>
                <button class="btn" type="button" href="<?php echo site_url('admin/' . $file . '/create'); ?>" data-target="#createModal" data-toggle="modal"><i class="icon-plus-sign"></i> Create item</button>
                <a class="btn btn-success" href="<?php echo site_url('admin/' . $file . '/export'); ?>"><i class="icon-file icon-white"></i> Export CSV file</a>
            </p>

            <table class="table table-striped table-hover tablesorter" id="main">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Picture</th>
                        <th style="width: 120px;">Actions</th>
                    </tr>
                </thead>
                <tbody id="holder">
                    <?php foreach($items as $item): ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><a href="<?php echo site_url('news/article/' . $item->slug); ?>" target="_blank"><?php echo $item->title; ?></a></td>
                        <td><?php echo $item->date; ?></td>
                        <td>
                            <?php if(!empty($item->picture)): ?>
                            <a href="<?php echo site_url('assets/uploads/' . $item->picture . '_l.jpg'); ?>" rel="popover" data-html="true" data-content="<img src='<?php echo site_url('assets/uploads/' . $item->picture . '_s.jpg'); ?>'>" data-title="Photo preview" target="_blank"><i class="icon-picture"></i></a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($item->visible): ?>
                            <a class="btn btn-small btn-warning state-button" href="<?php echo site_url('admin/' . $file . '/state/' . $item->id); ?>" rel="tooltip" data-title="Hide item"><i class="icon-eye-open icon-white"></i><img src="<?php echo site_url('asstes/bootstrap/img/load-btn.gif'); ?>" alt="" style="display: none;"></a>
                            <?php else: ?>
                            <a class="btn btn-small state-button" href="<?php echo site_url('admin/' . $file . '/state/' . $item->id); ?>" rel="tooltip" data-title="Show item"><i class="icon-eye-open"></i><img src="<?php echo site_url('assets/bootstrap/img/load-btn.gif'); ?>" alt="" style="display: none;"></a>
                            <?php endif; ?>
                            <a class="btn btn-small btn-primary edit-btn" type="button" rel="tooltip" data-title="Edit item" href="<?php echo site_url('admin/' . $file . '/edit/' . $item->id); ?>" data-target="#editModal" data-toggle="modal"><i class="icon-pencil icon-white"></i></a>
                            <a class="btn btn-small btn-danger delete-btn" type="button" rel="tooltip" data-title="Delete item" href="<?php echo site_url('admin/' . $file . '/delete/' . $item->id); ?>" data-target="#deleteModal" data-toggle="modal"><i class="icon-trash icon-white"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div id="pager" class="pager">
                <button class="btn btn-small btn-info first" rel="tooltip" data-title="First page"><i class="icon-fast-backward icon-white"></i></button>
                <button class="btn btn-small btn-info prev" rel="tooltip" data-title="Previous page"><i class="icon-backward icon-white"></i></button>
                <input type="text" class="pagedisplay"/>
                <button class="btn btn-small btn-info next" rel="tooltip" data-title="Next page"><i class="icon-forward icon-white"></i></button>
                <button class="btn btn-small btn-info last" rel="tooltip" data-title="Last page"><i class="icon-fast-forward icon-white"></i></button>
                <select class="pagesize">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>
                    <option value="<?php echo count($items); ?>">All items</option>
                </select>
            </div>

            <p><span class="label label-info">TIP</span> To sort multiple columns at the same time, hold down the Shift key and click a second, third or even fourth column header!</p>

        </section>
    </div><!--/span-->
</div><!--/row-->

<div id="createModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Create item</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo site_url("assets/bootstrap/img/loader.gif"); ?>"> Loading...</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="submitButton">Create item</button>
    </div>
</div>

<div id="editModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Edit item</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo site_url("assets/bootstrap/img/loader.gif"); ?>"> Loading...</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="submitButton">Save changes</button>
    </div>
</div>

<div id="deleteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Delete item</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo site_url("assets/bootstrap/img/loader.gif"); ?>"> Loading...</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="submitButton">Delete item</button>
    </div>
</div>

<script>
var base_url = '<?php echo site_url('/'); ?>';
</script>
<script src="<?php echo site_url('assets/bootstrap/js/list-app.js'); ?>"></script>
<script>
$(document).ready(function(){
  $('#main')
    .tablesorter({sortReset: true, sortRestart: true, headers:{ 3:{sorter:false}, 4:{sorter:false} } })
    <?php if(!empty($items)):?>
    // list unsorted columns
    .tablesorterPager({container: $("#pager"), size: <?php echo $this->session->userdata('pagination'); ?>})
    <?php endif; ?>
    .tablesorterFilter({filterContainer: "#filter-box", filterClearContainer: "#filter-clear-button", filterColumns: [0, 1, 2], filterCaseSensitive: false});
    // list columns that will be filtered

  $('.state-button').live('click', function(e) {
    e.preventDefault();
    var urlLink = $(this).attr('href');
    var element = $(this);
    $.ajax(urlLink, {
        dataType: 'json',
        type: 'get',
        cache: false,
        timeout: 8000,
        beforeSend: function() {
            element.tooltip('hide');
            element.find('i').hide();
            element.find('img').show();
        },
        error: function(result) {
            // 
        },
        success: function(result) {
            element.data('tooltip', false);
            if(result.status){
                element.addClass('btn-warning');
                element.find('i').addClass('icon-white');
                element.data('title', 'Hide item');
                element.tooltip({ title: 'Hide item' });
            } else {
                element.removeClass('btn-warning');
                element.find('i').removeClass('icon-white');
                element.data('title', 'Show item');
                element.tooltip({ title: 'Show item' });
            }
            element.find('i').show();
            element.find('img').hide();
            element.tooltip('show');
        }
    });
  });

  $('.pagesize').val(<?php echo $this->session->userdata('pagination'); ?>);

  $('.pagesize').on('change', function(e) {
    var element = $(this).val();
    $.ajax('<?php echo site_url('admin/settings/change_pagination'); ?>', {
        dataType: 'json',
        type: 'post',
        data: { 'pagination': element },
        cache: false,
        timeout: 8000,
        error: function(result) {
            // error
        },
        success: function(result) {
            // success
        }
    });
  });
});
</script>
