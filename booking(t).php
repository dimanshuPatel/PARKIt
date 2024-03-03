<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Trail</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <style>
        body{
    color: white;
    
    background: linear-gradient(#222846,#120a00);
}

.spot {
width: 50px;
height: 100px;
border: 4px solid #a4cfe1;
display: inline-block;
text-align: center;
line-height: 100px;
margin-right: 10px;
cursor: pointer;
border-radius: 10px;


}

.car {
width: 80px;
height:89px;
background-image: url("https://png.pngtree.com/png-vector/20230110/ourmid/pngtree-car-top-view-image-png-image_6557068.png");
background-size: cover;
margin: 0PX;
display: none;
position: absolute;
top: 120px;
animation: move 3s ease-in-out 0.3s  normal backwards;

}

.parking{
text-align: center;
padding: 30px;
margin: 0px;
}

@keyframes move {
from{
    transform: translateX(10px);
    
    /* background-color:#E0D7C7; */

}
to{
    transform: translateY(-95px);
    /* background-color: #56453E; */
}
}

#booking-form{
padding: 40px;
margin: 30px;
text-align: center;
font-size:20px ;
color:white;
}

input{
  border-radius: 7px;
  height:2rem;
  width: 15rem;
  border: 5px solid #a4cfe1;
}

button{
  border-radius: 7px;
  height:2rem;
  width: 5rem;
  margin-top: 15px;
  background: #a4cfe1;
  color: black;
}

    </style>

</head>
<body>
    <div class="parking">
    <div class="spot" data-spot="Spot 1">Spot 1</div>
    <div class="car"></div>


    <div class="spot" data-spot="Spot 2">Spot 2</div>
    
    <div class="spot" data-spot="Spot 3">Spot 3</div>
    <div class="car"></div>
    <div class="spot" data-spot="Spot 4">Spot 4</div>
    <div class="car"></div>
    <div class="spot" data-spot="Spot 5">Spot 5</div>
    <div class="car"></div>
    <div class="spot" data-spot="Spot 6">Spot 6</div>
    <div class="car"></div>
    <div class="spot" data-spot="Spot 7">Spot 7</div>
    <div class="car"></div>
    
    <br>
    <br>
    <br class="t">Pick your spot and Park-IT<br><br>

    <br>

    <div class="spot" data-spot="Spot 8">Spot 8</div>
    <div class="car"></div>
    <div class="spot" data-spot="Spot 9">Spot 9</div>
    <div class="car"></div><div class="spot" data-spot="Spot 10">spot 10</div>
    <div class="car"></div><div class="spot" data-spot="Spot 11">spot 11</div>
    <div class="car"></div><div class="spot" data-spot="Spot 12">spot 12</div>
    <div class="car"></div>
</div>

<form id="booking-form" action="_handle(B).php" method="POST">
  <label for="name">Name:</label><br>
  <input type="text"  name="name" required><br>
  <label for="vno">Vehicle Registration Number:</label><br>
  <input type="text" name="vno" required><br>
  <label for="cno">Contact Number:</label><br>
  <input type="tel" id="cno" name="cno" required><br>
  <button type="submit">Book IT</button>
</form>

<script>
    document.querySelectorAll('.spot').forEach((spot) => {
    spot.addEventListener('click', () => {
      const car = document.querySelector('.car');
      car.style.left = `${spot.offsetLeft + spot.offsetWidth / 2 - car.offsetWidth / 2}px`;
      car.style.top = `${spot.offsetTop + spot.offsetHeight}px`;
      car.style.display = 'block';
    });
  });

      class ParkingSpot {
    constructor(spotNumber, isOccupied = false) {
      this.spotNumber = spotNumber;
      this.isOccupied = isOccupied;
    }

    parkCar(car) {
      if (!this.isOccupied) {
        this.isOccupied = true;
        console.log(`Car with registration number ${car.registrationNumber} parked at spot ${this.spotNumber}`);
      } else {
        console.log(`Spot ${this.spotNumber} is already occupied`);
      }
    }

    removeCar() {
      if (this.isOccupied) {
        this.isOccupied = false;
        console.log(`Car removed from spot ${this.spotNumber}`);
      } else {
        console.log(`Spot ${this.spotNumber} is already empty`);
      }
    }
  }

  class Car {
    constructor(registrationNumber) {
      this.registrationNumber = registrationNumber;
    }
  }

  class ParkingLot {
    constructor(numberOfSpots) {
      this.numberOfSpots = numberOfSpots;
      this.parkingSpots = [];
      for (let i = 1; i <= numberOfSpots; i++) {
        this.parkingSpots.push(new ParkingSpot(i));
      }
    }

    parkCar(car) {
      const availableSpot = this.parkingSpots.find((spot) => !spot.isOccupied);
      if (availableSpot) {
        availableSpot.parkCar(car);
      } else {
        console.log('No available parking spots');
      }
    }

    removeCar(spotNumber) {
      const spot = this.parkingSpots.find((spot) => spot.spotNumber === spotNumber);
      if (spot) {
        spot.removeCar();
      } else {
        console.log(`Spot ${spotNumber} does not exist`);
      }
    }
  }

  const parkingLot = new ParkingLot(5);
  const car1 = new Car('AB1234CD');
  const car2 = new Car('EF5678GH');

  parkingLot.parkCar(car1);
  parkingLot.parkCar(car2);
  parkingLot.removeCar(1);
  parkingLot.removeCar(2);
  document.querySelectorAll('.spot').forEach((spot) => {
  spot.addEventListener('click', () => {
    const car = document.querySelector('.car')
    car.style.left = ${spot.offsetLeft + spot.offsetWidth / 2 - car.offsetWidth / 2}px;
    car.style.top = ${spot.offsetTop + spot.offsetHeight}px;
    car.style.display = 'block';

    const spotNumber = spot.dataset.spot;
    const spot = parkingLot.parkingSpots.find((s) => s.spotNumber.toString() === spotNumber);

    if (spot && spot.isOccupied) {
      console.log(Spot ${spotNumber} is already occupied);
      return;
    }

    if (spot) {
      spot.parkCar(car1);
      console.log(Car with registration number ${car1.registrationNumber} parked at spot ${spotNumber});
    } else {
      console.log('Spot does not exist');
    }
  });
});
</script>
</body>
</html>