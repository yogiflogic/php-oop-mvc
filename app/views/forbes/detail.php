<div class="contaier mt-3">
    <div class="container card" style="width: 18rem;">
    <img src="https://cdn.pixabay.com/photo/2019/12/15/18/24/winter-4697776_960_720.jpg" class="card-img-top" alt="Pemandangan">
    <div class="card-body">
        <h5 class="card-title"><?= $data['title']; ?></h5>
        <p class="card-text"><?= $data['fbs']['Rank']; ?></p>  
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $data['fbs']['Name']; ?></li>
        <li class="list-group-item"><?= $data['fbs']['Country']; ?></li>
        <li class="list-group-item"><?= $data['fbs']['Sales']; ?></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link"><?= $data['fbs']['Profit']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['Assets']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['Market_Value']; ?></a>
        <a href="#" class="card-link"><?= $data['fbs']['Year']; ?></a>
    </div>
    </div>
</div>
