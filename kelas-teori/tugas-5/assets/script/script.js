const main = document.querySelector('main');

let products = [];

fetch('https://dummyjson.com/products')
  .then((res) => res.json())
  .then((data) => {
    products.push(data);
  });

async function getProducts() {
  const result = await fetch('https://dummyjson.com/products');
  const products = result.json();
  return products;
}

async function renderProducts() {
  const data = await getProducts();
  data.products.forEach(({ title, brand, category, price, thumbnail }) => {
    main.innerHTML += `<div class="product-wrapper"> <img src=${thumbnail} alt="${title}"> <h4>${title}</h4> <span>${brand}</span> <span>${category}</span> <span>$${price}</span> </div>`;
  });
}

renderProducts();
