<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit file_upload</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editfile_uploadsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<!-- <label for="cdate">cdate</label> -->
<input type="date" id="cdate" name="cdate" value='<?php echo set_value('cdate',$before->cdate);?>'>
</div>
</div>


<div class="row">
  <div class="file-field input-field col m6 s12">

    <div class="btn blue darken-4">
      <span>Upload PDF</span>
      <input name="pdf" type="file" multiple>
    </div>
    <div class="file-path-wrapper">
      <input name="pdf" class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('pdf',$before->pdf);?>">
    </div>
  </div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="current_time">current_time</label>
<input type="text" id="current_time" name="current_time" value='<?php echo set_value('current_time',$before->current_time);?>'>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewfile_upload"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
