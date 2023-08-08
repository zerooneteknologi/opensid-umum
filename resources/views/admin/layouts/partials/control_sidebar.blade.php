<aside class="control-sidebar control-sidebar-light">
    <div class="box-body">
        <div class="box-group" id="accordion">
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aplikasi
                            <?= config_item('nama_aplikasi') ?></a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="box-body">
                        <p align="justify"><?= config_item('nama_aplikasi') ?> adalah aplikasi Sistem Informasi Desa untuk pengelolaan data Desa</p>
                        <p>SID diharapkan dapat membantu pemerintah desa dalam beberapa hal berikut:
                            <ul>
                                <li>Kantor Desa lebih efisien dan efektif</li>
                                <li>Pemerintah Desa lebih transparan dan akuntabel</li>
                                <li>Warga mendapat akses lebih baik pada informasi desa</li>
                                <li>Layanan Publik lebih baik</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
