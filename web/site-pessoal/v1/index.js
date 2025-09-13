function escrever(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ''
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 150 * i);
    })
  }
  let titulodePrimeiroNivel=document.querySelector('h1')
  let titulodeSegundoNivel=document.querySelector('h2')
  //escrever(titulodePrimeiroNivel)
  escrever(titulodeSegundoNivel)
