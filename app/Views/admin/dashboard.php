<?= $this->extend('layout/admin-template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h3>Comic List</h3>
    <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
    <?php endif; ?>
    <a class="btn btn-danger my-3" href='/login/logout'>
        <i class='fas fa-plus'></i>
        Logout
    </a>

    <a class="btn btn-primary my-3" href='/admin/create'>
        <i class='fas fa-plus'></i>
        Create
    </a>
    <ul class='pl-0'>
        <?php foreach($komik as $k) : ?>
            <li id="<?= $k['id']; ?>" class="list-item py-1 pl-2 d-flex justify-content-between">
                <span>
                    <img src="/images/<?= $k['cover']; ?>" alt="cover" style="height: 100%">
                    <?= $k['judul']; ?>
                </span>
                <div >
                    <form action="/admin/<?= $k['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type='submit' class="btn">
                            <i class='fas fa-trash'></i>
                        </button>
                    </form>
                    <form action='/admin/edit/<?= $k['slug']; ?>' method='get' class="d-inline" >
                        <button class="btn">
                            <i class='fas fa-pen'></i>
                        </button>
                    </form>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->endSection(); ?>

