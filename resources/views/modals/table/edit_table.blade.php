<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Table</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update_table') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3">
                            <label for="table_name" class="col-md-4 col-form-label text-md-end">{{ __('Table Name') }}</label>

                            <div class="col-md-6">
                                <input id="table_name" type="text" class="form-control @error('table_name') is-invalid @enderror" name="table_name" value="{{ old('table_name') }}" required autocomplete="table_name" autofocus>

                                @error('table_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select id="status" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                                    <option selected disabled>Select Status</option>
                                    <option value="Normal">Normal</option>
                                    <option value="VIP">VIP</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>