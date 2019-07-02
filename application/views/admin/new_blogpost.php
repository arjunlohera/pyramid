<!-- <div class="m-top invisible">.</div> -->
<div class="container m-top">
    <div class="row">
        <div class="col-10">
            <h3 class="text-muted font-weight-light display-4 my-4">Write your <span class="text-info font-italic">BLOG</span></h3>
            <form id="new_blog_form" method="post" action="<?=base_url('admin/New_Blog/add_new_blogpost')?>">
                <input id="blog_title" type="text" name="blog_title" class="form-control w-100 my-2" placeholder="Title" required="required" data-msg="Please enter Title here.">
                <textarea id="blog_data" class="summernote" name="blog_data" required="required" data-msg="Please write something"></textarea>
                <button type="submit" class="btn btn-danger btn-block my-2">POST</button>
            </form>
        </div>
    </div>
</div>
