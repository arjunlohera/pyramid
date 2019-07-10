<div class="container m-top mb-5" style="min-height: 500px;">
<div class="row justify-content-around">
    <div class="col-12">
    <h3 class="text-muted text-center mt-2">Users</h3>
        <table id="insight_table" class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">IP Adress</th>
                    <th scope="col">Date-Time</th>
                    <th scope="col">User Agent</th>
                    <th scope="col">Remote Port</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if(isset($users)) {
                    $sno = 0;
                    foreach($users as $user) {
                ?>
                <tr>
                    <th scope="row"><?=++$sno;?></th>
                    <td><?=$user->ip_address;?></td>
                    <td><?=$user->datetime;?></td>
                    <td><?=$user->user_agent;?></td>
                    <td><?=$user->remote_port;?></td>
                    <td>
                        <a class="btn btn-sm btn-outline-info edit_button" href="<?=base_url('admin/Insight/info/'.$user->id);?>" target="_blank"><i class="fa fa-eye"></i> View</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>