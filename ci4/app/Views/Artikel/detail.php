<?= $this->include('template/header'); ?>

<div class="col-sm-8">
    <article class="entry">
        <h2><?= $artikel['judul']; ?></h2>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?= $artikel['judul']; ?>">
        <p><?= $artikel ['isi']; ?></p>
    </article>
</div>

<?= $this->include('template/footer'); ?>