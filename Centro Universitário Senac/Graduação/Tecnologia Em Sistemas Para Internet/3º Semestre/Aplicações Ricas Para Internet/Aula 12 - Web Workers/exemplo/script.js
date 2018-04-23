function travar() {
    postMessage("início");
    var j = 0;
    var n = 1e10;
    var p = n/100;
    
    for (var i=0;i<n;i++) {
        if (j++ > p) {
            j=0;
            postMessage(i);
        }
    }
    postMessage("fim");
}

onmessage = function(event) {
    travar();
}