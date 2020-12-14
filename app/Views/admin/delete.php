<?= $this->extend('layout/admin-template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h3>Delete Comic Menu</h3>
    <ul>
        <?php foreach($komik as $k) : ?>
            <li id="<?= $k['id']; ?>" class="list-item py-1 pl-2">
                <img src="<?= $k['cover']; ?>" alt="cover" style="height: 100%">
                <?= $k['judul']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?= $this->endSection(); ?>