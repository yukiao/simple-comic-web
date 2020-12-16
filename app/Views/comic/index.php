<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class='container '>

        <br>
        <div aria-label="breadcrumb ">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comic</li>
            </ol>
        </div>
        <form class='search-form my-5' action="" method="POST">
            <input class='search-input flex-fill' type="text" placeholder="Search comic" name="keyword" />
            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <h2>Comic List</h2>
        <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php foreach($komik as $k): ?>
            <div class="col-lg-3 col-md-4 col-6 comic mb-5" id="<?= $k['id']; ?>" data-toggle="modal" data-target="#exampleModal">
                <div style="height:350px; width:100%">
                    <img src ="/images/<?= $k['cover']; ?>" class="w-100" style="height: 100% ;object-fit:cover"/>
                </div>
                <p  class="text-center"><?= $k['judul']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('bootstrap','bootstrap_pagination'); ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src ="" id="detail-picture" class="w-100 d-none d-lg-block"/>
                    </div>
                    <div class="col-12 col-lg-8 body-detail">
                        <div class="row">
                            <div class="col-4">
                                <storng>Title: </storng>
                            </div>
                            <div class="col-8">
                                <p id="detail-title"></p>
                            </div>
                        </div>
                        <br/>
                        <strong>Synopsis:</strong>
                        <p id="detail-synopsis"></p>
                        <br>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
    <script type="text/javascript">

        var passedArray = <?php echo json_encode($komik); ?>;

        const comics = document.querySelectorAll('.comic');
        for(let i of comics){
            i.addEventListener('click',function(e){
                const modalContent = document.querySelector('.body-detail');
                let data;

                if(modalContent.lastChild.tagName=="A"){
                    modalContent.removeChild(modalContent.lastChild);
                }

                if(e.target.tagName == 'IMG'){
                    data = passedArray.find(comic => comic.id == e.target.parentElement.parentElement.id);
                }
                else{
                    data = passedArray.find(comic => comic.id == e.target.parentElement.id);
                }
                let cutting = data.synopsis.split(' ').slice(0,30).join(' ')+" ...";
                document.getElementById('detail-picture').src =  "/images/"+data.cover;
                document.getElementById('detail-title').innerHTML =  data.judul;
                document.getElementById('detail-synopsis').innerHTML =  cutting

                let button = document.createElement('a');
                button.setAttribute('class','btn btn-primary')
                button.setAttribute('href',`/comic/${data.slug}`);
                button.setAttribute('style',"background-color:#8e51c7")
                button.textContent = 'More Detail'

                modalContent.appendChild(button);
            })
        }
    </script>
<?= $this->endSection(); ?>