let btn = document.querySelector('#calcular');
let taxaJuros = 6.99;

btn.addEventListener('click',function(event) {
  let valorConta = document.querySelector('#valor').value.trim();
  let numeroParcelas = document.querySelector('#parcelas').value.trim();

  let valorParcela = (((Math.pow(106.99, (numeroParcelas/1))) * taxaJuros));
  document.querySelector('#resultado').textContent = valorParcela.toFixed(1);

  // (Math.pow((parseInt(1) + parseInt(6.99), (numeroParcelas/1))) * taxaJuros) / (((Math.pow((parseInt(1) + parseInt(taxaJuros)), (3/1))) - 1) * valorConta);

})
