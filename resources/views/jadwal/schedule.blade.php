<x-layout>
    <x-slot name="page_name">Kelola Tugas</x-slot>
    <x-slot name="page_content">
    <section class="content">
  
        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="container-fluid">
            <!-- Konten Jadwal -->
            <div class="card mt-3">
                <div class="card-header text-white" style="background: linear-gradient(to right, #770210, #DD041E);">
                    <h3 class="card-title">Konten Jadwal</h3>
                </div>

                <div class="card-body">
                    <!-- Table inside the card body -->
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th>Id</th>
                                <th>Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Status Tugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_tugas as $tugas)
                            <tr>
                                <td>{{ $tugas->id_user }}</td>
                                <td>{{ $tugas->matkul }}</td>
                                <td>{{ $tugas->dosen }}</td>
                                <td>{{ $tugas->deadline }}</td>
                                <td>{{ $tugas->deskripsi }}</td>
                                <td>{{ $tugas->status }}</td>
                                <td>
                                    <a href="{{ route('jadwal.show', $tugas->id) }}" class="btn btn-primary text-light">
                                        <i class="far fa-eye"></i> Lihat
                                    </a>
                                    <a href="{{ url('schedule/edit', $tugas->id) }}" class="btn btn-warning text-dark">
                                        <i class="far fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ url('schedule/destroy', $tugas->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                            <i class="far fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    </x-slot>
</x-layout>
