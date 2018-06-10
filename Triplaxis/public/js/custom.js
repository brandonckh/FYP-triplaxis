function sumItems(){
    reference = document.getElementsByClassName("quantity")
    for (var i = 0; i < reference.length; i++){
        normalize = parseInt(reference[i].value,10)
        document.getElementsByClassName("quantity")[i].value = normalize
        document.getElementsByClassName("itemTotal")[i].innerText =
            reference[i].value * document.getElementsByClassName("basePrice")[i].innerText;
    }
    subTotal();
}

function subTotal(){
    document.getElementById("subtotal").innerText = 0
    let ref = document.getElementsByClassName("itemTotal")
    temp = 0
    for (let i = 0 ; i < ref.length; i++){
            temp += parseInt(ref[i].innerText,10)
    }
    document.getElementById("subtotal").innerText = temp + ".00"

}

function increment(index){
    index.value++;
}

function decrement(index){
    return index.value > 1 ? index.value--: 0;
}
/*
document.addEventListener('DOMContentLoaded', function(){
    for (let i = 0; i < document.getElementsByClassName("quantity").length; i++){
        document.getElementsByClassName("decrement")[i].addEventListener('mouseup', function(){ 
            decrement(document.getElementsByClassName("quantity")[i])
            sumItems()
        });
        document.getElementsByClassName("increment")[i].addEventListener('mouseup', function(){ 
            increment(document.getElementsByClassName("quantity")[i])
            sumItems()
        });
        document.getElementsByClassName("quantity")[i].addEventListener('change', function(){ sumItems() });
    }
    sumItems()
}, false);*/
