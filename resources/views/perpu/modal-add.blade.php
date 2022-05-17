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
            <form class="addModal" method="POST" action="{{ route('perpu.create') }}"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Tahun</label>
                        <div><input type="tahun" class="form-control" value="" id="datepicker" required name="tahun"></div>
                    </div>

                    <div class="form-group">
                        <label for="name">Pemerkasa</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="pemerkasa" required>
                            <option value="">Pilih</option>

                            @foreach ($skpd as $p)
                                <option value={{ $p->id }}>{{ $p->nama }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Perihal</label>
                        <textarea class="form-control" id="perihal" rows="5" name="perihal"
                            placeholder="{{ __('contoh: Kawasa Tanpa Asap Roko') }}"
                            value="{{ old('perihal') }}" required autofocus></textarea>
                    </div>

                    <div class="form-group">
                        <label for="name">File</label>
                        <input type="file" class="form-control form-control-user" name="file"
                            placeholder="{{ __('file') }}" value="{{ old('file') }}" required autofocus>
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
@include('perpu.js')
