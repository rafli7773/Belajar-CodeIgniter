<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Siswa</li>
                <?php foreach ($siswa as $s) : ?>
                    <li class="list-group-item"><?= $s['nama']; ?>
                        <a href="<?= base_url('siswa/detail'); ?>/<?= $s['id']; ?>" class="badge badge-primary float-right ml-2">Detail</a>
                        <a href="<?= base_url('siswa/hapus'); ?>/<?= $s['id']; ?>" class="badge badge-danger hapus float-right ml-2">Hapus</a>
                        <a href="<?= base_url('siswa/ubah'); ?>/<?= $s['id']; ?>" class="badge badge-success float-right ml-2">Ubah</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>