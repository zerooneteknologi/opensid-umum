<?php if (can('u')) : ?>
    <form action="<?= $form_action ?>" method="post" id="validasi">
        <div class='modal-body'>
            <div class="form-group">
                <label for="nik">NIK / Nama Penduduk</label>
                <select class="form-control input-sm select2 required" id="nik" name="nik" style="width:100%;">
                    <option option value="">-- Silakan Cari NIK / Nama Penduduk--</option>
                    <?php foreach ($penduduk as $data) : ?>
                        <option value="<?= $data['id'] ?>">NIK : <?= $data['nik'] . ' - ' . $data['nama'] . ' - ' . $data['kk_level'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-responsive">
                <table id="keluarga" class="table table-bordered dataTable table-hover nowrap" style="display:none;">
                    <thead class="bg-gray disabled color-palette">
                        <tr>
                            <th>#</th>
                            <th>No</th>
                            <th>NIK</th>
                            <th class="text-center">Nama</th>
                            <th>SHDK</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
            <button type="submit" class="btn btn-social btn-flat btn-info btn-sm" id="ok"><i class='fa fa-check'></i> Simpan</button>
        </div>
    </form>
    <?php $this->load->view('global/validasi_form'); ?>
    <script>
        $(function() {
            $('#nik').select2();
        });

        $('#nik').on('select2:select', function (e) {
            var table = $('#keluarga').DataTable({
                responsive: true,
                processing: true,
                serverSide: false,
                ajax: {
                    url: `<?= site_url('rtm/datables_anggota/') ?>${e.params.data.id}`,
                    dataSrc: function(data){
                        if(data.data == null){
                            $('#keluarga').hide();
                        } else {
                            $('#keluarga').show();
                            return data.data;
                        }
                    }
                },
                'columns': [
                    {
                        'data': function(data) {
                            let checked = data.no == 1 ? 'checked' : '';
                            return `<td><input type="checkbox" name="id_cb[]" value="${data.id}" ${checked} /></td>`
                        },
                        'class': 'padat'
                    },
                    {
                        'data': 'no',
                        'class': 'padat'
                    },
                    {
                        'data': 'nik',
                        'class': 'padat'
                    },
                    {
                        'data': 'nama',
                    },
                    {
                        'data': 'kk_level',
                        'class': 'padat'
                    },
                ],
            });

            table.destroy();
        });
    </script>
<?php endif; ?>