<div class="container mt-5">
<div class="row">
        <div class="col-9">
        <?php Flasher::flash();?>
    </div>
</div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tambahdata" data-bs-toggle="modal" data-bs-target="#formmodal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-lg-6">
        <form action="<?= BASEURL; ?>forbes/search" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search"  name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="search">Search</button>
            </div>
        </form>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <h3 class="alert-info mt-3">FORBES 2021</h3>
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
                        <li class="list-group-item">
                            <?= $forbes['name']?>
                            <a href="<?= BASEURL; ?>forbes/detail/<?= $forbes['id'] ?>" class="badge bg-info float-end" >Detail</a>                                             <!-- data-id="" mengambil/menangkap data ID menggunakan jquery ketika klik tombol edit-->
                            <a href="<?= BASEURL; ?>forbes/edit/<?= $forbes['id'] ?>" class="badge bg-warning float-end modaledit" data-bs-toggle="modal" data-bs-target="#formmodal" data-id="<?= $forbes['id']; ?>">Edit</a>
                            <a href="<?= BASEURL; ?>forbes/hapus/<?= $forbes['id'] ?>" class="badge bg-danger float-end" onclick=" return confirm('Anda Yakin?');" ">Hapus</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                </div>
            </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodallabel">Tambah Data Forbes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="<?= BASEURL;?>forbes/tambah" method="post">

            <div class="form-grup">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                </div>

                <div class="form-grup">
                    <label for="rank" class="col-sm-2 col-form-label">Rank</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="rank" name="rank">
                    </div>
                </div>

                <div class="form-grup">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                
                <div class="form-grup">
                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                </div>

                <div class="form-grup">
                    <label for="sales" class="col-sm-2 col-form-label">Sales</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sales" name="sales">
                    </div>
                </div>
                
                <div class="form-grup">
                    <label for="profit" class="col-sm-2 col-form-label">Profit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="profit" name="profit">
                    </div>
                </div>
                
                <div class="form-grup">
                    <label for="assets" class="col-sm-2 col-form-label">Assets</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assets" name="assets">
                    </div>
                </div>

                <div class="form-grup">
                    <label for="market" class="col-sm-2 col-form-label">Market Value</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="market" name="market_value">
                    </div>
                </div>
                
                <div class="form-grup">
                    <label for="year" class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="year" name="year">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>