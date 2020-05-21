@extends('comp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>  
            </br>
            </br>
          
                @foreach($data as $p)
                <h5>&nbsp&nbsp&nbsp&nbspSilahkan kirimkan hasil keputusan perusahaan anda<br>
                ke alamat email pelamar sebagai berikut: {{ $p->user->email }}</h5>
                @endforeach
        </div>
    </div>
</div>
@endsection