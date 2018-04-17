define({ "api": [
  {
    "type": "post",
    "url": "/login/user-logins",
    "title": "User Login Owner",
    "version": "1.0.0",
    "name": "postUserOwner",
    "group": "1_USER",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>User terbagi dalam tiga level, user Owner, user Admin, user Oprational. Untuk user Oprational hanya di gunakan untuk di applikasi EDC/Android.</p>",
    "parameter": {
      "fields": {
        "Parameter Body Param - Manual Login": [
          {
            "group": "Parameter Body Param - Manual Login",
            "type": "String",
            "optional": false,
            "field": "username",
            "description": "<p>username yang di gunakan pada saat signup.</p>"
          },
          {
            "group": "Parameter Body Param - Manual Login",
            "type": "Password",
            "optional": false,
            "field": "password",
            "description": "<p>password yang di gunakan pada saat login/pembaharuan password.</p>"
          }
        ],
        "Parameter Body Param - Sosmed Login": [
          {
            "group": "Parameter Body Param - Sosmed Login",
            "type": "String",
            "optional": false,
            "field": "SOSMED_PROVIDER",
            "description": "<p>GOOGLE,FACEBOOK,TWITTER,LINKEDIN,YAHOO.</p>"
          },
          {
            "group": "Parameter Body Param - Sosmed Login",
            "type": "String",
            "optional": false,
            "field": "SOSMED_ID",
            "description": "<p>authenticated sosmed id.</p>"
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
            "field": "USER",
            "description": "<p>Detail data user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "PROFILE",
            "description": "<p>Detai profile user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "USER_PERMISSIONS",
            "description": "<p>Detail permission user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_STORES",
            "description": "<p>Data Store/toko dari user id.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_MERCHANTS",
            "description": "<p>data list merchants per-toko.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_KARYAWANS",
            "description": "<p>data karyawan per-toko.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_USERS",
            "description": "<p>data user operational login.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n\t\"USER\": {\n\t\t\"PROFILE\": {},\n\t\t\"USER_PERMISSIONS\": [{}],\n\t\t\"LIST_STORES\": [{\n\t\t\t\"LIST_MERCHANTS\": [{}],\n\t\t\t\"LIST_KARYAWANS\": [{}],\n\t\t\t\"LIST_USERS\": [{}]\t\t\n\t\t}],\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error-Response-Definition": [
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-password",
            "description": "<p>Password salah.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-username",
            "description": "<p>Username salah atau tidak ditemukan.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-sosmed",
            "description": "<p>Login sosmed salah atau tidak ditemukan.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "Active-Code",
            "description": "<p>User belum melakukan authorize from email notify code. &quot;status=0&quot;.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTPS/1.1 404 Not Found\n{\n \"result\": \"wrong-password\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./example.js",
    "groupTitle": "1_USER",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/login/user-logins"
      }
    ]
  },
  {
    "type": "post",
    "url": "/login/user-resets",
    "title": "User Send Reset Password",
    "version": "1.0.0",
    "name": "postUserSendResetPassword",
    "group": "1_USER",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>Send-Reset-Password, akan bekerja pada saat, pengguna/user menekan tombol reset, maka param input di isi dengan email penggua tersebut. Kode unix untuk reset password akan di kirimkan ke email pengunna tersebut, yang akan di inputkan pada Validasi-Reset-Password. Untuk versi berikutnya akan di tambahkan param input untuk no handphone sebagai alternatif pilihan.</p>",
    "parameter": {
      "fields": {
        "Parameter Body Param": [
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "e-mail",
            "description": "<p>masukan email dari user/pengguna.</p>"
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
            "field": "USER",
            "description": "<p>Detail data user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "PROFILE",
            "description": "<p>Detai profile user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "USER_PERMISSIONS",
            "description": "<p>Detail permission user.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_STORES",
            "description": "<p>Data Store/toko dari user id.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_MERCHANTS",
            "description": "<p>data list merchants per-toko.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_KARYAWANS",
            "description": "<p>data karyawan per-toko.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "LIST_USERS",
            "description": "<p>data user operational login.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n\t\"USER\": {\n\t\t\"PROFILE\": {},\n\t\t\"USER_PERMISSIONS\": [{}],\n\t\t\"LIST_STORES\": [{\n\t\t\t\"LIST_MERCHANTS\": [{}],\n\t\t\t\"LIST_KARYAWANS\": [{}],\n\t\t\t\"LIST_USERS\": [{}]\t\t\n\t\t}],\n\t}\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error-Response-Definition": [
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-password",
            "description": "<p>Password salah.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-username",
            "description": "<p>Username salah atau tidak ditemukan.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "wrong-sosmed",
            "description": "<p>Login sosmed salah atau tidak ditemukan.</p>"
          },
          {
            "group": "Error-Response-Definition",
            "type": "result",
            "optional": false,
            "field": "Active-Code",
            "description": "<p>User belum melakukan authorize from email notify code. &quot;status=0&quot;.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTPS/1.1 404 Not Found\n{\n \"result\": \"wrong-password\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./example.js",
    "groupTitle": "1_USER",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/login/user-resets"
      }
    ]
  },
  {
    "type": "post",
    "url": "/laporan/contoh-charts/doughnut3d",
    "title": "Produk",
    "version": "1.0.0",
    "name": "PostChart",
    "group": "DASHBOARD_CHART",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>In this case &quot;apiErrorStructure&quot; is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p>",
    "filename": "./example.js",
    "groupTitle": "DASHBOARD_CHART",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/laporan/contoh-charts/doughnut3d"
      }
    ]
  },
  {
    "type": "post",
    "url": "/laporan/contoh-charts/doughnut3d",
    "title": "Produk2",
    "version": "1.0.0",
    "name": "postChartProduction2",
    "group": "DASHBOARD_CHART",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>In this case &quot;apiErrorStructure&quot; is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p>",
    "filename": "./example.js",
    "groupTitle": "DASHBOARD_CHART",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/laporan/contoh-charts/doughnut3d"
      }
    ]
  },
  {
    "type": "post",
    "url": "/laporan/sales-charts/detail-sales-bulanan",
    "title": "Laporan Produk Bulanan",
    "version": "1.0.0",
    "name": "postChartProductionlaporanBulanan",
    "group": "DASHBOARD_CHART",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>laporan detail sales bulanan dalam bentuk chart</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ACCESS_GROUP",
            "description": "<p>max char 35.</p>"
          },
          {
            "group": "Parameter",
            "type": "Date",
            "optional": false,
            "field": "TGL",
            "description": "<p>format tanggal &quot;yyyy-mm-dd&quot;.</p>"
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
            "field": "chart",
            "description": "<p>Definition chart and default respon.</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "categories",
            "description": "<p>Definition categories data  and default respon..</p>"
          },
          {
            "group": "Success 200",
            "type": "json",
            "optional": false,
            "field": "dataset",
            "description": "<p>value chart respon by input param.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{\n  \"chart\": {},\n  \"categories\": {},\n  \"dataset\": {},\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./example.js",
    "groupTitle": "DASHBOARD_CHART",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/laporan/sales-charts/detail-sales-bulanan"
      }
    ]
  }
] });
