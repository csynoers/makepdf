<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js" integrity="sha512-HLbtvcctT6uyv5bExN/qekjQvFIl46bwjEq6PBvFogNfZ0YGVE+N3w6L+hGaJsGPWnMcAQ2qK8Itt43mGzGy8Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js" integrity="sha512-vv3EN6dNaQeEWDcxrKPFYSFba/kgm//IUnvLPMPadaUf5+ylZyx4cKxuc4HdBf0PPAlM7560DV63ZcolRJFPqA==" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        var docDefinition = {
            // a string or { width: number, height: number }
            pageSize: 'A4',
            content: [
                {
                    columns: [  
                        {
                            stack: [
                                // second column consists of paragraphs
                                'FORMAT LOG BOOK PEGAWAI',
                                'POLTEKKES KEMENKES MEDAN',
                                'TAHUN 2018'
                            ],
                            fontSize: 14,
                            bold: true,
                            alignment: 'center',
                        }
                    ]
                },
                '\n',
                {
                    columns: [  
                        {
                            stack: [
                                // second column consists of paragraphs
                                'NAMA',
                                'NIP / NIK',
                                'PANGKAT / GOL',
                                'JABATAN',
                                'WAKTU PENILAIAN',
                            ],
                            fontSize: 12,
                            width: 110,
                        },
                        {
                            stack: [
                                // second column consists of paragraphs
                                ': afawati, S.Kep., Ns., M.Kes',
                                ': 1932184747328478324',
                                ': Penata Tk. I, III/d',
                                ': Kaprodi D III',
                                ': Senin, 03 September 2018',
                            ],
                            fontSize: 12,
                        },
                    ]
                },
                '\n',   
                {
                    style: 'tableExample',
                    color: '#444',
                    table: {
                        widths: [ 
                            'auto',
                            'auto',
                            'auto',
                            'auto',
                            'auto',
                            'auto',
                            'auto',
                            'auto',
                        ],
                        headerRows: 1,
                        // keepWithHeaderRows: 1,
                        body: [
                            [
                                {text: 'NO', bold: true, alignment: 'center'},
                                {text: 'URAIAN KEGIATAN', bold: true},
                                {text: 'JAM MULAI KEGIATAN', bold: true},
                                {text: 'JAM SELESAI KEGIATAN', bold: true},
                                {text: 'DURASI (MENIT)', bold: true},
                                {text: 'KUANTITAS/VOLUME', bold: true},
                                {text: 'KETERANGAN/KENDALA/HAMBATAN', bold: true},
                                {text: 'PARAF', bold: true},
                            ],
                            [
                                {text: '1', alignment: 'center'},
                                {text: 'Kordinasi dengan sipen MK kep Jiwa Tk. III mhs Prodi D III Kep'},
                                {text: '08.00'},
                                {text: '08.30'},
                                {text: '30'},
                                {text: '1 Kegiatan'},
                                {text: ''},
                                {text: ''},
                            ],
                            [
                                {text: '2', alignment: 'center'},
                                {text: 'Menghadiri pembukaan PKL mahasiswa Tk. IV Prodi IV Keperawatan'},
                                {text: '09.00'},
                                {text: '13.00'},
                                {text: '240'},
                                {text: '1 Kegiatan'},
                                {text: ''},
                                {text: ''},
                            ],
                            [
                                {text: '3', alignment: 'center'},
                                {text: 'Menyusun KPS MK Kep Jiwa Semester V TA 2018/2019'},
                                {text: '14.00'},
                                {text: '15.00'},
                                {text: '60'},
                                {text: '1 Kegiatan'},
                                {text: ''},
                                {text: ''},
                            ],
                            [
                                {text: 'TOTAL KUANTITAS/VOLUME', colSpan: 4, bold:true},
                                {},
                                {},
                                {},
                                {text: '330 menit'},
                                {text: '', colSpan: 3},
                                {},
                                {},
                            ],
                            [
                                {text: 'TOTAL JAM KERJA EFEKTIF', colSpan: 4, bold:true},
                                {},
                                {},
                                {},
                                {text: ''},
                                {text: '', colSpan: 3},
                                {},
                                {},
                            ],
                        ]
                    }
                },
            ]
        }
        // pdfMake.createPdf(docDefinition).download('Report.pdf');

        // open the PDF in a new window
        pdfMake.createPdf(docDefinition).open();

        // print the PDF
        // pdfMake.createPdf(docDefinition).print();

        // download the PDF
        // pdfMake.createPdf(docDefinition).download('optionalName.pdf');
    </script>
</body>
</html>