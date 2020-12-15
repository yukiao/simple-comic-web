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
        <i class="fas fa-sign-out-alt"></i>
        Logout
    </a>

    <a class="btn btn-primary my-3 create-btn" href='/admin/create'>
        <i class='fas fa-plus' style="font-size: 1.5rem"></i>
    </a>
    <div class='p-3 comic-list w-100'>
        <?php foreach($komik as $k) : ?>
            <div id="<?= $k['id']; ?>" class="list-item py-1 pl-2 d-flex w-100">
                <div class="d-inline box">
                    <img src="/images/<?= $k['cover']; ?>" alt="cover" style="height: 100%">
                    <?= $k['judul']; ?>
                </div>
                <div style='flex:1'></div>
                <div class="flex-shrink-0 d-inline" style='width:100px'>
                    <form action="/admin/<?= $k['id']; ?>" method="post" class="d-inline" style='flex: 1'>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type='submit' class="btn">
                            <i class='fas fa-trash'></i>
                        </button>
                    </form>
                    <form action='/admin/edit/<?= $k['slug']; ?>' method='get' class="d-inline" style='flex: 1'>
                        <button class="btn">
                            <i class='fas fa-pen'></i>
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>

