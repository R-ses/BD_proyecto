function shellSort(arr) {
    var increment = arr.length / 2;
    while (increment > 0) {
        for (i = increment; i < arr.length; i++) {
            var j = i;
            var temp = arr[i];

            while (j >= increment && arr[j-increment] > temp) {
                arr[j] = arr[j-increment];
                j = j - increment;
            }
    
            arr[j] = temp;
        }

        if (increment == 2) {
            increment = 1;
        } else {
            increment = parseInt(increment * 5 / 11);
        }
    }
    return arr;
}

document.getElementById("btn-ordena").addEventListener("click", function() {
    var input = document.getElementById("arrayShell").value;
    if(input == '') {
        document.getElementById("simul-resul").innerHTML = "No hay datos para ordenar.";
    } else {
        var arr;
        if(document.getElementById("numerosCadenas").checked) {
            arr = shellSort(input.replace(/\s/g, '').split(","));
        } else {
            arr = shellSort(input.replace(/\s/g, '').split(",").map(Number));
        }
        console.log(arr);
        document.getElementById("simul-resul").innerHTML = "Resultado: <br>";
        for(var i = 0; i < arr.length; i++) {
            document.getElementById("simul-resul").innerHTML += arr[i] + "<br>";
        }
    }
});