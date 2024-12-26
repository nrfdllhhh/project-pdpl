<x-layout>
    <x-slot name="page_name">Halaman Kelola Tugas / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Tugas Anda dengan Teliti :</x-slot>

    <x-slot name="page_content">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(to right, #770210, #DD041E);">
                <h4>Edit Daftar Tugas Anda</h4>
            </div>
            <div class="card-body">

                <form class="forms-sample" action="{{ url('/scheduleTask/update', $task->id) }}" method="post">
                    @csrf
                    @method('put')

                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">

                            <div class="form-group row">
                                <label for="matkul" class="col-sm-4 col-form-label">Mata Kuliah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Masukkan Mata Kuliah" value="{{ $task->matkul ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="dosen" class="col-sm-4 col-form-label">Dosen</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Masukkan Nama Dosen" value="{{ $task->dosen ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="deadline" class="col-sm-4 col-form-label">Deadline</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Masukkan Deadline" value="{{ $task->deadline ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                <div class="col-sm-8">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" cols="30" rows="5">{{ $task->deskripsi ?? '' }}</textarea>
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>
