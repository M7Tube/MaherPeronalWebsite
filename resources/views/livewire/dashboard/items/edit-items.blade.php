<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form wire:submit.prevent="edit">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="en_name"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="en_name" />
                                                                        <span class="text-danger">
                                                                            @error('en_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Name') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="ar_name"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="ar_name" />
                                                                        <span class="text-danger">
                                                                            @error('ar_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Name') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <textarea class="form-control" id="en_desc" type="text" autocomplete="off" wire:model="en_desc"></textarea>
                                                                        <span class="text-danger">
                                                                            @error('en_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Descriptions') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <textarea class="form-control" id="ar_desc" type="text" autocomplete="off" wire:model="ar_desc"></textarea>
                                                                        <span class="text-danger">
                                                                            @error('ar_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Descriptions') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="picture"
                                                                            type="file" autocomplete="off"
                                                                            wire:model="picture" />
                                                                        <span class="text-danger">
                                                                            @error('picture')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Picture') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($oldpicture)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            Old Picture Preview:

                                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $oldpicture)) !!}"
                                                                                width="150px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($picture)
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="my-2 col-12">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body text-right">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            Picture Preview:

                                                                            <img src="{{ $picture->temporaryUrl() }}"
                                                                                width="500px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                            <button type="submit"
                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Edit') }}
                                <i class="bi bi-pencil-fill"></i></button>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                            <button wire:click.prevent="delete()"
                                class="mx-auto w-100 btn btn-block btn-outline-danger">{{ __('Delete') }}
                                <i class="bi bi-trash"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
