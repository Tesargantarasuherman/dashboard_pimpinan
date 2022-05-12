<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h4" style="font-size: 12px; font-weight: bold; text-transform: uppercase;" id="addModal">Tambah Data Menara Telekomunikasi</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="addModal" method="POST" action="{{ route('menara.create') }}"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Lokasi</label>
                        <input type="text" class="form-control form-control-user" name="lokasi"
                            placeholder="{{ __('lokasi') }}" value="{{ old('lokasi') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">Latitude</label>
                        <input type="text" class="form-control form-control-user" name="latitude"
                            placeholder="{{ __('latitude') }}" value="{{ old('latitude') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">longitude</label>
                        <input type="text" class="form-control form-control-user" name="longitude"
                            placeholder="{{ __('longitude') }}" value="{{ old('longitude') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">Dinas</label>
                        <input type="text" class="form-control form-control-user" name="dinas"
                            placeholder="{{ __('dinas') }}" value="{{ old('dinas') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="name">Vendor</label>
                        <input type="text" class="form-control form-control-user" name="vendor"
                            placeholder="{{ __('vendor') }}" value="{{ old('vendor') }}" required autofocus>
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
