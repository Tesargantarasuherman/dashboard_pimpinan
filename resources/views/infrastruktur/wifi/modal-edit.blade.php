<!-- Modal -->
@foreach ($getWifi as $wifi)
    <div class="modal fade" id="edit-modal-{{ $wifi->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title h4" style="font-size: 12px; font-weight: bold; text-transform: uppercase;"
                        id="editModal">Edit Status Wifi</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="editModal" method="POST" action="{{ route('wifi.update', $wifi->id) }}"
                    enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{-- <div class="modal-body">

                        <div class="form-group">
                            <label for="name">Lokasi</label>
                            <input type="text" class="form-control form-control-user" name="lokasi"
                                placeholder="{{ __('lokasi') }}" value="{{ old('lokasi', $wifi->lokasi) }}"
                                required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="name">Latitude</label>
                            <input type="text" class="form-control form-control-user" name="latitude"
                                placeholder="{{ __('latitude') }}" value="{{ old('latitude', $wifi->latitude) }}"
                                required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="name">longitude</label>
                            <input type="text" class="form-control form-control-user" name="longitude"
                                placeholder="{{ __('longitude') }}" value="{{ old('longitude', $wifi->longitude) }}"
                                required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="name">Dinas</label>
                            <input type="text" class="form-control form-control-user" name="dinas"
                                placeholder="{{ __('dinas') }}" value="{{ old('dinas', $wifi->dinas) }}" required
                                autofocus>
                        </div>

                        <div class="form-group">
                            <label for="name">Vendor</label>
                            <input type="text" class="form-control form-control-user" name="vendor"
                                placeholder="{{ __('vendor') }}" value="{{ old('vendor', $wifi->vendor) }}" required
                                autofocus>
                        </div>

                        <div class="form-group">
                            <label for="name">Link Streaming</label>
                            <input type="text" class="form-control form-control-user" name="link streaming"
                                placeholder="{{ __('link streaming') }}"
                                value="{{ old('link streaming', $wifi->link_stream) }}" required autofocus>
                        </div>

                    </div> --}}
                    <div class="modal-body">
                        <select class="form-control" id="status" name="status" value="{{ old('status') }}"
                            required>
                            <option value="{{ old('status') }}">Pilih</option>
                            <option value="0" {{ $wifi->status == 0 ? 'selected' : '' }}>OFF</option>
                            <option value="1" {{ $wifi->status != 0 ? 'selected' : '' }}>ON</option>
                        </select>
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
@endforeach
