define({ "api": [
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/VirtualAccountH2H/service/GetBill",
    "title": "GIT BILL",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/virtual-account-h2h/service/get-bill"
      }
    ],
    "version": "1.0.0",
    "name": "post_Git_Bill",
    "group": "VA_PERMATA_BANK",
    "permission": [
      {
        "name": "none"
      },
      {
        "name": "Api Key Header"
      }
    ],
    "description": "<p>Git Bill inquery data Kontrol Gampang.</p>",
    "parameter": {
      "fields": {
        "Parameter Body Param": [
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "ApiKey",
            "description": "<p>masukan email dari user/pengguna.</p>"
          },
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "GetBillRq",
            "description": "<p>object file.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "\"GetBillRq\":{\n  \"INSTCODE\": \"011\",\n  \"VI_VANUMBER\": \"12234567891234567\",\n  \"VI_TRACENO\": \"000001\",\t\n  \"VI_TRNDATE\": \"2017-09-13T14:00:40.000z\",\t\n  \"VI_DELCHANNEL\": \"1234567890\"\n}",
          "type": "json"
        }
      ]
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
    "groupTitle": "VA_PERMATA_BANK"
  },
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/VirtualAccountH2H/service/PayBill",
    "title": "PAY BILL",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/virtual-account-h2h/service/pay-bill"
      }
    ],
    "version": "1.0.0",
    "name": "post_Pay_Bill",
    "group": "VA_PERMATA_BANK",
    "permission": [
      {
        "name": "none"
      },
      {
        "name": "Api Key Header"
      }
    ],
    "description": "<p>Git Bill inquery data Kontrol Gampang.</p>",
    "parameter": {
      "fields": {
        "Parameter Body Param": [
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "ApiKey",
            "description": "<p>masukan email dari user/pengguna.</p>"
          },
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "GetBillRq",
            "description": "<p>object file.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "\"GetBillRq\":{\n  \"INSTCODE\": \"011\",\n  \"VI_VANUMBER\": \"12234567891234567\",\n  \"VI_TRACENO\": \"000001\",\t\n  \"VI_TRNDATE\": \"2017-09-13T14:00:40.000z\",\t\n  \"VI_DELCHANNEL\": \"1234567890\"\n}",
          "type": "json"
        }
      ]
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
    "groupTitle": "VA_PERMATA_BANK"
  },
  {
    "type": "post",
    "url": "https://production.kontrolgampang.com/VirtualAccountH2H/service/RevBill",
    "title": "REVERSAL BILL",
    "sampleRequest": [
      {
        "url": "https://production.kontrolgampang.com/virtual-account-h2h/service/rev-bill"
      }
    ],
    "version": "1.0.0",
    "name": "post_Reversal_Bill",
    "group": "VA_PERMATA_BANK",
    "permission": [
      {
        "name": "none"
      },
      {
        "name": "Api Key Header"
      }
    ],
    "description": "<p>Git Bill inquery data Kontrol Gampang.</p>",
    "parameter": {
      "fields": {
        "Parameter Body Param": [
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "ApiKey",
            "description": "<p>masukan email dari user/pengguna.</p>"
          },
          {
            "group": "Parameter Body Param",
            "type": "String",
            "optional": false,
            "field": "GetBillRq",
            "description": "<p>object file.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example:",
          "content": "\"GetBillRq\":{\n  \"INSTCODE\": \"011\",\n  \"VI_VANUMBER\": \"12234567891234567\",\n  \"VI_TRACENO\": \"000001\",\t\n  \"VI_TRNDATE\": \"2017-09-13T14:00:40.000z\",\t\n  \"VI_DELCHANNEL\": \"1234567890\"\n}",
          "type": "json"
        }
      ]
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
    "groupTitle": "VA_PERMATA_BANK"
  }
] });
