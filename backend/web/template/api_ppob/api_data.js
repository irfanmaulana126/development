define({ "api": [
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/ppob/datas/kelompok-kategori",
    "title": "List Ketegori",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/ppob/datas/kelompok-kategori"
      }
    ],
    "description": "<p>List Produk Ketegori adalah refrensi penunjang pencarian/filter untuk Produk PPOB.</p>",
    "version": "1.0.0",
    "name": "PPOB_Kategori",
    "group": "KontrolGampang",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "./example.js",
    "groupTitle": "KontrolGampang"
  },
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/ppob/datas/kelompok-group",
    "title": "List Ketegori Group",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/ppob/datas/kelompok-group"
      }
    ],
    "description": "<p>List Produk Ketegori adalah refrensi penunjang pencarian/filter untuk Produk PPOB.</p>",
    "version": "1.0.0",
    "name": "PPOB_Kategori_Group",
    "group": "KontrolGampang",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "./example.js",
    "groupTitle": "KontrolGampang"
  },
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/ppob/datas/produk",
    "title": "Data Produk",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/ppob/datas/produk"
      }
    ],
    "version": "1.0.0",
    "name": "PPOB_Produk",
    "group": "KontrolGampang",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>produk PPOB hanya memiliki dua type &quot;PRABAYAR/PASCABAYAR&quot;, Pada Api PPOB Kontrol Gampang ini terdapat detail produk seperti HPP produk dari Sibisnis dan HPP produk dari Kontrol Gampang untuk client Kontrol Gampang.</p>",
    "parameter": {
      "fields": {
        "PARAMETER FILTER - [TYPE_NM:PRABAYAR/PASCABAYAR]": [
          {
            "group": "PARAMETER FILTER - [TYPE_NM:PRABAYAR/PASCABAYAR]",
            "type": "String",
            "optional": true,
            "field": "TYPE_NM",
            "defaultValue": "PRABAYAR/PASCABAYAR",
            "description": "<p>TYPE_NM mengelompokan produk apakah termasuk PRABAYAR/PASCABAYAR.</p>"
          }
        ],
        "PARAMETER FILTER - KELOMPOK": [
          {
            "group": "PARAMETER FILTER - KELOMPOK",
            "type": "String",
            "optional": true,
            "field": "KELOMPOK",
            "description": "<p>KELOMPOK grouping/mengelompokan produk bisnis.</p>"
          }
        ],
        "PARAMETER FILTER - KATEGORI": [
          {
            "group": "PARAMETER FILTER - KATEGORI",
            "type": "String",
            "optional": true,
            "field": "KTG_ID",
            "description": "<p>produk detail dari KELOMPOK.</p>"
          }
        ],
        "PARAMETER FILTER - ID_PRODUK": [
          {
            "group": "PARAMETER FILTER - ID_PRODUK",
            "type": "String",
            "optional": true,
            "field": "ID_PRODUK",
            "description": "<p>ID_PRODUK adalah kode unik dengan format &quot;h2h.KTG_ID.ID_PRODUK&quot;.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "ID_PRODUK",
            "description": "<p>adalah ID_PRODUK Filed yang di generate/dibuat otomatis oleh Kontrol Gampang sebagai alias/acuan untuk &quot;id&quot; produk Sibisnis.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "ID_CODE",
            "description": "<p>adalah id produk generate/dibuat oleh Sibisnis.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "TYPE_NM",
            "description": "<p>mengelompokan produk apakah termasuk PRABAYAR/PASCABAYAR.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "KELOMPOK",
            "description": "<p>grouping/mengelompokan produk bisnis.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "KTG_ID/KTG_NM",
            "description": "<p>mengelompokan secara lebih detail dan spesifikasi terhadap produk, berdasarkan  group KELOMPOK.</p>"
          }
        ]
      }
    },
    "filename": "./example.js",
    "groupTitle": "KontrolGampang"
  },
  {
    "type": "POST",
    "url": "https://production.kontrolgampang.com/ppob/sibisnis/master-data",
    "title": "Master Data",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/ppob/sibisnis/master-data"
      }
    ],
    "version": "1.0.0",
    "name": "Produk",
    "group": "SIBISNIS",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>Request PPOB ke Sibisnis melalui Api Kontrol Gampang. Request ini mendapatkan respon langsung dari Api Sibisnis, akan tetapi untuk request melalui Api KontrolGampang, dikarenakan prosess interface B to B tidak mengunakan Open Api secara langsung!. untuk check saldo di http://akun.ns1.dev.zonatik.com/login.php. user=KOGAM@ZON13121710 pass=1406855c45</p>",
    "parameter": {
      "fields": {
        "GET INFO KELOMPOK - [function:get-info-kelompok]": [
          {
            "group": "GET INFO KELOMPOK - [function:get-info-kelompok]",
            "type": "String",
            "optional": true,
            "field": "apikey",
            "defaultValue": "55c450f34a57c3160d5a8bf050f14068",
            "description": "<p>apikey adalah apikey development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "GET INFO KELOMPOK - [function:get-info-kelompok]",
            "type": "String",
            "optional": true,
            "field": "memberid",
            "defaultValue": "ZON13121710",
            "description": "<p>memberid adalah memberid development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "GET INFO KELOMPOK - [function:get-info-kelompok]",
            "type": "String",
            "optional": false,
            "field": "function",
            "defaultValue": "get-info-kelompok",
            "description": "<p>request post informasi kelompok produk tidak boleh kosong &quot;get-info-kelompok&quot;..</p>"
          },
          {
            "group": "GET INFO KELOMPOK - [function:get-info-kelompok]",
            "type": "String",
            "optional": false,
            "field": "tipe",
            "defaultValue": "POST/PRE",
            "description": "<p>tipe POST=PASCABAYAR(Digunakan dulu kemudian dibayar). PRE=PRABAYAR(Dibayar dulu kemudian di gunakan).</p>"
          }
        ],
        "GET INFO PRODUK - [function:get-info-produk]": [
          {
            "group": "GET INFO PRODUK - [function:get-info-produk]",
            "type": "String",
            "optional": true,
            "field": "apikey",
            "defaultValue": "55c450f34a57c3160d5a8bf050f14068",
            "description": "<p>apikey adalah apikey development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "GET INFO PRODUK - [function:get-info-produk]",
            "type": "String",
            "optional": true,
            "field": "memberid",
            "defaultValue": "ZON13121710",
            "description": "<p>memberid adalah memberid development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "GET INFO PRODUK - [function:get-info-produk]",
            "type": "String",
            "optional": false,
            "field": "function",
            "defaultValue": "get-info-produk",
            "description": "<p>request post informasi detail produk tidak boleh kosong &quot;get-info-produk&quot;.</p>"
          },
          {
            "group": "GET INFO PRODUK - [function:get-info-produk]",
            "type": "String",
            "optional": false,
            "field": "kategori_id",
            "defaultValue": "1",
            "description": "<p>kategori_id adalah &quot;id&quot; dari informasi kelompok atau group produk.</p>"
          }
        ],
        "INQUIRY - [function:h2h-inquiry]": [
          {
            "group": "INQUIRY - [function:h2h-inquiry]",
            "type": "String",
            "optional": true,
            "field": "apikey",
            "defaultValue": "55c450f34a57c3160d5a8bf050f14068",
            "description": "<p>apikey adalah apikey development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "INQUIRY - [function:h2h-inquiry]",
            "type": "String",
            "optional": true,
            "field": "memberid",
            "defaultValue": "ZON13121710",
            "description": "<p>memberid adalah memberid development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "INQUIRY - [function:h2h-inquiry]",
            "type": "String",
            "optional": false,
            "field": "function",
            "defaultValue": "h2h-inquiry",
            "description": "<p>request post detail informasi detail produk dan detail nominal yang harus di bayarkan.</p>"
          },
          {
            "group": "INQUIRY - [function:h2h-inquiry]",
            "type": "String",
            "optional": false,
            "field": "produk",
            "defaultValue": "1",
            "description": "<p>produk adalah id produk.</p>"
          },
          {
            "group": "INQUIRY - [function:h2h-inquiry]",
            "type": "String",
            "optional": false,
            "field": "id_pelangan",
            "defaultValue": "12345678",
            "description": "<p>id_pelangan adalah id pelanggan.</p>"
          }
        ],
        "BAYAR - [function:h2h-bayar]": [
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": true,
            "field": "apikey",
            "defaultValue": "55c450f34a57c3160d5a8bf050f14068",
            "description": "<p>apikey adalah apikey development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": true,
            "field": "memberid",
            "defaultValue": "ZON13121710",
            "description": "<p>memberid adalah memberid development KontrolGampang, dikosongkan atau tidak di isi di bolehkan, karena sudah default di server.</p>"
          },
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": false,
            "field": "function",
            "defaultValue": "h2h-bayar",
            "description": "<p>request post Pembayaran pembelian produk PPOB.</p>"
          },
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": false,
            "field": "produk",
            "defaultValue": "1",
            "description": "<p>produk adalah &quot;id&quot; produk.</p>"
          },
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": false,
            "field": "reff_id",
            "defaultValue": "123456789",
            "description": "<p>reff_id adalah kode unix refrensi, sebagai acuan pembayaran dari prosess inquiry sebelumnya.</p>"
          },
          {
            "group": "BAYAR - [function:h2h-bayar]",
            "type": "String",
            "optional": false,
            "field": "msisdn",
            "defaultValue": "123456789",
            "description": "<p>msisdn adalah nomor pelangan atau no telephon pelanggan.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example: request develompent  B to B sibisnis.",
          "content": "#request Kelompok Produk ke API Sibisnis.\n\t{ \n \t\t\"apikey\": \"55c450f34a57c3160d5a8bf050f14068\",\n \t\t\"function\": \"get-info-kelompok\",\n\t\t\"param\": {\n\t\t\t\"memberid\":\"ZON13121710\",\t\n\t\t\t\"tipe\":\"PRE\"\n\t\t},\t\t\n\t}\n\n#request Info Produk  ke API Sibisnis.\n\t{ \n \t\t\"apikey\": \"55c450f34a57c3160d5a8bf050f14068\",\n \t\t\"function\": \"get-info-produk\",\n\t\t\"param\": {\n\t\t\t\"memberid\":\"ZON13121710\",\t\n\t\t\t\"kategori_id\":\"1\"\n\t\t},\t\t\n\t}\n\n#request Inquery Produk  ke API Sibisnis.\n\t{ \n \t\t\"apikey\": \"55c450f34a57c3160d5a8bf050f14068\",\n \t\t\"function\": \"h2h-inquiry\",\n\t\t\"param\": {\n\t\t\t\"memberid\":\"ZON13121710\",\t\n\t\t\t\"produk\":\"1\",\n\t\t\t\"id_pelangan\":\"123456789\"\n\t\t},\t\t\n\t}\n\n#request Bayar Produk  ke API Sibisnis.\n\t{ \n \t\t\"apikey\": \"55c450f34a57c3160d5a8bf050f14068\",\n \t\t\"function\": \"h2h-bayar\",\n\t\t\"param\": {\n\t\t\t\"memberid\":\"ZON13121710\",\t\n\t\t\t\"produk\":\"1\",\n\t\t\t\"reff_id\":\"123456789\",\n\t\t\t\"msisdn\":\"085883319929\"\n\t\t},\t\t\n\t}",
          "type": "Object"
        }
      ]
    },
    "filename": "./example.js",
    "groupTitle": "SIBISNIS"
  }
] });
