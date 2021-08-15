<div class="container mt-5">

    <div class="row">
        <div class="col-9">
            <h3 class="alert-info">FORBES 2021</h3>
            <!--
            <table class="table table-responsive text-center  align-middle table-striped table-hover ">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Sales</th>
                        <th>Profit</th>
                        <th>Assets</th>
                        <th>Market Value</th>
                        <th>Year</th>
                    </tr>
                </thead>
                -->
                <div class="container">
                <ul class="list-group">
                    <?php foreach($data['fbs'] as $forbes) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start "><?= $forbes['Name']?>
                        <a href="<?= BASEURL; ?>forbes/detail/<?= $forbes['id'] ?>" class="badge rounded-pill bg-primary  ">Primary</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                "</div>
            </table>
            </div>
        </div>
    </div>
</div>
