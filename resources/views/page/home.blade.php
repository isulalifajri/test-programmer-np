@extends('layout.app')

@section('content')
    <h1>Tes Programmer Nippon Paint</h1>    

    <form method="post" action="{{ route('addData') }}">
        @csrf

        <div class="card shadow mb-5">
            <div class="card-body">

                <div class="d-flex justify-content-between flex-wrap">
                    <div class="">
                        <div class="mb-3">
                            <label for="tgl_dok" class="form-label">Tanggal Dok:</label>
                            <input type="date" class="form-control @error('tgl_dok') is-invalid @enderror" name="tgl_dok" id="tgl_dok">
                            @error('tgl_dok')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="gudang" class="form-label">Gudang:</label>
                            <select class="form-select @error('gudang_id') is-invalid @enderror" name="gudang_id" id="gudang">
                                <option value="">Pilih Gudang</option>
                                @foreach($gudangs as $gd)
                                    <option value="{{ $gd->id }}">{{ $gd->kode_gudang }} - {{ $gd->name_gudang }}</option>
                                @endforeach
                            </select>

                            @error('gudang_id')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="pelanggan" class="form-label">Pelanggan:</label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select @error('pelanggan_id') is-invalid @enderror" name="pelanggan_id" id="pelanggan">
                                    <option value="">Select Customer</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" data-nama="{{ $customer->nama }}">{{ $customer->kode }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- @error('pelanggan_id')
                                <div class="invalid-feedback d-block position-absolute mt-5">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nama_pelanggan" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="data-alamat" class="form-label">Alamat :</label>
                                <textarea name="alamat" class="form-control" id="data-alamat" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div id="barang-container" class="mb-3">
                    <div class="barang">
                        <label for="barang" class="form-label">Barang:</label>
                        <select class="form-select @error('barang_id') is-invalid @enderror" name="barang_id" id="barang">
                            <option value="">Select Barang</option>
                            @foreach($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->kode_barang }} - {{ $barang->nama_barang }}</option>
                            @endforeach
                        </select>
                        @error('barang_id')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
    
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan : </label>
                    <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save Data</button>
            </div>
          </div>
    </form>  
  
    
@endsection

@push('js')

    <script>
        document.getElementById('pelanggan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('nama_pelanggan').textContent = selectedOption.dataset.name;
        });

        document.getElementById('pelanggan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('nama_pelanggan').value = selectedOption.dataset.nama;
        });

        document.getElementById('pelanggan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            console.log(selectedOption);
            document.getElementById('data-alamat').value = selectedOption.dataset.alamat;
        });
    </script>
    
@endpush  