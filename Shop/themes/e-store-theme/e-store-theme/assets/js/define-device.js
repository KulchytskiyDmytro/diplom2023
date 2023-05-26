//--------------------------------------------- define browser and device 
var isMobile = {
   // all devices with touchScreens 
   Android: function () {
      return navigator.userAgent.match(/Android/i); //
   },
   iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
   },
   BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
   },
   OperaMini: function () {
      return navigator.userAgent.match(/Opera Mini/i);
   },
   InternerExplorerMobile: function () {
      return navigator.userAgent.match(/IEMobile/i);
   },
   WindowsPhone: function () {
      return navigator.userAgent.match(/Windows Phone/i);
   },
   TabletOS: function () {
      return navigator.userAgent.match(/Tablet OS/i);
   },
   touchScreen: function () {
      return (
         isMobile.Android() ||
         isMobile.iOS() ||
         isMobile.BlackBerry() ||
         isMobile.OperaMini() ||
         isMobile.InternerExplorerMobile() ||
         isMobile.WindowsPhone() ||
         isMobile.TabletOS()
      );
   },
};
var isPC = {
   // operation system of pc devices
   WindowsPC: function () {
      return navigator.userAgent.match(/Wiondws NT/i);
   },
   Macintosh: function () {
      return navigator.userAgent.match(/Macintosh/i);
   },
   Linux: function () {
      return navigator.userAgent.match(/Linux/i);
   },
   Pc: function () {
      return (
         isPC.WindowsPC() ||
         isPC.Macintosh() ||
         isPC.Linux()
      );
   }
};
var isBrowse = {
   // operation system of pc devices
   Chrome: function () {
      return navigator.userAgent.match(/Chrome/i);
   },
   Firefox: function () {
      return navigator.userAgent.match(/Firefox/i);
   },
   Safari: function () {
      return navigator.userAgent.match(/Safari/i);
   },
   Opera: function () {
      return navigator.userAgent.match(/Opera/i);
   },
   IE: function () {
      return navigator.userAgent.match(/MSIE/i);
   },
   Edge: function () {
      return navigator.userAgent.match(/Edge/i);
   },
};

if (isBrowse.Firefox()) {
   document.body.classList.add('_Firefox');
} else if (isBrowse.Chrome()) {
   document.body.classList.add('_Chrome');
} else if (isBrowse.Safari()) {
   document.body.classList.add('_Safari');
} else if (isBrowse.Opera()) {
   document.body.classList.add('_Opera');
} else if (isBrowse.IE()) {
   document.body.classList.add('_IE');
} else if (isBrowse.Edge()) {
   document.body.classList.add('_Edge');
} else {
   document.body.classList.add('_unknown');
}

if (isMobile.touchScreen()) {
   document.body.classList.add('_touch');
} else if (isPC.Pc()) {
   document.body.classList.add('_pc');
} else {
   document.body.classList.add('_undefine');
}
//--------------------------------------------- define browser and device












// db.users.insertMany([
//    {
//       "Name": "Tom",
//       "Email": "ivanen@damil.com",
//       "Surname": "-",
//       "Phone": "+380689594234",
//       "Age": 22,
//       "Birthday": new Date('1999-12-02'),
//       "Date-registration": new Date('2020-16-10'),
//       "favoriteColors": [ "red", "white"],
//       "orders": 2,
//    },
//    {
//       "Name": "Addy",
//       "Email": "add@damil.com",
//       "Surname": "Brown",
//       "Phone": "+380683559264",
//       "Age": 21,
//       "Birthday": new Date('2000-12-02'),
//       "Date-registration": new Date('2020-10-10'),
//       "favoriteColors": [ "red", "white"],
//       "orders": 1,
//    },
//    {
//       "Name": "Sarah",
//       "Email": "sarablack@damil.com",
//       "Surname": "Blask",
//       "Phone": "+380689765434",
//       "Age": 19,
//       "Birthday": new Date('2002-12-02'),
//       "Date-registration": new Date('2020-20-10'),
//       "favoriteColors": [ "red", "white"],
//       "orders": 5,
//    },
// ])

// db.order.insertMany([
//    {
//       "ClientName": "Tom",
//       "ClientId" : "6177aa002d3bc1db8b97d770",
//       "adress": {
//          "city": "Kiev",
//          "Region": "Kiev",
//          "postindex": 13444,
//          "street": "lesiaUkrainka 6a",
//          "reciverName": "Tom Brow Junior",
//       },
//       "product": {
//          "productId": 2452345234523,
//          "NameProd": "football bal",
//          "price": 3253,
//       },
//       "date": new Date(),
//       "payed": false,
//       "proccesed": false,
//    },
// ])
// db.order.update({"clientId": "6177aa002d3bc1db8b97d770"},{$set: {"payed": true}})
// db.pdoducts.insertMany([
//    {
//       "CategoryName": "boxing",
//       "CategoryProducts": [
//          {
//             "prodName": "boxing gloves",
//             "availability": 3,
//             "priceUAH": 300,
//             "colors": [ "red", "white", "black"],
//             "sizes": ["small", "large"],
//          },
//          {
//             "prodName": "boxing shoes",
//             "availability": 40,
//             "priceUAH": 100,
//             "colors": [ "black-white", "red-white", "black-orange"],
//             "sizes": ["small", "medium", "large"],
//          },
//       ]
//    },
//    {
//       "CategoryName": "swimming",
//       "CategoryProducts": [
//          {
//             "prodName": "swimming glasses",
//             "availability": 10,
//             "priceUAH": 700,
//             "colors": [ "red", "white", "green", "blue"],
//             "sizes": ["small","medium", "large"],
//          },
//          {
//             "prodName": "swimming shorts",
//             "availability": 7,
//             "priceUAH": 1200,
//             "colors": [ "red", "blue", "black"],
//             "sizes": ["small","medium", "large"],
//          },
//       ]
//    },
//    {
//       "CategoryName": "judo",
//       "CategoryProducts": [
//          {
//             "prodName": "kimono",
//             "availability": 20,
//             "priceUAH": 3000,
//             "colors": ["white", "blue"],
//             "sizes": ["small","medium", "large"],
//          },
//          {
//             "prodName": "straps",
//             "availability": 30,
//             "priceUAH": 500,
//             "colors": [ "white", "yellow", "orange", "green", "brown", "black"],
//             "sizes": ["small", "large"],
//          },
//       ]
//    }
// ])