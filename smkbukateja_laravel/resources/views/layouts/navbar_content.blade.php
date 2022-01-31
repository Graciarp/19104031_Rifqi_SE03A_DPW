@php
    use App\Models\{programKeahlian, ekstrakurikuler};

    $programKeahlian = programKeahlian::select('id','judul')->get();
    $ekstrakurikuler = ekstrakurikuler::select('id','judul')->get();
@endphp

<li class="nav-item active">
    <a class="nav-link navigasi-link" href="/">Beranda</a>
</li>
<li class="nav-item">
    <a class="nav-link navigasi-link" href="/profil">Profil Sekolah</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link navigasi-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkKeahlian" role="button" data-toggle="dropdown" aria-expanded="false">
        Program Keahlian
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkKeahlian">
        @foreach ($programKeahlian as $item)
            @if(Agent::isDesktop() or Agent::isTablet())
            <a class="dropdown-item" href="{{url('/program_keahlian' . '/' . $item->id)}}">
                {{$item->judul}}
            </a>
            @else
            <a class="dropdown-item" href="{{url('/program_keahlian' . '/' . $item->id)}}">
                <small>
                    {{Str::limit($item->judul, 30)}}
                </small>
            </a>
            @endif
        @endforeach
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link navigasi-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkEkstra" role="button" data-toggle="dropdown" aria-expanded="false">
        Ekstrakurikuler
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkEkstra">
        @foreach ($ekstrakurikuler as $item)
            <a class="dropdown-item" href="{{url('ekstrakurikuler/detail' . '/' . $item->id)}}">
                {{$item->judul}}
            </a>
        @endforeach
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link navigasi-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
Informasi
  </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{url('/informasi')}}">Berita & Acara</a>
        <a class="dropdown-item" href="http://lsp.smkn1bukateja.sch.id">LSP</a>
        <a class="dropdown-item" href="https://lms.smkn1bukateja.sch.id/a94355711b3cbd91f699e926ef37da9db6e870866ca288b9b3d2d88d7058f04f6a76c1b95b497ea5030dd6b99de4dbdcf5bd94fa149a6828c9ad810bcae60d82/login">SEMAKIN</a>
        {{-- <a class="dropdown-item" href="#">Kegiatan Siswa</a>
        <a class="dropdown-item" href="#">Lain - Lain</a> --}}
    </div>
</li>
<li class="nav-item">
    <a class="nav-link navigasi-link" href="{{url('prestasi')}}">Prestasi</a>
</li>