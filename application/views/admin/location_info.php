<div class="container m-top mb-5" style="min-height: 500px;">
    <div class="row justify-content-around">
        <div class="col-12 mt-3 text-center">
            <table id="" class="table table-responsive-md table-striped table-dark table-hover mt-3">
            <thead class="thead-light"><tr><th colspan="2"><h4>User Insight</h4></th></tr></thead>
            <tbody>
                <tr><th scope="col">Country</th><td><?=$info['country'];?></td></tr>
                <tr><th scope="col">Country code</th><td><?=$info['countryCode'];?></td></tr>
                <tr><th scope="col">Region</th><td><?=$info['region'];?></td></tr>
                <tr><th scope="col">Region Name</th><td><?=$info['regionName'];?></td></tr>
                <tr><th scope="col">City</th><td><?=$info['city'];?></td></tr>
                <tr><th scope="col">Zip</th><td><?=$info['zip'];?></td></tr>
                <tr class="bg-success"><th scope="col">Latitude</th><td><?=$info['lat'];?></td></tr>
                <tr class="bg-warning"><th scope="col">Longitude</th><td><?=$info['lon'];?></td></tr>
                <tr><th scope="col">Timezone</th><td><?=$info['timezone'];?></td></tr>
                <tr><th scope="col">ISP</th><td><?=$info['isp'];?></td></tr>
                <tr><th scope="col">Org</th><td><?=$info['org'];?></td></tr>
                <tr><th scope="col">AS</th><td><?=$info['as'];?></td></tr>
            </tbody>
            </table>
            <a id="" href="<?=base_url('Info/map_view/'.$info['lat'].'/'.$info['lon']);?>" data-lat="<?=$info['lat'];?>" data-lon="<?=$info['lon'];?>" target="_blank" class="btn btn-success">View on Google Map</a>
        </div>
    </div>
</div>
