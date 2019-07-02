<div class="container m-top" style="min-height: 500px;">
    <div class="row justify-content-around">
        <div class="col-12">
        <h3 class="text-muted text-center my-5">Manage all Blogs Posts</h3>
            <table id="myTable" class="table text-center ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date-Time Created</th>
                        <th scope="col">Date-Time Updated</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if(isset($blogs)) {
                        $sno = 0;
                        foreach($blogs as $blog) {
                            if($blog->is_deleted == 0) {
                    ?>
                    <tr>
                        <th scope="row"><?=++$sno;?></th>
                        <td><?=$blog->blog_title;?></td>
                        <td><?=$blog->datetime_created;?></td>
                        <td><?=($blog->datetime_updated == NULL) ? "-":$blog->datetime_updated;?></td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger delete_button" id="<?=$blog->id;?>" data-url="<?=base_url('admin/All_Blogs/hide_blog');?>"><i class="fa fa-eye-slash"></i> Hide</button>
                            <a class="btn btn-sm btn-outline-info edit_button" id="<?=$blog->id;?>" href="<?=base_url('admin/Edit_Blog/edit_blog/'.$blog->id);?>" target="_blank"><i class="fa fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
