@foreach ($getData as $data)
    <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1" role="dialog"
        aria-labelledby="detalModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title h4" style="font-size: 12px; font-weight: bold; text-transform: uppercase;"
                        id="detailModal">Detail Data</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Tahun</label>
                        <div><input type="integer" class="form-control" id="datepicker" required name="tahun"
                                value="{{ $data->tahun }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Pemerkasa</label>
                        <div><input type="text" class="form-control" id="pemerkasa" required name="pemerkasa"
                                value="{{ $data->masterSkpd->nama }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="name">Perihal</label>
                            <textarea class="form-control" id="perihal" rows="5" name="perihal"
                                placeholder="{{ __('contoh: Kawasa Tanpa Asap Roko') }}"
                                value="{{ old('perihal') }}" required autofocus readonly>{{ $data->perihal }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">{{ $data->file }}</label>
                            <embed src="../perpu/{{ $data->file}}" width="767px" height="1150px" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                            {{-- <button type="submit" class="btn btn-primary">
                                Save
                            </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
