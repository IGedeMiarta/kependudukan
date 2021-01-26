<!DOCTYPE html>
<html>

<head>
    <table class="table table-borderless table-condensed table-hover" width="100%">
        <tr>
            <td width="13%" align="center">
                <img src="<?= base_url('assets/images/ende.png') ?>" alt="">
            </td>
            <td width="74%" align="center">
                <p class="kecil">
                    <font size="4" face="times new roman"><b>PEMERINTAH KABUPATEN ENDE<br><br> KECAMATAN ENDE SELATAN<br><br> KELURAHAN TETANDA<br></b></font>
                    <font size="3" face="times new roman">

                        <br><br>
                        Jln. AdiSucipto - IPPI Ende <br><br>
                    </font>
                </p>
            </td>
            <td width="13%" align="center"></td>
        </tr>
    </table>

    <title>Surat Pendatang</title>
</head>

<body>

    <style type="text/css">
        table {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #000;
            /* text-shadow: 1px 1px 0px #fff; */
            background: #ffffff;
            border: #ccc 0px solid;
            border-collapse: collapse;
        }

        table th {
            /* padding: 15px 35px; */
            border-left: 0px solid #e0e0e0;
            border-bottom: 0px solid #e0e0e0;
            background: #c4c4c4;
        }

        table th:first-child {
            border-left: none;
        }

        table tr {
            text-align: left;
            padding-left: 20px;
        }

        table td:first-child {
            text-align: left;
            padding-left: 20px;
            border-left: 0;
        }

        table td {
            padding: 5px 10px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }

        table tr:last-child td {
            border-bottom: 0;
        }

        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }

        .table-borderless td,
        .table-berderless th {
            border: 0;
        }

        img {
            width: 75px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        img.kiri {
            float: left;
            margin: 5px;
        }

        img.kanan {
            float: right;
            margin: 5px;
        }

        p.kecil {
            line-height: 70%;

        }
    </style>

    <div class="container">
        <center>
            <br><br>
            <font size="3" face="times new roman"><b><u>SURAT KETERANGAN KEMATIAN</u><br><br></b></font>
        </center>
        <p>Yang bertanda tangan di bawah ini, Lurah Tetandara, Kecamatan Ende Selatan, menerangakn dengan sesungguhnya bahwa:</p>
        <table cellspacing="n2" class="table table-borderless table-sm">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $mati['nama'] ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?= $mati['tempat_lh'] . ', ' . date('d M Y', strtotime($mati['tgl_lh'])); ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php if ($mati['jenkel'] == 'L') {
                        echo 'Laki-laki';
                    } else {
                        echo 'Perempuan';
                    } ?></td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $mati['pekerjaan'] ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $mati['agama'] ?></td>
            </tr>

        </table>
        <p>
            Oknum tersebut di atas benar-benar telah meninggal pada tanggal
            <?= $mati['tgl_meninggal'] ?>, yang disebabkan karena <?= $mati['sebab'] ?>, dan merupakan warga lppi Kelurahan Tetandara,
            Kecamatan Ende Selatan, Kabupaten Ende. <br>
            Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya
        </p>
        <br><br>
        <table class="table table-borderless table-condensed table-hover" width="100%">
            <tr>
                <td width="10%" align="center">

                </td>
                <td width="60%" align="center">


                <td width="30%">
                    <p align="left">
                        <font size="3" face="times new roman">
                            Ende, <?php echo date('d M Y '); ?><br>
                            LURAH TETANDARA
                            <br><br>
                            <br><br>
                            ANWAR HAMA,SH
                            <br>
                            PENATA TK.I
                        </font>
                    </p>
                </td>

            </tr>
        </table>


    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>