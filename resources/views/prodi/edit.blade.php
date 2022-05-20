<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Program Studi
        </h2>
    </x-slot>
    <div class="row pt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="col">
            <h2>Form Edit Prodi</h2>
            @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
            @endif
            <form action="{{ route('prodi.update', ['prodi' => $prodi->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') ?? $prodi->nama }}">
                    {{-- null coalescing operator --}}
                    @error('nama')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Ubah</button>
            </form>
        </div>
    </div>
</x-app-layout>