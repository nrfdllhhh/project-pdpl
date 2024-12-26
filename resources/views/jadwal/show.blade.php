<x-layout>
    <x-slot name="page_name">Halaman Tugas / Show</x-slot>
    <x-slot name="page_title">Detail Tugas</x-slot>
    
    <x-slot name="page_content">
        @if($task !== null)
        <div class="card">
            <div class="card-header text-white" style="background: linear-gradient(to right, #770210, #DD041E);">
                <h4>View Kelola Tugas</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">ID</div>
                    <div class="col-sm-8">: {{ $task->id }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Mata Kuliah</div>
                    <div class="col-sm-8">: {{ $task->matkul }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Dosen</div>
                    <div class="col-sm-8">: {{ $task->dosen }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Deadline</div>
                    <div class="col-sm-8">: {{ $task->deadline }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Deskripsi</div>
                    <div class="col-sm-8">: {{ $task->deskripsi }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 font-weight-bold">Status Tugas</div>
                    <div class="col-sm-8">: {{ $task->status }}</div>
                </div>
            </div>
        </div>
        @else 
            <p class="text-danger">Task not found.</p>
        @endif
        
    </x-slot>
</x-layout>
