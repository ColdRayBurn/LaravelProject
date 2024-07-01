
<x-header></x-header>
<main>
    <div class="container">
        <h1>NEWS</h1>
        <div class="card-container">
            <?foreach ($news as $new) {?>
            <div class="card">
                <div class="card-icon">
                    <i class="fas <?=$new['badge']?>"></i>
                </div>
                <div class="card-content">
                    <h2><?=$new['title']?></h2>
                    <p><?=$new['text']?></p>
                    <a href="/news/<?=$new['id']?>">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <?}?>
        </div>
    </div>
</main>
<x-footer></x-footer>
