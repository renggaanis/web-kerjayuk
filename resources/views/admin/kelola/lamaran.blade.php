<!DOCTYPE html>
<html>
<head>
@foreach($data as $p)
<title>{{ $p->name }}</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="{{ asset('style.css') }}">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>
<body id="top">
<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <img src="{{ asset( $p->foto ) }}" class="img-fluid" style="width: 100px" alt="{{ $p->name}}" />
        </div>
        
        <div id="name">
            <h1 class="quickFade delayTwo">Lamaran Kerja</h1>
            <h2 class="quickFade delayThree">{{ $p->name }}</h2>
        </div>
        
        <div id="contactDetails" class="quickFade delayFour">
        <table>
            <tr>
                <td>E-mail</td><td>:</td><td><a href="" target="_blank">{{ $p->user->email }}</a></td>
            </tr>
            <tr>
                <td>Mobile</td><td>:</td><td>{{ $p->telepon }}</td>
            </tr>
        </table>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
        <section>
            <div>
            <p>Kepada Yth,</p>
            <p>Manajer HRD</p>
            <p>{{ $p->loker->judul}}</p>
            <p>{{ $p->kab->kabupaten}}</p>
            </br>
            </br>
            <p>Dengan hormat,</p>
            </br>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            Sehubungan dengan adanya informasi lowongan kerja di Website KerjaYuk!,
            dengan ini saya berminat untuk mengajukan diri untuk menempati posisi  {{ $p->posisi }}
             di {{ $p->loker->judul}} yang Bapak/Ibu pimpin.</p>
            <p>Data singkat saya seperti berikut:</p>
             <div class="sectionContent">
                <table>
                <tr>
                    <td>Nama</td><td>: {{ $p->name }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td><td>: {{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Agama</td><td>: {{ $p->agama }}</td>
                </tr>
                <tr>
                    <td>Warga Negara</td><td>: Indonesia</td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td><td>: {{ $p->jurusan }}</td>
                </tr>
                <tr>
                    <td>Bidang Keahlian</td><td>: {{ $p->komp->name }}</td>
                </tr>
                <tr>
                    <td>Alamat</td><td>: {{ $p->alamat }}</td>
                </tr>
                <tr>
                    <td>Telepon</td><td>: {{ $p->telepon }}</td>
                </tr>
                <tr>
                    <td>E-mail</td><td>: {{ $p->user->email }}</td>
                </tr>
                </table>
            </div>
        </section>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        <section>
        <p>Demikian surat permohonan kerja ini saya ajukan, besar harapan saya,
         Bapak berkenan meluangkan sedikit waktu untuk membaca dan mempertimbangkannya.
          Atas perhatian dan pertimbangan Bapak saya ucapkan terima kasih.</p>
            <br><br><br><br>
            <p align="right">Hormat saya,&nbsp&nbsp&nbsp<br><br><br>{{ $p->name}}</p>
        </section>
@endforeach
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>