<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mata Kuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning">
                        Form Mata Kuliah
                    </div>
                    <div class="card-body">
                       <!-- <h2>Form Matakuliah</h2> -->
                     
                        <form action="<?= base_url('matakuliah/cetak') ?>" method="POST">
                            <div class="form-group">
                                <label for="kode">Kode MTK</label>
                                <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode MTK" value="<?= set_value('kode') ?>">
                                <?= form_error('kode', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama MTK</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama MTK" value="<?= set_value('nama') ?>">
                                <?= form_error('nama', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="sks">SKS</label>
                                <select name="sks" id="sks" class="form-control">
                                    <option value="">-- PILIH SKS --</option>
                                    <option value="1" <?= set_select('sks', '1') ?>>1</option>
                                    <option value="2" <?= set_select('sks', '2') ?>>2</option>
                                    <option value="3" <?= set_select('sks', '3') ?>>3</option>
                                    <option value="4" <?= set_select('sks', '4') ?>>4</option>
                                </select>
                                <?= form_error('sks', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
