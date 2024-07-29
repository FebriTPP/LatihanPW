@extends('templates.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h5 class="card-title">{{ $data['title'] }}</h5>
    </div>
    <div class="card-body">
      <p class="card-title">{{ $data['npm'] }} merupakan bilangan
        @if ($data['npm'] % 2 === 0)
            <span class="text-primary">GENAP</span>
        @else
            <span class="text-info">GANJIL</span>
        @endif
      </p>

      <p1 class="card-title">{{ $data['npm'] }} merupakan bilangan
        @switch($data['npm'] % 2)
            @case(0)
                <span class="text-primary">GENAP</span>
                @break

            @default
                <span class="text-info">GANJIL</span>
        @endswitch
    </p1>

    <div class="skills">
        <h4 class="text-uppercase">Skill:</h4>
        <div class="d-flex flex-row justify-content-between ">
            <p class="text-dark">PHP</p>
            <div>
                @for ($i = 0; $i < 5; $i++)
                <span class="me-1 text-warning">
                    <i class="bi bi-star-fill"></i>"

                </span>
            @endfor
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between ">
            <p class="text-dark">Java</p>
            <div>
                @for ($i = 0; $i < 5; $i++)
                <span class="me-1 text-warning">
                    <i class="bi bi-star{{$i > 2 ? '-fill' : ''}}"></i>"

                </span>
            @endfor
            </div>
    </div>
    </div>
  </div>

  <div class="card mt-5 mb-5">
    <div class="card-header">
        <h5 class="card-title">List Mahasiswa</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['students'] as $index => $result )
              <tr>
                <th>{{ $index + 1 }}</th>
                <td>{{ $result['npm'] }}</td>
                <td>{{ $result['name']}}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection
