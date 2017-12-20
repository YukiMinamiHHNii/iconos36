//Código Frontend

function parImpar() {
  let numero = prompt('Ingresa un número'),
    modulo = numero % 2,
    par = `El número: ${numero} es Par`,
    impar = `El número: ${numero} es Impar`

  return (modulo === 0) ? par : impar
}

alert( parImpar() )


//Código Backend
/* function parImpar() {
  process.stdout.write('Ingresa un número: ')

  process.stdin.once('data', numero => {
    let modulo = numero % 2,
      par = `El número: ${numero} es Par`,
      impar = `El número: ${numero} es Impar`,
      residuo = (modulo === 1) ? impar : par

    process.stdout.write(residuo)
    process.exit()
  })
}
parImpar()

console.log(document) */
