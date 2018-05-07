define({
  "name": "",
  "version": "0.0.0",
  "description": "",
  "title": "Apidoc Kogam",
  "order": [
    "VA PERMATA BANK",
    "GIT BILL"
  ],
  "header": {
    "title": "PENGHANTAR VA",
    "content": "<p>#Virtual Account</p>\n<div class=\"text-center\"><img src='https://image.kontrolgampang.com/apidoc/logo-dokumentasi.png' alt='Mountain View' height=\"100\"></div></br>\nDokumentasi Api Virtual Account Kontrol Gampang & tools Api Respon ini, merupakan panduan yang harus di ikuti dan diterapkan kepada semua development IT Kontrol Gampang sebagai standart development aplikasi.\njika menemukan kesulitan atau ada beberapa Api yang harus di ubah, selayaknya melakukan open tiket untuk melakukan perubahan untuk meningkatkan versi yang lebih baik dan stabil kedepanya.\n</br></br>\n<b>Simulasi Virtual Account Api Interface.</b>\n</br>\n<div style='align:justify'>\n\tPihak bank akan inquery pada api VA Kontrol Gampang untuk mendapatkan informasi dan melakukan akan sumbmit pembayaran atau revisi pembayaran Virtual Account, \n\tyang mana VA ini bertujuan untuk prosess pembayaran langanan atau deposit pada Kontrol Gampang. \n</div>\n<br>\n<div style='align:justify'>\n\t<b>Pembayaran Langganan Kontrol Gampang :</b> pembayaran langganan hanya di lakukan satu kali sesuai terbitnya invoice dan jumlah nominal dalam satuan IDR dalam periode \n\tyang sudah di tentukan. Dengan kata lain jika pembayaran sudah berhasil, maka secara otomatis pembayaran akan close, dan inquery berikutnya nominal bernilai 0, \n\tsampai terbitnya kembali invoice berikutnya.\n</div>\n<br>\n<div style='align:justify'>\n\t<b>Topup/Deposit Dompet Kontrol Gampang :</b> topup pada dompet Kontrol Gampang ditujukan untuk prosess pembayaran atau pembelian produk PPOB, \n\tyang mana dalam prosess TopUp tersebut harus menentukan jumlah nominal terlebih dahulu pada aplikasi/web dashboard client kontrol gampang.\n\tWaktu yang ditentukan dalam prosess transfer pada virtual account client maksimal 2jam, jika lebih dari waktu tersebut, maka prosess tidak dapat dilakukan,\n\tmerchant harus melakukan prosess awal kembali, yang mana harus memulai kembali menentukan jumlah yang akan di topup pada aplikasi/web dashboard.\n</div>\n<br>\n<div style='align:justify'>\n\t<b>Number Virtual Account :</b> Virtual Account number hanya dapat di aktifkan dengan memenuhi persyaratan registrasi yang sudah di tentukan pada aplikasi Kontrol Gampang.\n</div>\n</br></br>\n<b>Ilustrasi Virtual Account Api Interface.</b>\n</br>\n<div class=\"text-center\"><img src='https://image.kontrolgampang.com/apidoc/va-permatabank.jpg' alt='Mountain View' width=\"100%\" height=\"300\"></div></br>\n<div style='align:justify'>\n\t<b>GIT BILL :</b> POST API untuk prosess inquery untuk mendapatkan informasi dari Virtual Account client seperti Number, Nominal, periode, status dan lain-lain.\n\t</br>\n\t<b>PAY BILL :</b> POST API untuk submit prosess pembayaran.\n\t</br>\n\t<b>REVERSAL BILL :</b> POST API untuk revisi atau pembatalan prosess pembayaran.\n</div>\n</br>\n"
  },
  "footer": {
    "title": "PRIVASI & KEAMANAN",
    "content": "<h2>PRIVASI &amp; KEAMANAN</h2>\n<p>Dilarang keras menyebarkan dokomen API ini, kepada pihak-pihak yang belum memiliki perjanjian NDE (Non disclosure agreement) terlebih dahulu kepada PT. Kogam Artha Sejahtra.</p>\n"
  },
  "template": {
    "withCompare": true,
    "withGenerator": false
  },
  "sampleUrl": false,
  "defaultVersion": "0.0.0",
  "apidoc": "0.3.0",
  "generator": {
    "name": "apidoc",
    "time": "2018-05-07T11:15:06.127Z",
    "url": "http://apidocjs.com",
    "version": "0.17.6"
  }
});
