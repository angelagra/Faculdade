// A função recebe N, que é quantos números primos se deseja
function primos (n) {
    var i = 2;
    for (var count = 1; count <= n; ) {
        for (var c = 2 ; c <= i - 1 ; c++ ) {
            if ( i%c == 0 )
                break;
        }
        if (c == i) {
            // i é um número primo //
            postMessage(i); // pega o i e da mostra todos os numero que são primos
            count++;
        }
        i++;
    }
}

onmessage = function(event){
      primos(event.data); //
}