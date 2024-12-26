<x-layout>
    <x-slot name="page_name">Halaman Tugas</x-slot>
    <x-slot name="page_title"></x-slot>
    <x-slot name="page_content">
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(to right, #770210, #DD041E);">
                <h4>Form Tambah Tugas</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('scheduleTask.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="mata_kuliah" class="col-sm-4 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="matkul" name="matkul" placeholder="Masukkan Mata Kuliah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dosen" class="col-sm-4 col-form-label">Dosen</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Masukkan Nama Dosen">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deadline" class="col-sm-4 col-form-label">Deadline</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Masukkan Deadline">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Masukkan Deskripsi"></textarea>
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