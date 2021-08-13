<div class="container mt-5">

    <div class="row">
        <div class="col-9">
            <h3 class="alert-info">FORBES 2021</h3>
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
                <?php foreach($data['fbs'] as $forbes) : ?>
                    <tr>
                        <td><?= $forbes['Rank']; ?></td>
                        <td><?= $forbes['Name']; ?></td>
                        <td><?= $forbes['Country']; ?></td>
                        <td><?= $forbes['Sales']; ?></td>
                        <td><?= $forbes['Profit']; ?></td>
                        <td><?= $forbes['Assets']; ?></td>
                        <td><?= $forbes['Market_Value']; ?></td>
                        <td><?= $forbes['Year']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            </div>
        </div>
    </div>
</div>
