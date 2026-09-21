<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li> 
        <li><a href="javascript:void(0)" ng-click="refresh_albums()">Video Gallery</a></li>
	</ol>
</div>

<div class="clearfix"></div>
<br>
<div class="col-sm-4">
 <form class="admin-form" name="form" id="form" method="post" action="">
 <div id="validation"></div>
 <br>
      
      <div class="form-group">
        <label for="video_url">YouTube/Vimeo Embed URL</label>
        <input type="text" class="form-control" id="video_url" name="video_url" ng-model="x.video_url" placeholder="https://www.youtube.com/embed/XXXX" required>
        <p class="help-block" style="font-size:10px">Paste the embed URL for your video.</p>
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
          <button type="submit" ng-disabled="form.$invalid" class="btn btn-primary btn-block" id="btnsubmit" ng-click="insert_video()" accesskey="u"><u><b>A</b></u>dd Video</button>
      </div>
      <br>
      <div id="result" class="pull-left"></div>
 </form>
</div>

<div class="col-sm-8 gallery">
    <div class="input-group custom">
        <div class="input-group-addon info">?</div>
	     <input type="text" class="form-control" ng-model="search_text" placeholder="Search here...">
	</div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-sm-6 col-md-4 col-xs-12" dir-paginate="x in datadb | filter: search_text | itemsPerPage: 6" style="margin-bottom:20px;" paginate-id="gallery">
        <div class="thumbnail" style="padding:8px; margin-bottom:0; background:#fff; border:1px solid #e0e0e0; border-radius:6px; box-shadow:0 2px 6px rgba(0,0,0,0.06);">
            <!-- Status & Action Bar -->
            <div style="margin-bottom:8px; overflow:hidden;">
                <span class="label label-success" ng-if="x.status=='1' || x.status==1">Active</span>
                <span class="label label-default" ng-if="x.status=='0' || x.status==0">Hidden</span>
                
                <div class="pull-right">
                    <button type="button" class="btn btn-default btn-xs" ng-click="toggle_status(x)" title="Toggle Visibility">
                        <i class="fa" ng-class="(x.status=='1' || x.status==1) ? 'fa-eye-slash' : 'fa-eye'"></i> {{(x.status=='1' || x.status==1) ? 'Hide' : 'Show'}}
                    </button>
                    <button type="button" class="btn btn-warning btn-xs" ng-click="edit_data(x)" title="Edit Video">
                        <i class="fa fa-pencil"></i> Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-xs" ng-click="delete_data(x)" title="Delete Video">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </div>
            </div>

            <!-- Video Player Box -->
            <div style="background:#000; border-radius:4px; overflow:hidden; position:relative;">
                <iframe ng-src="{{x.video_url | trustAsResourceUrl}}" style="width:100%;height:150px;border:none;display:block;"></iframe>
            </div>

            <!-- Prominent Delete Button -->
            <div style="margin-top:10px;">
                <button type="button" class="btn btn-danger btn-sm btn-block" ng-click="delete_data(x)" style="font-weight:bold;">
                    <i class="fa fa-trash"></i> Delete Video
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="<?=site_url('app/pagination')?>" paginate-id="gallery"></dir-pagination-controls>
    </div>
</div>
