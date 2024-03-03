<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://kit.fontawesome.com/e8fa2e31b4.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="payment.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto' , sans-serif;
    color: #444;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container{
    display: flex;
    width: 67%;
    border: 1px solid #ccc;
    border-radius: 7px;
}

.left{
    width: 25%;
    font-weight: bold;
}

.left p{
    padding: 30px 20px;
}

.methods{
    padding: 10px 0;
}

.methods div{
    padding: 7px 20px;
    cursor: pointer;
    font-size: 15px;
}

.methods div:hover{
    box-shadow: 0 0 10px rgba(172, 255 , 47 , 0.196);
}

.methods div::after{
    content: '';
    display: inline-block;
    color: greenyellow;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 4px 0 4px 4px;
    border-left-color: var(--fondy-success);
    margin-left: 10px;
}

.fa-solid{
    margin-right: 10px;
    font-size: 22px;
    color: #aaa;
}

.center{
    width: 50%;
    border-right: 1px solid #ccc;
    border-left: 1px solid #ccc;
    height: 70vh;
}

.center a{
    width: 100%;
    padding: 2px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.right p{
    text-align: center;
}

.right{
    width: 25%;
}

.right a{
    padding: 30px 20px;
    font-weight: bold;
}

.details{
    padding: 20px 20px;
}

.right a{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
}

.card-details{
    padding: 20px 80px;
}

.card-details .c-number{
    width: 100%;
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 0 12px;
    margin-top: 10px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

input{
    border: none;
    border-radius: 3px;
    outline: none;
}

.c-details{
    display: flex ;
    width: 100%;
    justify-content: space-between;
    margin: 20px 0;
}

.cc-exp{
    border: 1px solid #aaa;
    border-radius: 3px;
    height: 50px;
    margin-top: 10px;
    padding: 12px;
    width: 150px;
}

.c-details .cvv-box{
    border: 1px solid #aaa;
    margin-top: 10px;
    padding: 12px;
    height: 50px;
    border-radius: 3px;
    display: flex;
    justify-content: space-between;
    width: 108px;
}

.cc-cvv{
    width: 60px;
}

.email{
    width: 100%;
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 0 12px;
    height: 50px;
    margin-top: 10px;
}

button{
    width: 100%;
    border: none;
    height: 50px;
    border-radius: 3px;
    margin-top: 30px;
    font-size: 18px;
    color: #444;
    background-color: greenyellow;
}

button:hover{
    background-color: #444;
    color: white;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <p>Payment Method</p>
            <hr style="border:1px solid #ccc;margin: 0 15px;">
            <div class="methods">
                <div onclick="doFun()" id="tColorA" style="color: greenyellow;"> <i class='bx bxs-credit-card' style="color: greenyellow;"></i> Payment by Card</div>
                <div onclick="doFunA()" id="tColorB"> <i class='bx bxs-bank'></i> Internet banks</div>
                <div onclick="doFunB()" id="tColorC"> <i class='bx bxs-wallet'></i> Apple/Google Pay</div>
                <hr style="border: 1px solid #ccc; margin: 0 15px;">
            </div>
        </div>
        <div class="center">
            <a href="https://www.shift4shop"
            ><img src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" alt="Credit Card Logos" title="Credit Crad Logos" width="100%" height="auto"></a>
            <hr style="border: 1px solid #ccc;margin: 0 15px;">

            <div class="card-details">
                <form action="_handle(p).php" method="post">
                    <p>Card number</p>
                    <div class="c-number" id="c-number">
                        <input type="number" name="cnum" class="cc-number
                        " placeholder="Card number" maxlength="19" required>
                        <i class='bx bxs-credit-card' style="margin: 0;"></i>
                    </div>

                    <div class="c-details">
                        <div>
                            <p>Expiry data</p>
                            <input name="date" class="cc-exp" placeholder="MM/YY" required maxlength="5" required>
                        </div>
                        <div>
                            <p>CVV</p>
                            <div class="cvv-box" id="cvv-box">
                             <input name="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3" required>
                             <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>   
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <p>Email</p>
                        <input type="email" placeholder="example@gmail.com" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">PAY NOW</button>
                </form>
            </div>
        </div>
        <div class="right">
            <p>Order information</p>
            <hr style="border: 1px solid #ccc;margin: 0 15px;">
            <div class="details">
                <div style="font-weight: bold; padding: 3px 0;">Order Description</div>
                <div style="padding: 3px 0;">Test payment</div>
            </div>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <a href="https://www.shift4shop"
            ><img src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" alt="Credit Card Logos" title="Credit Crad Logos" width="100%" height="auto"></a>
        </div>
    </div>
    <script>
        let tColorA = document.getElementById('.tColorA'),
tColorB = document.getElementById('.tColorB'),
tColorC = document.getElementById('.tColorC'),
iconA = document.querySelector('.fa-credit-card'),
iconB = document.querySelector('.fa-building-columns'),
iconC = document.querySelector('.fa-wallet'),
cDetails = document.querySelector('.card-details');

function doFun() {
    tColorA.style.color = "greenyellow";
    tColorB.style.color = "#444";
    tColorC.style.color = "#444";
    iconA.style.color = "greenyellow";
    iconB.style.color = "#aaa";
    iconC.style.color = "#aaa";
    cDetails.style.display = "block";
}

function doFunA() {
    tColorA.style.color = "#444";
    tColorB.style.color = "greenyellow";
    tColorC.style.color = "#444";
    iconA.style.color = "#aaa";
    iconB.style.color = "greenyellow";
    iconC.style.color = "#aaa";
    cDetails.style.display = "none";
}

function doFunB() {
    tColorA.style.color = "#444";
    tColorB.style.color = "#444";
    tColorC.style.color = "greenyellow";
    iconA.style.color = "#aaa";
    iconB.style.color = "#aaa";
    iconC.style.color = "greenyellow";
    cDetails.style.display = "none";
}

let cNumber = document.getElementById('number');
cNumber.addEventListener('keyup',function(e){
    let num = cNumber.value;

    let newValue = '';
    num = num.replace(/\s/g,'');
    for(var i = 0; i < num.length; i++){
        if(i%4 == 0 && i>0) newValue = newValue.concat('');
        newValue = newValue.concat(num[i]);
        cNumber.value = newValue;
    }

    let ccNum = document.getElementById('c-number');
    if(num.length<16){
        ccNum.style.border="1px solid red";
    }
    else{
        ccNum.style.border="1px solid greenyellow";
    }
});

let eDate = document.getElementById('e-date');
eDate.addEventListener('keyup' , function(e){

    let newInput = eDate.value;

    if(e.which != 8){
        var numChars = e.target.value.length;
        if(numChars ==2 ){
            var thisVal = e.target.value;
            thisVal += '/';
            e.target.value = thisVal;
            console.log(thisVal.length)
        }
    }

    if(newInput.length<5){
        eDate.style.border = "1px solid red";
    }
    else{
        eDate.style.border = "1px solid greenyellow";
    }
});


let cvv = document.getElementById('cvv');
cvv.addEventListener('keyup',function(e){

    let elen = cvv.value;
    let cvvBox = document.getElementById('cvv-box');
    if(elen.length<3){
        cvvBox.style.border= "1px solid red";
    }
    else{
        cvvBox.style.border = "1px solid greenyellow";
    }
})
    </script>
</body>
</html>