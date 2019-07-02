<!-- <div class="m-top invisible">.</div> -->
<div class="container m-top h-100" >
    <div class="row">
        <div class="col-10">
            <h3 class="text-muted font-weight-light display-4 my-4">Edit your <span class="text-info font-italic">BLOG</span></h3>
            <form id="edit_blog_form" method="post" action="<?=base_url('admin/Edit_Blog/update_blogpost/'.$blog['id']);?>">
                <input id="blog_title" type="text" name="blog_title" class="form-control w-100 my-2" placeholder="Title" value="<?=$blog['blog_title'];?>" required="required" data-msg="Please enter Title here.">
                <textarea id="edit_blog_data" class="summernote" name="blog_data" value="<?=$blog['blog_data'];?>" required="required" data-msg="Please write something"></textarea>
                <button type="submit" class="btn btn-danger btn-block my-2">Update</button>
            </form>
        </div>
    </div>
</div>
