<div class="contaier mt-3">
    <div class="container card" style="width: 18rem;">
    <img src="https://cdn.pixabay.com/photo/2019/12/15/18/24/winter-4697776_960_720.jpg" class="card-img-top" alt="Pemandangan">
    <div class="card-body">
        <h5 class="card-title"><?= $data['title']; ?></h5>
        <p class="card-text"><?= $data['fbs']['rank']; ?></p>  
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $data['fbs']['name']; ?></li>
        <li class="list-group-item"><?= $data['fbs']['country']; ?></li>
        <li class="list-group-item"><?= $data['fbs']['sales']; ?></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link"><?= $data['fbs']['profit']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['assets']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['market_value']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['year']; ?></a>
    </div>
    </div>
</div>
