<!doctype html>
<html lang="en">

<head>
    <title>Lesen Seksyen 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        td {
            font-size: 15pt;
        }

        @page{
            size:A4;
            margin: 15pt;
        }

        @media print {
            .endpage {
                page-break-after: always;
            }

            .page {
                min-height: 350mm;
                height: -50px;
            }

            .footer {
                height: 50px
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div class="container">
        @foreach ($posts as $key=>$post)
            <div class="page">

                <table width="100%">
                    <tr>
                        <td width="25%">&nbsp;</td>
                        <td width="50%" align="center"><img
                                src="https://dusuntua.com/images/listing_photos/170_jatanegaramalaysia.png"
                                width="30%" alt="">
                            <h3 class='mt-2'>KEMENTERIAN KEWANGAN</h3>
                        </td>
                        <td width="25%" align='right' valign='top'>
                            No MAG: 8601
                        </td>
                    </tr>
                    <tr>
                        <td>NO. FAIL BAHARU</td>
                        <td>: {{ strtoupper($post->title) }}</td>
                        <td rowspan='5' align="right"><img
                                src="https://th.bing.com/th/id/OIP.iMh-rvC1iGelEn9aAITxlQHaHa?pid=ImgDet&w=512&h=512&rs=1"
                                width="80%" alt=""></td>
                    </tr>
                    <tr>
                        <td>NO. FAIL LAMA</td>
                        <td>: {{ strtoupper($post->title) }}</td>

                    </tr>
                    <tr>
                        <td>NO. LESEN</td>
                        <td>: {{ strtoupper($post->title) }}</td>

                    </tr>
                    <tr>
                        <td>FI TAHUNAN</td>
                        <td>: {{ strtoupper($post->title) }}</td>

                    </tr>
                    <tr>
                        <td>FI PINDAHAN</td>
                        <td>: {{ strtoupper($post->title) }}</td>

                    </tr>
                </table>
                <table width="100%" class="mt-5">
                    <tr>
                        <td>
                            <h3 class="text-center">LESEN DI BAWAH SEKSYEN 5<br>AKTA PERTARUHAN WANG TERKUMPUL 1967</h3>
                        </td>
                    </tr>
                </table>
            </div>
            <footer class="footer"><center>{{$key+1}}</center></footer>
            <div class="endpage"></div>
        @endforeach

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
