    <div class="container mt-3">
        <div class="kotak">
            <?php
            Flasher::flash()
            ?>
        </div>
        <div class="jumbotron ">
            <h1 class="display-5">Data Gaji Karyawan</h1>
            <hr class="my-4">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Gaji Bulan</th>
                            <th scope="col">Hadir Perbulan</th>
                            <th scope="col">Ijin Perbulan</th>
                            <th scope="col">Besar Gaji Perhari</th>
                            <th scope="col">Total Gaji</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Dibayar</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        $i = 1;
                        foreach ($data['gaji'] as $data) { ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= ucfirst($data['nama_user']) ?></td>
                            <td><?= $data['nama_bulan'] ?></td>
                            <td><?= $data['jumlah_hadir'] ?> kali /bulan</td>
                            <td><?= $data['jumlah_ijin'] ?> kali /bulan</td>
                            <td>Rp.<?= $data['besar_gaji'] ?>/hari</td>
                            <td>Rp.<?= $data['total_gaji'] ?></td>
                            <td>
                                <?php if ($data['status'] == 1) { ?>
                                <a href="#"><button class="btn btn-info">Dibayar</button></a>
                                <?php } else { ?>
                                <a href="#"><button class="btn btn-secondary">Pending</button></a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if (!empty($data['create_at'])) { ?>
                                <?= $data['create_at'] ?>
                                <?php  } else { ?>
                                Belum Dibayar
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>