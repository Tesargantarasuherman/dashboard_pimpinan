<!-- Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h4" style="font-size: 12px; font-weight: bold; text-transform: uppercase;"
                    id="addModal">Tambah Data</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="addModal" method="POST" action="{{ route('kuisioner.create') }}"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Skpd</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_skpd" required>
                            <option value="">Pilih</option>

                            @foreach ($skpd as $p)
                                <option value={{ $p->id }}>{{ $p->nama }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Kuisioner</label>
                        <textarea class="form-control" id="kuisioner" rows="5" name="kuisioner" placeholder="{{ __('Kuisioner') }}"
                            value="{{ old('kuisioner') }}" required autofocus></textarea>
                    </div>

                    <div class="form-group">
                        <label for="name">Iso</label>
                        <input type="text" class="form-control form-control-user" name="iso"
                            placeholder="{{ __('Iso') }}" value="{{ old('iso') }}" required autofocus>
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
