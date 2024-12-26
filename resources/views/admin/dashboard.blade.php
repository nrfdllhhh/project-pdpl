<x-layout>
  <x-slot name="page_name">Dashboard</x-slot>
  <x-slot name="page_content">
    <div class="row">
      <div class="col-lg-4 col-12 mb-3">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <p>Jadwal Tugas</p>
            <h3>{{ $taskCount }}</h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book-open"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-12 mb-3">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <p>Belum Selesai</p>
            <h3>{{ $belumSelesaiCount }}</h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-circle-xmark"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-12 mb-3">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <p>Sudah Selesai</p>
            <h3>{{ $selesaiCount }}</h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-circle-check"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </x-slot>
</x-layout>
