<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h4" style="font-size: 12px; font-weight: bold; text-transform: uppercase;" id="addModal">Tambah Data</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="addModal" method="POST" action="{{ route('pentest.create') }}"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Nama CSIRT</label>
                        <input type="text" class="form-control form-control-user" name="nama_aplikasi"
                            placeholder="{{ __('Nama Aplikasi') }}" value="{{ old('nama_aplikasi') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">CSIRT</label>
                        <input type="text" class="form-control form-control-user" name="link_website"
                            placeholder="{{ __('Alamat Website') }}" value="{{ old('link_website') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">Tanggal</label>
                        <input type="date" class="form-control form-control-user" name="tanggal"
                            placeholder="{{ __('tanggal') }}" value="{{ old('tanggal') }}" required autofocus>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
