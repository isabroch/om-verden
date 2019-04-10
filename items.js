const items = [{
    name: "Påskekyllinger (3)",
    id: 01,
    tagline: `“THE GANG” IS HERE`,
    price: 10,
    quantity: 0,
    image: 'images/chikkens.png',
    descShort: 'Caw caw!',
    descLong: 'Disse skønne påskekyllinger vil pynte ethvert påskebord. Kyllingerne er lavet af bæredygtigt uld, der kommer fra økologiske får og er fremstillet uden skadelige AZO-farver, formaldehyd, blegemidler og konserveringsmidler. Kyllingerne er produceret under Fairtrade mærket, som sørger for ordentlige løn- og arbejdsforhold. Alt dette ender ud i et slutprodukt der står stærkt, når man ser på miljøpåvirkning.',
    displayColor: '#FFD239',
    colors: ['#F7CB00', '#FFB0CE', '#FFFFFF'],
    boxStyles: ``,
    taglineStyles: ``
  },
  {
    name: "Pyntepåskeæg",
    id: 02,
    tagline: `ET ÆG DER VIL NOGET`,
    price: 10,
    quantity: 0,
    image: 'images/oneEgg.png',
    descShort: 'Flot pyntepåskeæg',
    descLong: null,
    displayColor: '#FFA756',
    colors: null,
    boxStyles: ``,
    taglineStyles: ``
  },
  {
    name: "Får",
    id: 03,
    tagline: `VI KAN IKKE FÅR NOK`,
    price: 40,
    quantity: 0,
    image: 'images/sheep.png',
    descShort: 'Fine farverige påske servietter',
    descLong: null,
    displayColor: '#FFB0CE',
    colors: null,
    boxStyles: ``,
    taglineStyles: ``
  },
  {
    name: "Påske sugerør (20)",
    id: 04,
    tagline: `SUG BARE LØS`,
    price: 30,
    quantity: 0,
    image: 'images/straws.png',
    descShort: 'De børne elskede påske sugerør',
    descLong: null,
    displayColor: '#67D7B5',
    colors: null,
    boxStyles: ``,
    taglineStyles: ``
  },
  {
    name: "Påske servietter (15)",
    id: 05,
    tagline: `SELV ET SVIN KAN BLIVE REN MED DE HER`,
    price: 15,
    quantity: 0,
    image: 'images/napkins.png',
    descShort: '',
    descLong: null,
    displayColor: '#FFD239',
    colors: null,
    boxStyles: ``,
    taglineStyles: ``
  },
  {
    name: "Påskeæg (9)",
    id: 06,
    tagline: `DET ER EGGCELENT`,
    price: 25,
    quantity: 0,
    image: 'images/multiEggs.png',
    descShort: '',
    descLong: null,
    displayColor: '#FFB0CE',
    colors: null,
    boxStyles: ``,
    taglineStyles: ``
  }
]

const products = document.querySelector('.items');
const html = items.map(item => {
  return `
        <li class="item item-${item.id}">
          <div class="info">
            <h2>${item.name}</h2>
            <h3>${item.price} kr.</h3>
          </div>
          <div class="wrapper-img">
            <img src="${item.image}" alt="">
          </div>
          <button class="quickBuy"><img src="images/addToCart.svg" alt="Hurtigt Køb"></button>
          <button class="buy">køb</button>
        </li>
        `
}).join('');
products.innerHTML = html;